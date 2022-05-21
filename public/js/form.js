'use strict';
$(document).ready(function(){
	// $('form.validateForm').each(function(key, form) {
 //        $(form).validate({
	// 		rules: {
	// 			display_name: {
	// 				minlength: 2,
	// 				required:true
	// 			},
	// 			email:{
	// 				required:true
	// 			},
	// 			password: {
	// 				required: true,
	// 				minlength: 3
	// 			},
	// 			new_password:{
	// 				required:true,
	// 				pwchecklowercase: true,
	//                 pwcheckuppercase: true,
	//                 pwchecknumber: true,
	//                 pwcheckspechars: true,
	//                 pwcheckallowedchars: true,
	//                 minlength: 8,
	//                 maxlength: 30
	// 			},
	// 			confirm_password: {
	// 				equalTo: "#new_password"
	// 			},
	// 			mobile_number:{
	// 				required:true,
	// 				minlength:10,
	// 				maxlength:15
	// 			},
	// 			mobile_code:{
	// 				required:true,
	// 				minlength:6,
	// 				maxlength:6
	// 			}
	// 		},
	// 		messages: {
	// 			display_name:{
	// 				required: 'Please enter your full name.',
	// 				minlength:'Please enter at least 2 characters.'
	// 			},
	// 			email:{
	// 				required:'Email address is required.',
	// 				email:'Please enter your email address in format email@example.com.'
	// 			},
	// 			newsletter_email:{
	// 				required:'Email address is required.',
	// 				email:'Please enter your email address in format email@example.com.'
	// 			},
	// 			password:{
	// 				required:'Password is required.'
	// 			},
	// 			new_password:{
	// 				required:'New password is required'
	// 			},
	// 			confirm_password:{
	// 				required: 'New password and confirm passwords do not match.'
	// 			},
	// 			mobile_number:{
	// 				required:'Mobile number required.',
	// 				minlength:'Please enter at least 10-digit mobile number.',
	// 				maxlength:'Please enter no more than 15-digit mobile number.'
	// 			},
	// 			mobile_code:{
	// 				required:'Mobile code required.',
	// 				minlength:'Please enter 6-digit code.',
	// 				maxlength:'Please enter no more than 6-digit code.'

	// 			}
	// 		}
	// 	});
	// 	// start code for password match expression here
	// 	$.validator.addMethod("pwcheckallowedchars", function (value) {
	//         return /^[a-zA-Z0-9!@#$%^&*()_=\[\]{};':"\\|,.<>\/?+-]+$/.test(value) // has only allowed chars letter
	//     }, "The password contains non-admitted characters");
	    
	//     $.validator.addMethod("pwcheckspechars", function (value) {
	//         return /[!@#$%^&*()_=\[\]{};':"\\|,.<>\/?+-]/.test(value)
	//     }, "The password must contain at least one special character.");

	//     $.validator.addMethod("pwchecklowercase", function (value) {
	//         return /[a-z]/.test(value) // has a lowercase letter
	//     }, "The password must contain at least one lowercase letter.");
	    
	//     $.validator.addMethod("pwcheckrepeatnum", function (value) {
	//         return /\d{2}/.test(value) // has a lowercase letter
	//     }, "The password must contain at least one lowercase letter.");
	    
	//     $.validator.addMethod("pwcheckuppercase", function (value) {
	//         return /[A-Z]/.test(value) // has an uppercase letter
	//     }, "The password must contain at least one uppercase letter.");
	    
	//     $.validator.addMethod("pwchecknumber", function (value) {
	//         return /\d/.test(value) // has a digit
	//     }, "The password must contain at least one number.");
	// 		// end code for password match expression here
 //    });

    // $(".submitFormBtn").click(function(){  // capture the click
    //     var getForm = $(this).closest("form");
    //     console.log(getForm);
    //     $(getForm).valid();
    // });

	// $('.passwordChange').on('click', function(){
	// 	$(this).toggleClass('active');
	// 	var input = $(".showHidePassword");
	// 	if (input.attr("type") === "password") {
	// 		input.attr("type", "text");
	// 	} else {
	// 		input.attr("type", "password");
	// 	}
	// });
	
	$('.numberOnly').keyup(function () { 
	    this.value = this.value.replace(/[^0-9\.]/g,'');
	});

	$(".picker").on("change", function() {
		var date = $(this).val();
		$(".date").val(date);
	});
	let today = new Date().toISOString().substr(0, 10);
	let minDate = new Date().toISOString().split('T')[0];
	let maxDate = new Date(new Date().getTime() + 60 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
	$('.currentDate').val(today);
	$('.currentDate, .picker').attr({'min':minDate, 'max':maxDate});
//== END CODE FOR FORM VALIDATION HERE  ===============================
});
