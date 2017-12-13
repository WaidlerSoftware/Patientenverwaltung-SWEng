<?php
$connect=mysqli_connect('localhost','root','','patientenverwaltung');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>