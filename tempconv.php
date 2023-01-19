<?php
//tempconv.php
#
# Version 2 updated by Rich & Etsegenet 1/13/22
#
if (isset($_POST["TempInput"])){
	$test = is_numeric($_POST["TempInput"]);
	
	if ($test) {
	
		// echo "Test is ".$test;
	  	$message = "<p>Your temperature is: {$_POST['TempInput']}";
	  	
	  	if ($_POST["TypeTemp"]=="fahrenheit") {
	  		$message = $message."F (Fahrenheit)</p>";
	  		$fTemp = $_POST["TempInput"];
	  		$cTemp = number_format((5/9) * ($_POST["TempInput"] - 32),2);
	  		$kTemp = number_format($cTemp + 273.15,2);
	  		echo $message."<p>Celcius is ".$cTemp."C - Kelvin is ".$kTemp."K</p>";
	  	}
	  	
	  	if ($_POST["TypeTemp"]=="celcius") {
	  		$message = $message."C (Celcius)</p>";
	  		$cTemp = $_POST["TempInput"];
	  		$fTemp = number_format((9/5) * $cTemp + 32,2);
	  		$kTemp = number_format($cTemp + 273.15,2);
	  		echo $message."Fahrenheit is ".$fTemp."F - Kelvin is ".$kTemp."K<br><br>";
	  	}
	  	
	  	if ($_POST["TypeTemp"]=="kelvin") {
	  		$message = $message."K (Kelvin)</p>";
	  		$kTemp = $_POST["TempInput"];
	  		$cTemp = number_format($kTemp - 273.15,2);
	  		$fTemp = number_format((9/5) * $cTemp + 32,2);
	  		echo $message."Fahrenheit is ".$fTemp."F - Celcius is ".$cTemp."C<br><br>";
	  	}
	} else {
		echo "You gotta put in a number";
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
?>


