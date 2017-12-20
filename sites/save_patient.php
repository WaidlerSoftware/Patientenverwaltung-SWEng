<?php include 'database.php';
?>
 
<?php
 
// create a variable
$vorname=$_POST['vorname'];
$nachname=$_POST['nachname'];
$geschlecht=$_POST['geschlecht'];
$geburtsdatum=$_POST['geburtsdatum'];
$email=$_POST['email'];
$versicherung=$_POST['versicherung'];
 
//Execute the query
 
mysqli_query($connect,"INSERT INTO patient(vorname,nachname,geschlecht,geburtsdatum,email,versicherung)
				VALUES('$vorname','$nachname','$geschlecht','$geburtsdatum','$email','$versicherung')");
if(mysqli_affected_rows($connect) > 0){
	include("./patient_anlegen.html");	
} else {
	include("./patient_anlegen.html");
	echo mysqli_error ($connect);
}
?>