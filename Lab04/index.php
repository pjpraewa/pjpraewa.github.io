<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: rgb(179, 206, 243);
		}
		h1{
  			font-family: 'Playball', cursive;
  			font-size: 6em;
  			font-weight: 700;
  			text-align: center;
  			color: $green;
  			margin: 0.25em 0; // Cosmetic value
		}
		h2{
 			font-style: italic;
 			font-size: 3em;
  			text-align: center;
  			margin-bottom: 1em; // Cosmetic value
  			
		}
		#dropdown { 
  			display: block;
  			padding: 13px 16px;
  			width: 400px;
  			background-color: rgb(229, 239, 253);
  			margin: 0 auto;
  			position: relative;
  			cursor: pointer;
  			border-left: 4px solid #739cda;
  			background: #fff;
  			font-size: 1em;
  			color: #656565;
  			font-weight: normal;
  			-webkit-box-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  			-moz-box-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  			box-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  			-webkit-transition: all 0.15s linear;
  			-moz-transition: all 0.15s linear;
  			-ms-transition: all 0.15s linear;
  			-o-transition: all 0.15s linear;
  			transition: all 0.15s linear;
		}

	</style>
</head>
<body>
<div class="main">
<h1>PHP Script</h1>
<form action="mail.php" method="POST" >
<h2>Select Menu</h2>
<select name="dropdown" size="1" id="dropdown">
<option value="1">Body Mass Index (BMI)</option>
<option value="2"> Basal Metabolic Rate (BMR)</option>
<option value="3">Cholesterol Calculator</option>
</select>
<br/>

<!-- <input type="submit" value="Send"><input type="reset" value="Clear"> -->
</form>
</div>

<script src="jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

	var clickNum = 0;
	$('#dropdown').click(function() {
		// body...
		if (clickNum == 0){
			clickNum++;
		}
		else {
			let selected = $.trim($('#dropdown').val());
			console.log(selected);
			
			if (selected == "1"){
				window.location.href='bmi.php';			
			}
			if (selected == "2"){
				window.location.href='bmr.php';			
			}
			if (selected == "3"){
				window.location.href='chol.php';			
			}

			// console.log($('#dropdown').val());
			// $('#form').load('input_form.html #' + selected);
			clickNum = 0;
		}
	});

</script>




</body>
</html>