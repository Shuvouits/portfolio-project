$(document).ready(function () {

     // Initialize Summernote for the initial textarea
     $('#service-description-0').summernote({
        height: 200,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview']]
        ]
    });


    let rowIndex = 1; // Keep track of row index for unique IDs

    // Add new row
    $('#add-row').click(function () {
        let newRow = `
            <div class="form-row mb-3">
                <label for="icon-${rowIndex}" class="form-label">Icon</label>

                <input type="file" class="form-control mb-2 photoInput" id="icon-${rowIndex}" name="icon[]" data-index="${rowIndex}">
<img src="" class="photoPreview" id="preview-${rowIndex}" width="50" height="50" style="display: none; margin-top: 10px; margin-bottom: 10px" />

                <label for="service-name-${rowIndex}" class="form-label">Service Name</label>
                <input type="text" class="form-control mb-2" placeholder="Example: Web Development" id="service-name-${rowIndex}" name="service_name[]">

                <label for="service-description-${rowIndex}" class="form-label">Service Description</label>
                <textarea  class="form-control mb-2" id="service-description-${rowIndex}" name="service_description[]"></textarea>

                <button type="button" class="btn btn-danger remove-row">

                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="25" height="25"
                                                                                fill="currentColor"
                                                                                class="bi bi-trash3-fill"
                                                                                viewBox="0 0 16 16">
                                                                                <path
                                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                                            </svg>


                </button>
            </div>
        `;
        $('#form-rows').append(newRow);

        // Initialize Summernote for the new textarea
        $(`#service-description-${rowIndex}`).summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });



        rowIndex++;
    });

    // Remove row
    $('#form-rows').on('click', '.remove-row', function () {
        $(this).closest('.form-row').remove();
    });





   // Image preview
   // Update image preview dynamically
   $('#form-rows').on('change', '.photoInput', function (event) {
    const index = $(this).data('index'); // Get the data-index value
    const file = event.target.files[0]; // Get the selected file

    if (file) {
        const reader = new FileReader(); // Create FileReader instance
        reader.onload = function (e) {
            // Dynamically set the image preview and make it visible
            const preview = $(`#preview-${index}`);
            preview.attr('src', e.target.result).css('display', 'block');
        };
        reader.readAsDataURL(file); // Read the selected file
    }
});







});
