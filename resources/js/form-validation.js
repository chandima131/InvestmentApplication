



document.addEventListener("DOMContentLoaded", function() {
  const myForm = document.querySelector("#myForm");

  myForm.addEventListener("submit", function(event) {
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
            abstract: {
                required: true,
                minlength: 5
            },
            content: {
                required: true,
                minlength: 50
            },
            risk: {
                required: true    
            }
        },
        messages: {
            title: {
                required: "Please enter the title",
                minlength: "Your name must be at least 3 characters long"
            },
            abstract: {
                required: "Please enter a brief summary of the idea",
                minlength: "Your summary must be atleast 5 characters long"
            },
            content: {
                required: "Please enter the content for your idea",
                minlength: "Your message must be at least 50 characters long"
            },
            risk:   {
                required: "Please select a value for risk"
            }
        }
    });
  }
);
