<?php include 'database.php';
?>

<?php     
    $loesch = mysqli_query($connect, "DELETE FROM patient WHERE vorname = 'Florian'");
    header("Location:patient_anzeigen.php");
?>