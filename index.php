<?php
	$var1 = "variable_1";
	
	$var2 = 12;

	$var3 = 0.19;

	$var4 = false;

	$var5 = "2012-03-15";

	$var6 = [
		"Andres", 
		"Sara",
		"Paola",
		"Pedro",
		"Luis"
	];
	$var7 = [
		"nombre1" => "andres",
		"nombre2" => "sara",
		"nombre3" => "paola"
	];

	//condicional
	if ($var4 == true) {
		echo "verdadero";
	}else{
		echo " falso ";
	}
	 $num1 = 3;
	 $num2 = 3;
	 $suma = $num1 + $num2;
	 echo "<h1>Soy un h1</h1>";

?>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		for ($i=0; $i < 10; $i++) { 
			echo "<p>valor de i = ".$i;
		}

	?>
</body>
</html>