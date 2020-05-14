$(document).ready(function() {
$("#signup").click(function() {
$("#first").fadeOut("fast", function() {
$("#second").fadeIn("fast");
});
});
$("#getotp").click(function() {

$("#second").fadeOut("fast", function(){
$("#third").fadeIn("fast");
});
});
$("#signin").click(function() {
$("#second").fadeOut("fast", function() {
$("#first").fadeIn("fast");
});
});
           $("form[name='login']").validate({
             rules: {
               
               email: {
                 required: true,
                 email: true
               },
               password: {
                 required: true,
                 
               }
             },
              messages: {
               email: "Please enter a valid email address",
              
               password: {
                 required: "Please enter password",
                
               }
               
             },
             submitHandler: function(form) {
               form.submit();
             }
           });
  jQuery.validator.addMethod("mobile10d", function (value, element) {
        return this.optional(element) || /^[6-9]{1}[0-9]{9}$/.test(value);
    });
  $("form[name='otp']").validate({
    rules:{
      username: "required",
      mobile:{
        required: true,
        mobile10d: true
      },
      messages:{
        username: "Please Enter your UserName",
        mobile:{
          required: "Please Enter your Mobile Number",
          mobile10d: "Please Enter a valid 10 Digit Mobile Number"
        }
      }
    }
  });
  $("form[name='registration']").validate({
    rules: {
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      },
      password_confirm : {
                    required: true,
                    minlength : 5,
                    equalTo : "#password"
                }
    },
    
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      password_confirm: {
        required: "Please Confirm the Password",
        minlength: "Your password must be at least 5 characters long",
        equalTo:"Password Mismatch..! Enter the correct one..!"
      },
      email: "Please enter a valid email address"
    },
  
    submitHandler: function(form) {
      form.submit();
    }
  });
  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
});
