<?php include 'database.php';
?>
 
<?php
 
// create a variable
$vorname=$_POST['vorname'];
$nachname=$_POST['nachname'];
$geburtsdatum=$_POST['geburtsdatum'];
$email=$_POST['email'];
$versicherung=$_POST['versicherung'];
 
//Execute the query
 
mysqli_query($connect,"INSERT INTO patient(vorname,nachname,geburtsdatum,email,versicherung)
				VALUES('$vorname','$nachname','$geburtsdatum','$email','$versicherung')");