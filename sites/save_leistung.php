<?php include 'database.php';
?>
 
<?php
 
// create a variable
$leistungsnummer=$_POST['leistungsnummer'];
$leistungsname=$_POST['leistungsname'];
$geschlecht=$_POST['geschlecht'];
$geburtsdatum=$_POST['geburtsdatum'];
$email=$_POST['email'];
$versicherung=$_POST['versicherung'];
 
//Execute the query
 
mysqli_query($connect,"INSERT INTO patient(vorname,nachname,geschlecht,geburtsdatum,email,versicherung)
				VALUES('$vorname','$nachname','$geschlecht','$geburtsdatum','$email','$versicherung')");

if(mysqli_affected_rows($connect) > 0){
	include("./rechnung_anlegen.html");	
} else {
	include("./rechnung_anlegen.html");
	echo mysqli_error ($connect);
}

?>