<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RaspberryPi - learning PHP</title>
	<style>
input[type="submit"]{
  display:block;
  margin: 30px auto;
  border-radius: 21px;
  border: none;
  padding: 10px;
  width: 60%;
  
  cursor:pointer;
  text-transform:uppercase;
  transition:0.5s all ease-in-out;

 }
input[type="submit"]:hover{
  letter-spacing:5px;
  font-weight:bold;
  
}
.form{
  background: linear-gradient(182deg, #a8e3f2, #3d8fb8, #136f9c);
  background-size: 600% 600%;

  -webkit-animation: AnimationName 30s ease infinite;
  -moz-animation: AnimationName 30s ease infinite;
  animation: AnimationName 30s ease infinite;

  @-webkit-keyframes AnimationName {
    0%{background-position:0% 30%}
    50%{background-position:100% 71%}
    100%{background-position:0% 30%}
  }
  @-moz-keyframes AnimationName {
    0%{background-position:0% 30%}
    50%{background-position:100% 71%}
    100%{background-position:0% 30%}
  }
  @keyframes AnimationName {
    0%{background-position:0% 30%}
    50%{background-position:100% 71%}
    100%{background-position:0% 30%}
  }
}
	</style>
</head>
<body>
	<div class="topbox">
	<h1>Controlling GPIO from PHP</h1>
	</div>
<div class="form">	
<form method="get" action="index.php">
		<input type="submit" value="ON" name="on">
              <input type="submit" value="OFF" name="off">
	</form></div>
         <?php
         $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 5 out");
         if(isset($_GET['on'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 5 1");
                 echo "LED is on";
         }
         else if(isset($_GET['off'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 5 0");
                 echo "LED is off";
	 }
	?>
	<h2>Next Script</h2>	
	<h2><a href="script1_9.php" target="_blank">Script 1.9</a></h2>
</body>
</html>
