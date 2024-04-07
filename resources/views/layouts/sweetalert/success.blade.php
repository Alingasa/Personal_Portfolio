
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   @if(session('success'))
       Swal.fire({
           icon: 'success',
           title: 'Success!',
           showConfirmButton: false,
           timer: 2500
       });
       @elseif(session('update_success'))
       Swal.fire({
           icon: 'success',
           title: 'Update Successfully!',
           showConfirmButton: false,
           timer: 2500
       });
       @elseif(session('add_success'))
       Swal.fire({
           icon: 'success',
           title: 'Added Successfully!',
           showConfirmButton: false,
           timer: 2500
       });
       @elseif(session('register'))
       Swal.fire({
           icon: 'success',
           title: 'Registered Successfully!',
           showConfirmButton: false,
           timer: 2500
       });
       @elseif(session('login'))
       Swal.fire({
           icon: 'success',
           title: 'Login Successfully!',
           showConfirmButton: false,
           timer: 2500
       });
   @endif
</script>

<script>
   @if(session('delete'))
       Swal.fire({
           icon: 'success',
           title: 'deleted Successfully!',
           showConfirmButton: false,
           timer: 2500
       });
   @endif
</script>