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

                <div class='row'  style="display: flex; align-items:center; justify-content: space-between">
                   <div class="col-md-11">

                         <label for="date-${rowIndex}" class="form-label">Date</label>
                         <input type="date" class="form-control mb-2" id="date-${rowIndex}" name="date[]">

                   </div>
                   <div class="col-md-1 d-flex justify-content-end ">

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
                </div>




            </div>
        `;
        $('#form-rows').append(newRow);
        rowIndex++;
    });

    // Remove row
    $('#form-rows').on('click', '.remove-row', function () {
        $(this).closest('.form-row').remove();
    });



    //company script


    // Add new row
    $('#add-row-company').click(function () {
        let newRow = `
            <div class="form-row mb-3">
                <label for="company-${rowIndex}" class="form-label">Company Name</label>
                <input type="text" class="form-control mb-2" placeholder="Enter your company name" id="company-${rowIndex}" name="company_name[]">

                <label for="address-${rowIndex}" class="form-label">Company Address</label>
                <input type="text" class="form-control mb-2" placeholder="Enter company address" id="address-${rowIndex}" name="address[]">

                <label for="start-date-${rowIndex}" class="form-label">Start Date</label>
                <input type="date" class="form-control mb-2"  id="start-date-${rowIndex}" name="start_date[]">

                <div class='row'  style="display: flex; align-items:center; justify-content: space-between">

                   <div class="col-md-11">

                         <label for="end-date-${rowIndex}" class="form-label">End Date</label>
                         <input type="date" class="form-control mb-2" id="end-date-${rowIndex}" name="end_date[]">

                   </div>
                   <div class="col-md-1 d-flex justify-content-end">

                        <button type="button" class="btn btn-danger remove-row-company">

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

                </div>




            </div>
        `;
        $('#form-rows-company').append(newRow);
        rowIndex++;
    });

    // Remove row
    $('#form-rows-company').on('click', '.remove-row-company', function () {
        $(this).closest('.form-row').remove();
    });




    //Technology script

    // Add new row
    $('#add-row-technology').click(function () {
        let newRow = `
            <div class="form-row mb-3">
                <label for="technology-${rowIndex}" class="form-label">Prefered Technology</label>

                <div class="row">
                    <div class="col-md-11">
                        <input type="text" class="form-control mb-2" placeholder="Enter technology name" id="technology-${rowIndex}" name="technology[]">
                    </div>
                    <div class="col-md-1 d-flex justify-content-end ">
                        <button type="button" class="btn btn-danger remove-row-technology">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                             <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                        </svg>

                        </button>

                    </div>
                </div>





            </div>
        `;
        $('#form-rows-technology').append(newRow);
        rowIndex++;
    });

    // Remove row
    $('#form-rows-technology').on('click', '.remove-row-technology', function () {
        $(this).closest('.form-row').remove();
    });







});
