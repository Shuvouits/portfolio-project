<script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>


     <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>


    {{--
 <script src="{{ asset('backend/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>

    --}}



    <script src="{{ asset('backend/assets/js/plugins.js') }}"></script>

    <!-- Apexcharts -->
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/pages/dashboard-blog.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

   <!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#editor').summernote({
            height: 200, // Set the height of the editor
            toolbar: [
                // Customize toolbar buttons
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@if(session('success'))
<script>
    Swal.fire({
        toast: true,
        icon: 'success',
        title: '{{ session('success') }}',
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        customClass: {
            title: 'swal-custom-title',
        }
    });
</script>

<style>
    .swal-custom-title {
        color: gray !important; /* Title color */
        font-weight: bold; /* Optional: Make the text bold */
    }
</style>
@endif


