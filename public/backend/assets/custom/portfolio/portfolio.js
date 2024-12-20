
$(document).ready(function () {

    // Initialize Summernote for the initial textarea
    $('.description').summernote({
       height: 200,
       toolbar: [
           ['style', ['style']],
           ['font', ['bold', 'italic', 'underline', 'clear']],
           ['para', ['ul', 'ol', 'paragraph']],
           ['insert', ['link', 'picture', 'video']],
           ['view', ['fullscreen', 'codeview']]
       ]
   });


    let rowIndex = $('#form-rows .form-row').length; // Start from the last row index // Keep track of row index for unique IDs

   // Add new row
   $('#add-row').click(function () {
       let newRow = `
           <div class="form-row mb-3">

               <input type="hidden" name="id[]" id="portfolio-${rowIndex}" />


               <label for="photo-${rowIndex}" class="form-label">Image</label>
                <input type="file" class="form-control mb-2 photoInput" id="photo-${rowIndex}" name="photo[]" data-index="${rowIndex}">


                <img src="" class="photoPreview" id="preview-${rowIndex}" width="50" height="50" style="display: none; margin-top: 10px; margin-bottom: 10px" />

               <label for="title-${rowIndex}" class="form-label">Title</label>
               <input type="text" class="form-control mb-2" placeholder="Example: Web Development" id="title-${rowIndex}" name="title[]">

               <label for="headline-${rowIndex}" class="form-label">Title Headline</label>
               <input type="text" class="form-control mb-2" placeholder="Example : Website Design for Marketing Agency Startup" id="headline-${rowIndex}" name="headline[]">

               <label for="project-link-${rowIndex}" class="form-label">Project Link</label>
               <input type="text" class="form-control mb-2" placeholder="Enter your project link" id="project-link-${rowIndex}" name="project-link[]">


               <label for="description-${rowIndex}" class="form-label">Description</label>
               <textarea  class="form-control mb-2 description" name="description[]"></textarea>

               <button type="button" class="btn btn-danger remove-row">Remove</button>
           </div>
       `;
       $('#form-rows').append(newRow);

       // Initialize Summernote for the new textarea
       $(`.description`).summernote({
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








   //Technology script







});





