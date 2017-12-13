<?php include 'database.php';
?>
 
<?php
 
// create a variable
$anschrift=$_POST['anschrift'];
$absender=$_POST['absender'];
$erbrachte_Leistung=$_POST['erbrachte_Leistung'];
$gesamtbetrag=$_POST['gesamtbetrag'];
$bankverbindung=$_POST['bankverbindung'];
 
//Execute the query
 
$versicherung=$_POST['versicherung'];
mysqli_query($connect,"INSERT INTO patient(anschrift,absender,erbrachte_Leistung,gesamtbetrag,bankverbindung)
				VALUES('$anschrift','$absender','$erbrachte_Leistung','$gesamtbetrag','$bankverbindung')");

if(mysqli_affected_rows($connect) > 0){
	include("./patient_anlegen.html");	
} else {
	include("./patient_anlegen.html");
	echo mysqli_error ($connect);
}

?>