<?php include 'database.php';
?>
 
<?php
 
// create a variable
$leistungsnummer=$_POST['leistungsnummer'];
$leistungsname=$_POST['leistungsname'];
$zahlungsbetrag_kasse=$_POST['zahlungsbetrag_kasse'];
$zahlungsbetrag_privat=$_POST['zahlungsbetrag_privat'];
 
//Execute the query
 
mysqli_query($connect,"INSERT INTO leistung(leistungsnummer,leistungsname,zahlungsbetrag_kasse,zahlungsbetrag_privat)
				VALUES('$leistungsnummer','$leistungsname','$zahlungsbetrag_kasse','$zahlungsbetrag_privat')");

if(mysqli_affected_rows($connect) > 0){
	include("./leistung_anlegen.html");	
} else {
	include("./leistung_anlegen.html");
	echo mysqli_error ($connect);
}

?>