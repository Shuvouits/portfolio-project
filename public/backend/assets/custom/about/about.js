$(document).ready(function () {
    let rowIndex = 1; // Keep track of row index for unique IDs

    // Add new row
    $('#add-row').click(function () {
        let newRow = `
            <div class="form-row mb-3">
                <label for="degree-${rowIndex}" class="form-label">Name of Degree</label>
                <input type="text" class="form-control mb-2" placeholder="Enter your degree name" id="degree-${rowIndex}" name="degrees[]">

                <label for="institution-${rowIndex}" class="form-label">Name of Institution</label>
                <input type="text" class="form-control mb-2" placeholder="Enter your institution name" id="institution-${rowIndex}" name="institutions[]">

                <button type="button" class="btn btn-danger remove-row">Remove</button>
            </div>
        `;
        $('#form-rows').append(newRow);
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

    //company script


    // Add new row
    $('#add-row-company').click(function () {
        let newRow = `
            <div class="form-row mb-3">
                <label for="company-${rowIndex}" class="form-label">Company Name</label>
                <input type="text" class="form-control mb-2" placeholder="Enter your company name" id="company-${rowIndex}" name="company[]">

                <label for="address-${rowIndex}" class="form-label">Company Address</label>
                <input type="text" class="form-control mb-2" placeholder="Enter company address" id="address-${rowIndex}" name="address[]">

                 <label for="date-${rowIndex}" class="form-label">Date</label>
                <input type="date" class="form-control mb-2" id="date-${rowIndex}" name="date[]">

                <button type="button" class="btn btn-danger remove-row-company">Remove</button>
            </div>
        `;
        $('#form-rows-company').append(newRow);
        rowIndex++;
    });

    // Remove row
    $('#form-rows-company').on('click', '.remove-row-company', function () {
        $(this).closest('.form-row').remove();
    });

    // Handle form submission
    $('#dynamic-form-company').submit(function (event) {
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

    // Add new row
    $('#add-row-technology').click(function () {
        let newRow = `
            <div class="form-row mb-3">
                <label for="technology-${rowIndex}" class="form-label">Prefered Technology</label>
                <input type="text" class="form-control mb-2" placeholder="Enter technology name" id="technology-${rowIndex}" name="technology[]">



                <button type="button" class="btn btn-danger remove-row-technology">Remove</button>
            </div>
        `;
        $('#form-rows-technology').append(newRow);
        rowIndex++;
    });

    // Remove row
    $('#form-rows-technology').on('click', '.remove-row-technology', function () {
        $(this).closest('.form-row').remove();
    });

    // Handle form submission
    $('#dynamic-form-technology').submit(function (event) {
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





});
