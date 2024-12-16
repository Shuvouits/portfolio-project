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
                <input type="file" class="form-control mb-2"  id="icon-${rowIndex}" name="icon[]">

                <label for="service-name-${rowIndex}" class="form-label">Service Name</label>
                <input type="text" class="form-control mb-2" placeholder="Example: Web Development" id="service-name-${rowIndex}" name="service-name[]">

                <label for="service-description-${rowIndex}" class="form-label">Service Description</label>
                <textarea  class="form-control mb-2" id="service-description-${rowIndex}" name="service-description[]"></textarea>

                <button type="button" class="btn btn-danger remove-row">Remove</button>
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

    // Handle form submission
    $('#dynamic-form').submit(function (event) {
        event.preventDefault(); // Prevent actual form submission

        // Collect form data
        let formData = $(this).serializeArray();
        console.log(formData); // Output collected data to console

        // Example: Send the data via AJAX
        // $.ajax({
        //     url: '/your-endpoint',
        //     method: 'POST',
        //     data: formData,
        //     success: function (response) {
        //         alert('Form submitted successfully!');
        //     },
        //     error: function (error) {
        //         alert('Something went wrong!');
        //     }
        // });
    });




    //Technology script







});
