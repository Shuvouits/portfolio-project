
    $(document).ready(function() {
        // Listen for file input change
        $('#photoInput').on('change', function(event) {
            var file = event.target.files[0]; // Get the selected file

            if (file) {
                var reader = new FileReader(); // Create a FileReader instance

                reader.onload = function(e) {
                    // Set the image source to the file's data URL
                    $('#photoPreview').attr('src', e.target.result);
                };

                // Read the selected file as a data URL
                reader.readAsDataURL(file);
            }
        });
    });

