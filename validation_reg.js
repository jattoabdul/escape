$(document).ready(function()
{


	 $.validator.addMethod("teller_regex", function(value, element) { 
		return this.optional(element) || /^[0-9]{11}$/i.test(value); 
		}, "Invalid Teller Code");

	 $.validator.addMethod("mobile_regex", function(value, element) { 
		return this.optional(element) || /^\d{11}$/i.test(value); 
		}, "Enter a valid Mobile Number");

	$("#registerForm").validate(
	{
        rules:{
		'fname':{
			required: true,		
			minlength: 3	
		},
		'lname':{
			required: true,
			minlength: 3			
		},
		'country':{
			required: true,			
		},
		'state':{
			required: true,			
		},
		'token':{
			required: true
			},
		'email':{
			required: true,
			email: true,
			remote:{
				url: "validationAJAX.php",
				type: "post"
				}
			},
			'mobile':{
				required: true,
				mobile_regex: true
			},
			'teller':{
				required:true
			}
		},
        messages:{
		'fname':{
			required: "The firstname field is mandatory!",
			minlength: "First Name must have a minimum of three characters!"
			},
			'lname':{
			required: "The lastname field is mandatory!",
			minlength: "Last Name must have a minimum of three characters!"
			},
			'country':{
			required: "The country field is mandatory!",
			},
			'state':{
			required: "The state field is mandatory!",
			},
			
		'token':{
			required: "The token field is mandatory!"
			
			},
		
		'email':{
			required: "The Email is required!",
			email: "Please enter a valid email address!",
			remote: "The email is already in use by another user!"
			},
			'mobile':{
				required: 'The mobile field is required',
				mobile_regex: 'Mobile number must be 11 digits'
			},
			'teller':{
				required: 'The teller field is required'
			}
		
		}
	});
});
