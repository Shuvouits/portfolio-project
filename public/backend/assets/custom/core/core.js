$(document).ready(function () {

    // Initialize Summernote for the initial textarea
    $('.core-description').summernote({
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

               <label for="image-${rowIndex}" class="form-label">Icon</label>
               <input type="file" class="form-control mb-2 photoInput"  id="image-${rowIndex}" name="image[]"   data-index="${rowIndex}" >

                <img src="" class="photoPreview" id="preview-${rowIndex}" width="50" height="50" style="display: none; margin-top: 10px; margin-bottom: 10px" />

               <label for="title-${rowIndex}" class="form-label">Title</label>
               <input type="text" class="form-control mb-2" placeholder="Example: Hard Work" id="title-${rowIndex}" name="title[]">

               <label for="core-description-${rowIndex}" class="form-label">Core Description</label>
               <textarea  class="form-control mb-2 core-description"  name="core-description[]"></textarea>

               <button type="button" class="btn btn-danger remove-row">

               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
</svg>

               </button>
           </div>
       `;
       $('#form-rows').append(newRow);

       // Initialize Summernote for the new textarea
       $(`.core-description`).summernote({
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






   //image script

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
