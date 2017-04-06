$(document).ready(function(){
  $('.zipcode').mask('00000-000');
  $('.nif').mask('000000000');
  $('#password').pwstrength({
        ui: { showVerdictsInsideProgressBar: true }
  });

      $( "#form_validation" ).validate( {
				rules: {
					firstname: {
            required: true,
            minlength: 2
          },
					lastname: {
            required: true,
            minlength: 2
          },
					password: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true
					},
          confirm_email: {
            required: true,
            email: true,
            equalTo: "#email"
          },
          address: "required",
          country: "required",
          nif: {
            required : true,
            digits: true,
            nifValidator : true
          },
          zipcode : {
            required: true,
            digits: true
          },
          location : "required",
          phone_number: "required"
				},
				messages: {
					firstname: "Please enter your firstname",
					lastname: "Please enter your lastname",
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
          confirm_email : {
            required: "Please provide an email",
            equalTo: "Please enter the same email as above"
          },
					email: "Please enter a valid email address",
          adress: "Please provide an address"
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );

    jQuery.validator.addMethod( "nifValidator", function ( value, element ) {
      "use strict";
        nif = value;
        if(nif.length == 9){
          added = ((nif[7]*2)+(nif[6]*3)+(nif[5]*4)+(nif[4]*5)+(nif[3]*6)+(nif[2]*7)+(nif[1]*8)+(nif[0]*9));
          mod = added % 11;
          if(mod == 0 || mod == 1){
              control = 0;
          } else {
               control = 11 - mod;
          }

          if(nif[8] == control){
              return true;
          } else {
               return false;
          }
      } else {
          return false;
      }
    }, "Please specify a valid NIF number." );

    jQuery.validator.addMethod( "phoneValidator", function ( value, element ) {
      "use strict";
        nif = value;
        if(nif.length == 9){
          added = ((nif[7]*2)+(nif[6]*3)+(nif[5]*4)+(nif[4]*5)+(nif[3]*6)+(nif[2]*7)+(nif[1]*8)+(nif[0]*9));
          mod = added % 11;
          if(mod == 0 || mod == 1){
              control = 0;
          } else {
               control = 11 - mod;
          }

          if(nif[8] == control){
              return true;
          } else {
               return false;
          }
      } else {
          return false;
      }
    }, "Please specify a valid NIF number." );

});
