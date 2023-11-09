<script>
    let timerInterval;
Swal.fire({
  title: "{{Auth::user()->name}}",
  text: `{{session('message')}}`,
    icon:'success',
  timer: 4000,
  willClose: () => {
    clearInterval(timerInterval);
  }
});
</script>
