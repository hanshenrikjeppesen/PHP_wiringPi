<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RaspberryPi - learning PHP</title>
	<style>
.buttonOn {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.buttonOn:hover {background-color: #3e8e41}

.buttonOn:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.buttonOff {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #e00b0e;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.buttonOff:hover {background-color: #681226}

.buttonOff:active {
  background-color: #5b0104;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

	</style>
</head>
<body>
	<div class="topbox">
	<h1>Controlling GPIO from PHP</h1>
	</div>	
<form method="get" action="index.php">
		<input type="submit" class="buttonOn" value="ON" name="on">
              <input type="submit" class="buttonOff" value="OFF" name="off">
	</form>
         <?php
         $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 5 out");
         if(isset($_GET['on'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 5 1");
                 echo "<p><br>LED is on</p>";
         }
         else if(isset($_GET['off'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 5 0");
                 echo "<p><br>LED is off</p>";
	 }
	?>
	<h2>Next Script</h2>	
	<h2><a href="script1_9.php" target="_blank">Script 1.9</a></h2>
</body>
</html>
