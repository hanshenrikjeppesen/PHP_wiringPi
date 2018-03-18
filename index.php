<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RaspberryPi - learning PHP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="topbox">
	<h1>Controlling GPIO from PHP</h1>
	</div>
	
<form method="get" action="gpio.php">
		<input type="submit" value="ON" name="on">
              <input type="submit" value="OFF" name="off">
         </form>
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
