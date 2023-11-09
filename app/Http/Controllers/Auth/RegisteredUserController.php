<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{

    public function index()
    {
        $users=User::where('designation','!=','admin')->get();
       return view('admin.views.users.index',compact('users'));
    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect()->route('users')->with('status','user-added')->with('message','User Added');
    }


    public function edit($id){
        $user=User::findOrFail($id);
        return view('admin.views.users.edit',compact('user'));
    }

    public function update(Request $request,$id){
        $user=User::findOrFail($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        return redirect()->route('users')->with('status','user-updated')->with('message','User Updated');
    }

    public function destroy($id){
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('users')->with('status','user-deleted')->with('message','User Deleted');
    }
}

