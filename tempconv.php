<?php
//tempconv.php
#
# Initial shot at the app
#
if(isset($_POST["TempInput"])){
	
	$message = "<p>Your temperature is: {$_POST['TempInput']}";
	
	if($_POST["TypeTemp"]=="fahrenheit") {
		$message = $message."F (Fahrenheit)</p>";
		$fTemp = $_POST["TempInput"];
		$cTemp = (5/9) * ($_POST["TempInput"] - 32);
		$kTemp = $cTemp + 273.15;
		echo $message."<p>Celcius is ".$cTemp."C - Kelvin is ".$kTemp."K</p>";
	}
	
	if($_POST["TypeTemp"]=="celcius") {
		$message = $message."C (Celcius)</p>";
		$cTemp = $_POST["TempInput"];
		$fTemp = (9/5) * $cTemp + 32;
		$kTemp = $cTemp + 273.15;
		echo $message."Fahrenheit is ".$fTemp."F - Kelvin is ".$kTemp."K<br><br>";
	}
	
	if($_POST["TypeTemp"]=="kelvin") {
		$message = $message."K (Kelvin)</p>";
		$kTemp = $_POST["TempInput"];
		$cTemp = $kTemp - 273.15;
		$fTemp = (9/5) * $cTemp + 32;
		echo $message."Fahrenheit is ".$fTemp."F - Celcius is ".$cTemp."C<br><br>";
	}
}
	
echo '
	<fieldset>
		<legend>Enter new temperature</legend>
		<form action="" method="POST">
		<p>Temperature to convert: <input type="number" name="TempInput" step="0.01"/></p>
		<p><input type="radio" name="TypeTemp" value="fahrenheit" />Fahrenheit</p>
		<p><input type="radio" name="TypeTemp" value="celcius" />Celcius</p>
		<p><input type="radio" name="TypeTemp" value="kelvin" />Kelvin</p>
	</fieldset>			
	<p><input type="submit" /></p>		
	</form>	
';

