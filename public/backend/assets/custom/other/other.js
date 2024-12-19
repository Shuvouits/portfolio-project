
    $(document).ready(function () {
        $('#logo').on('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#preview-logo').attr('src', e.target.result).show();
                }
                reader.readAsDataURL(file);
            }
        });
    });

