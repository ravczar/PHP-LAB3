<HTML>
<HEAD>
<title>macierz</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
<div id="title">
    <h1>Warsztaty programistyczne!</h1>
    <h3>Obliczanie wyznacznika macerzy</h3>
</div>
	<div class="sub">
		<div class="contentForm">
			<FORM action="macierz.php" method="POST">
			<fieldset>
					<br><br>
				<legend> Macierz A </legend>
				<input name="pole1" type="number" class="btn">
				<input name="pole2" type="number" class="btn">
				<input name="pole3" type="number" class="btn"><br>
				<input name="pole4" type="number" class="btn">
				<input name="pole5" type="number" class="btn">
				<input name="pole6" type="number" class="btn"><br>
				<input name="pole7" type="number" class="btn">
				<input name="pole8" type="number" class="btn">
				<input name="pole9" type="number" class="btn">
					<br>
					<br>
	
	
<?php
// Dane z formularza przypisane do zmiennych.
$pole1 = $_POST["pole1"];
$pole2 = $_POST["pole2"];
$pole3 = $_POST["pole3"];
$pole4 = $_POST["pole4"];
$pole5 = $_POST["pole5"];
$pole6 = $_POST["pole6"];
$pole7 = $_POST["pole7"];
$pole8 = $_POST["pole8"];
$pole9 = $_POST["pole9"];
// Obliczenie Wyznacznika macierzy 3x3 podzielone na sume wyznaczników 3 macierzy 2x2, wynik w zmiennej $detA.
$det1 = $pole1*($pole5*$pole9 - $pole6*$pole8);
$det2 = $pole2*($pole6*$pole7 - $pole9*$pole4);
$det3 = $pole3*($pole4*$pole8 - $pole7*$pole5);
$detA = $det1+$det2+$det3;
//Jeśli klikniemy submit czyli przycisk Oblicz to dostaniemy wynik.
if (isset($_POST['submit'])){
echo "Wyznacznik macierzy A:",'<br><br>';
echo "DetA = $detA";}
?>


					<br>
					<br>
				<input name="submit" type="submit" value="Oblicz" class="btn">
				<input name= "reset" type="reset"  value="Czyść" class="btn">

			</fieldset>
		</div>
    </div>
</div>


<footer> Rafał Czarnecki</footer>
</FORM>
</HTML>
</HEAD>
