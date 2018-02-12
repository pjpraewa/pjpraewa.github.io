<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Sniglet|Raleway:900);


body, html{
	height: 100%;
	padding: 0;
	margin: 0;
	font-family: 'Sniglet', cursive;
}
h1{
	font-weight: normal;
	font-size: 2em;
	font-family: 'Raleway', sans-serif;
	margin: 0 auto;
	margin-top: 20px;
	width: 500px;
	color: #F90;
	text-align: center;

}

/* Animation webkit */
@-webkit-keyframes myfirst
{
	0% {margin-left: -235px}
	90% {margin-left: 100%;}
	100% {margin-left: 100%;}
}

/* Animation */
@keyframes myfirst
{
	0% {margin-left: -235px}
	70% {margin-left: 100%;}
	100% {margin-left: 100%;}
}

.fish{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/fish.png');
	width: 235px;
	height: 200px;
	margin-left: -235px;
	position: absolute;	
	animation: myfirst 24s;
	-webkit-animation: myfirst 24s;
	animation-iteration-count: infinite;
	-webkit-animation-iteration-count: infinite;
	animation-timing-function: linear;
	-webkit-animation-timing-function: linear;
}

#fish{
	top: 120px;
}

#fish2{
	top: 260px;
	animation-delay: 12s;
	-webkit-animation-delay: 12s;
}


header{
	height: 100px;
	background: url('http://www.geertjanhendriks.nl/codepen/form/golf.png') repeat-x bottom;
}

#form{
	height: 100%;	
	background-color: #98d4f3;
	overflow: hidden;
	position: relative;
}
form{
	margin: 0 auto;
	width: 500px;
	padding-top: 20px;
	color: white;
	position: relative;
	
}
label, input, textarea{
	display: block;	
}
input, textarea{
	width: 600px;	
	border: none;
	border-radius: 20px;
	outline: none;
	padding: 5px;
	font-family: 'Sniglet', cursive;
	font-size: 0.8em;
	color: #676767;
	transition: border 0.5s;
	-webkit-transition: border 0.5s;
	-moz-transition: border 0.5s;
	-o-transition: border 0.5s;
	border: solid 3px #98d4f3;	
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	
}
input:focus, textarea:focus{
	border: solid 3px #77bde0;	
}

textarea{
	height: 100px;	
	resize: none; 
	overflow: auto;
	text-align:justify;
}
input[type="submit"]{
	background-color: #F90;
	color: white;
	height: 50px;
	cursor: pointer;
	margin-top: 30px;
	font-size: 0.8em;
	font-family: 'Sniglet', cursive;
	-webkit-transition: background-color 0.5s;
	-moz-transition: background-color 0.5s;
	-o-transition: background-color 0.5s;
	transition: background-color 0.5s;
}
input[type="submit"]:hover{
	background-color: #e58f0e;
	
}
label{
	font-size: 1em;
	margin-top: 10px;
	padding-left: 20px;
}
.formgroup, .formgroup-active, .formgroup-error{
	background-repeat: no-repeat;
	background-position: right bottom;
	background-size: 10.5%;
	transition: background-image 0.7s;
	-webkit-transition: background-image 0.7s;
	-moz-transition: background-image 0.7s;
	-o-transition: background-image 0.7s;
	width: 566px;
	padding-top: 0px;
}

.formgroup{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/pixel.gif');	
}
.formgroup-active{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo.png');
}
.formgroup-error{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo-error.png');
	color: red;
}
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 1em
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
	#dropdown { 
  			/*display: block;*/
  			width: 600px;	
			border: none;
			border-radius: 20px;
			outline: none;
			padding: 5px;
			font-family: 'Sniglet', cursive;
			font-size: 0.8em;
			color: #676767;
  			width: 500px;
  			margin: 0 auto;
  			position: relative;
  			cursor: pointer;
  			background: #fff;
  			transition: border 0.5s;
			-webkit-transition: border 0.5s;
			-moz-transition: border 0.5s;
			-o-transition: border 0.5s;
			border: solid 3px #98d4f3;	
			-webkit-box-sizing:border-box;
			-moz-box-sizing:border-box;
			box-sizing:border-box;
	}
	</style>
</head>
<body>

	<?php
// define variables and set to empty values
$height =  "";
$weight = "";
$age = "";
$gender = "";
$activity = "";
$bmr = "";
$tdee = "";


		if ($_SERVER["REQUEST_METHOD"] == "POST") {
  			$height = test_input($_POST["h"]);
  			$weight = test_input($_POST["w"]);
  			$age = test_input($_POST["a"]);
  			$gender = test_input($_POST["radio"]);
  			$activity = test_input($_POST["dropdown"]);

  			if ($gender == "male"){
  				$bmr = 66+(13.7*$weight)+(5*$height)-(6.8*$age);
  			}
  			if ($gender == "female"){
  				$bmr = 665+(9.6*$weight)+(1.8*$height)-(4.7*$age);
  			}
  			$tdee = $bmr*$activity;
		}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	<header>
	<h1>BMR</h1>
</header>

<div id="form">

	<div class="fish" id="fish"></div>
	<div class="fish" id="fish2"></div>

	<form id="waterform"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
		<div class="formgroup" id="h">
    		<label for="name">Your Height (.cm)</label>
    		<input type="text" id="h" name="h" />
		</div>

		<div class="formgroup" id="w">
    		<label for="email">Your Welght (.kg)</label>
    		<input type="text" id="w" name="w" />
		</div>

		<div class="formgroup" id="a">
    		<label for="email">Your Age</label>
    		<input type="text" id="a" name="a" />
		</div>
		<div class="formgroup" id="a">
    		<label for="email">Gender</label>
  			<p><label class="container">Female
  				<input type="radio" checked="checked" name="radio" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
  				<span class="checkmark"></span>
			</label>
			<label class="container">Male
  				<input type="radio" name="radio" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
  				<span class="checkmark"></span>
			</label></p>
		</div>

		<div class="formgroup" id="a">
    		<label for="email">Your Activity</label>
    		<select name="dropdown" size="1" id="dropdown">
				<option value="1.2">นั่งทำงานอยู่กับที่ และไม่ได้ออกกำลังกายเลย</option>
				<option value="1.375">ออกกำลังกายหรือเล่นกีฬาเล็กน้อย ประมาณอาทิตย์ละ 1-3 วัน</option>
				<option value="1.55">ออกกำลังกายหรือเล่นกีฬาปานกลาง ประมาณอาทิตย์ละ 3-5 วัน</option>
				<option value="1.725">ออกกำลังกายหรือเล่นกีฬาปานกลาง ประมาณอาทิตย์ละ 6-7 วัน</option>
				<option value="1.9">ออกกำลังกายหรือเล่นกีฬาอย่างหนักทุกวันเช้าเย็น </option>
			</select>
		</div>
		<div class="formgroup" id="message-form">
   			<label for="message">Result</label>
    		<textarea id="message" name="message">

    			<?php
    			echo "BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิต : " .$bmr ." กิโลแคลอรี่" ;?>
    			
    			<?php echo " TDEE (Total Daily Energy Expenditure) พลังงานที่คุณใช้ในแต่ละวัน : ".$tdee." กิโลแคลอรี่"; 
    			?>
    			
				
    		</textarea>
		</div>

		<input type="submit" name="ok" value="Compute BMR" />
		<center><a href="index.php">
  			<img src="home.png" alt="HTML tutorial" >
		</a></center>
	</form>
</div>



</body>
</html>