/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/js/form-validation.js ***!
  \*****************************************/

// $.validator.addMethod("initializeForm",function() {
//     let today = new Date();
//     let formattedDate = today.toLocaleDateString();
//     document.getElementById("created").defaultValue = formattedDate;
// });
$.validator.addMethod("checkExpirationDate", function(){
  var created = new Date(document.getElementById('created').value);
  var exp_date = new Date(document.getElementById('updated').value);
  var exp_date = new Date(document.getElementById('exp_date').value);
  return exp_date > created;
});



document.addEventListener("DOMContentLoaded", function () {
  var myForm = document.querySelector("#editForm");
  

  myForm.addEventListener("submit", function (event) {
    if (!$('#myForm').valid()) {
      event.preventDefault();
    }

  });
  $('#myForm').validate({
    rules: {
      title: {
        required: true,
        minlength: 3
      },
      "abstract": {
        required: true,
        minlength: 5
      },
      content: {
        required: true,
        minlength: 50
      },
      risk: {
        required: true
      },
      exp_date: {
        required: true,
        checkExpirationDate:true
      },
      created: {
      required: true}
    },
    messages: {
      title: {
        required: "Please enter the title",
        minlength: "Your name must be at least 3 characters long"
      },
      "abstract": {
        required: "Please enter a brief summary of the idea",
        minlength: "Your summary must be atleast 5 characters long"
      },
      content: {
        required: "Please enter the content for your idea",
        minlength: "Your message must be at least 50 characters long"
      },
      risk: {
        required: "Please select a value for risk"
      },
      exp_date: {
      required: "Please enter an expiration date",
      checkExpirationDate: "Expiration date must be later than created date"
      },
      created: {
      required: "Please enter a value for the field"
      }
    },
    submitHandler: function(form) {
    if($('#title').val() == "" || $('#abstract').val() == "" || $('#content').val() == "" || $('#risk').val() == "") {
      alert("Please fill out all required fields");
       } else {
      form.submit();
    }
    }
    // checkExpirationDate: function(value,element,params){
    // var created_at = new Date($('#myForm input[name="created"]').val());
    // var expired_at = new Date($('#exp_date').val());
    // return expired_at > created_at;
    // }
  });
});
/******/ })()
;