



// ============================
//  Multi Image Uploader Start 
// ============================

jQuery(document).ready(function () {
    ImgUpload();
  });
  
  function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];
  
    $('.upload__inputfile').each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
        var maxLength = $(this).attr('data-max_length');
  
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {
  
          if (!f.type.match('image.*')) {
            return;
          }
  
          if (imgArray.length > maxLength) {
            return false
          } else {
            var len = 0;
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i] !== undefined) {
                len++;
              }
            }
            if (len > maxLength) {
              return false;
            } else {
              imgArray.push(f);
  
              var reader = new FileReader();
              reader.onload = function (e) {
                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                imgWrap.append(html);
                iterator++;
              }
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });
  
    $('body').on('click', ".upload__img-close", function (e) {
      var file = $(this).parent().data("file");
      for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
          imgArray.splice(i, 1);
          break;
        }
      }
      $(this).parent().parent().remove();
    });
  }


// ============================
// Multi Image Uploader End 
// ============================


// ============================
// Image Uploader Start 
// ============================

$.uploadPreview({
    input_field: "#img-input",  
    preview_box: "#img-previewImg",
    label_field: "#img-label",
    label_default: "Choose File",
    label_selected: "Change File",
    no_label: false,
    success_callback: null
});

// ============================
// Image Uploader End 
// ============================

"use strict";



// ============================
// Image Preview Start
// ============================
function previewImage(input) {
  var previewDiv = input.closest('.image-preview');
  var existingImage = previewDiv.querySelector('img');

  if (existingImage) {
      existingImage.remove(); // Remove existing image
  }

  var file = input.files[0];

  if (file) {
      var reader = new FileReader();

      reader.onload = function (e) {
          var newImage = document.createElement('img');
          newImage.src = e.target.result;
          newImage.alt = 'favicon';
          newImage.id = 'preview-favicon';

          previewDiv.appendChild(newImage); // Append new image
      };

      reader.readAsDataURL(file);
  }
}
// ============================
// Image Preview End
// ============================