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
	font-size: 3em;
	font-family: 'Raleway', sans-serif;
	margin: 0 auto;
	margin-top: 30px;
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
	height: 104px;
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
	height: 160px;
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
	width: 500px;	
	border: none;
	border-radius: 20px;
	outline: none;
	padding: 10px;
	font-family: 'Sniglet', cursive;
	font-size: 1em;
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
	height: 150px;	
	resize: none; 
	overflow: auto;
}
input[type="submit"]{
	background-color: #F90;
	color: white;
	height: 50px;
	cursor: pointer;
	margin-top: 30px;
	font-size: 1.29em;
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
	font-size: 1.5em;
	margin-top: 20px;
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
	padding-top: 2px;
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


	</style>
</head>
<body>

	<?php
// define variables and set to empty values
$h =  "";
$l = "";
$tri = "";
$total = "";
$result = "";


		if ($_SERVER["REQUEST_METHOD"] == "POST") {
  			$h = test_input($_POST["h"]);
  			$l= test_input($_POST["l"]);
  			$tri= test_input($_POST["tri"]);
  			$total = $h+$l+($tri/5);

  			 if ($total >= 240 ){
      		$result = "คอลเลสเตอรอลสูง";
      		}
      		elseif ($total >= 200){
      			$result = "คอลเลสเตอรอลค่อนข้างสูง";
      		}
      		elseif ($total >= 0){
      			$result = "คอลเลสเตอรอลอยู่ในเกณฑ์ดีมาก" ;
      		}



		}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	<header>
	<h1>Cholesterol Calculator</h1>
</header>

<div id="form">

	<div class="fish" id="fish"></div>
	<div class="fish" id="fish2"></div>

	<form id="waterform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

		<div class="formgroup" id="name-form">
    		<label for="name">HDL (High density lipoprotein)</label>
    		<input type="text" id="hld" name="h" />
		</div>

		<div class="formgroup" id="email-form">
    		<label for="email">LDL (Low density lipoprotein)</label>
    		<input type="text" id="ldl" name="l" />
		</div>

		<div class="formgroup" id="email-form">
    		<label for="email">Triglycerides</label>
    		<input type="text" id="tri" name="tri" />
		</div>

		<div class="formgroup" id="message-form">
   			<label for="message">Result</label>
    		<textarea id="message" name="message" >
    		<?php echo "Total Cholesterol : ".$total;?>    			
    		<?php echo $result;?>
    		</textarea>
		</div>

		<input type="submit" name="ok" value="Compute Cholesterol" />

		<center><a href="index.php">
  			<img src="home.png" alt="HTML tutorial" >
		</a></center>
	</form>
<!--    -->

</div>





</body>
</html>