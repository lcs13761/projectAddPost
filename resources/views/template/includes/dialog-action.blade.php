@push('css')

@endpush

@push('js')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let success = document.getElementById('resultSucess');
        let error = document.getElementById('resultError');
        const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
        if (success !== null) {
            Toast.fire({
                icon: 'success',
                title: success.value
            })
        }

        if (error !== null) {
            Toast.fire({
                icon: 'error',
                title: error.value
            })
        }
    </script>

@endpush
