/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Kishor Mali
 */

$(document).ready(function(){
	
	var addUserForm = $("#addUser");
	
	var validator = addUserForm.validate({
		
		rules:{
			Project_id :{ required : true },
			Category_name : { required : true},
			Brand_name : { required : true },
			Product_name : {required : true},
			Product_description : { required : true},
			Product_website_link : { required : true},
			Creation_Timestamp : { required : false},
			Modification_Timestamp : { required : false},
			Product_Image : { required : true},
			Average_Review : { required : false},
			No_of_Reviews : {required : false}
		},
		messages:{
			Project_id :{ required : "This field is required" },
			Category_name : { required : "This field is required"},
			Brand_name : { required : "This field is required" },
			Product_name : {required : "This field is required"},
			Product_description : { required :"This field is required"},
			Product_website_link : { required : "This field is required"},
			Product_Image : { required : "This field is required"}	
		}
	});
});
