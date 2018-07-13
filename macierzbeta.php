<HTML>
<HEAD>
<title>macierz</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
<br>
<br>
<br>
<FORM action="macierzbeta.php" method="POST">
<fieldset>                   
<legend> Macierz A </legend>
	<br>
<input name="pole1" type="number" class="btn">
<input name="pole2" type="number" class="btn">
<input name="pole3" type="number" class="btn"><br>
<input name="pole4" type="number" class="btn">
<input name="pole5" type="number" class="btn">
<input name="pole6" type="number" class="btn"><br>
<input name="pole7" type="number" class="btn">
<input name="pole8" type="number" class="btn">
<input name="pole9" type="number" class="btn"><br>
	<br>
	<br>

<?php
// Dane z formularza przypisane do zmiennych.
$wspolrzedne[1][1] = $_POST["pole1"];
$wspolrzedne[1][2] = $_POST["pole2"];
$wspolrzedne[1][3] = $_POST["pole3"];
$wspolrzedne[2][1] = $_POST["pole4"];
$wspolrzedne[2][2] = $_POST["pole5"];
$wspolrzedne[2][3] = $_POST["pole6"];
$wspolrzedne[3][1] = $_POST["pole7"];
$wspolrzedne[3][2] = $_POST["pole8"];
$wspolrzedne[3][3] = $_POST["pole9"];
// Obliczenie Wyznacznika METODĄ LAPLACE'A macierzy 3x3 podzielone na sume wyznaczników 3 macierzy 2x2, wynik w zmiennej $detA.
$det1 = $wspolrzedne[1][1]*($wspolrzedne[2][2]*$wspolrzedne[3][3] - $wspolrzedne[2][3]*$wspolrzedne[3][2]);
$det2 = $wspolrzedne[1][2]*($wspolrzedne[2][3]*$wspolrzedne[3][1] - $wspolrzedne[3][3]*$wspolrzedne[2][1]);
$det3 = $wspolrzedne[1][3]*($wspolrzedne[2][1]*$wspolrzedne[3][2] - $wspolrzedne[3][1]*$wspolrzedne[2][2]);
$detA = $det1+$det2+$det3;
//Jeśli klikniemy submit czyli przycisk Oblicz to dostaniemy wynik.
if (isset($_POST['submit'])){
echo "Wyznacznik macierzy A",'</br>';
echo "DetA = $detA";}
?>



	<br>
	<br>
<input name="submit" type="submit" value="Oblicz" class="btn">
<input name= "reset" type="reset"  value="Czyść" class="btn">

</fieldset>
</FORM>
<p>
</HTML>
</HEAD>
