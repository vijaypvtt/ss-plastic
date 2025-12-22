
	$(document).ready(function()
	{
		$(".btn-1").click(function(){
			$(".quickcontact").slideToggle();
		});
	});
	
	function validateForm()
	{
		var x = document.forms["cbform"]["mobilenumber"].value;
		if (x == null || x == "" || x.length != 10 || isNaN(x) || x < 1111111111 || x > 9999999999) 
		{
			alert("10 Digits Number must be filled out");
			return false;
		}
		var y = document.forms["cbform"]["email"].value;
		if (y == null || y == "") 
		{
			alert("Email must be filled out");
			return false;
		}
		var yy = document.forms["cbform"]["category"].value;
		if (yy == null || yy == "" || yy == "select") 
		{
			alert("Category must be selected out");
			return false;
		}
		var z = document.forms["cbform"]["comments"].value;
		if (z == null || z == "") 
		{
			alert("Comments must be filled out");
			return false;
		}
		const bodyMessage = 'Name: ${name.va1ue} <br> Email: ${email.value} <br> Phone Number: ${number.value}  <br> Message: ${comments.value} ';
	}	
