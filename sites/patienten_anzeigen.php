<!DOCTYPE html>
<html>
    <head>
        <title>Patienten Anzeigen</title>
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" href="../wald.png"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link rel="stylesheet" href="../styles/colour_forms.css">
        <script src="scripts/main.js"></script> 
    </head>
    <body>
        <div class="flex-background">
            <table class="static-background">
                <tr>
                    <td class="main-title" style="vertical-align:top">
                        WaidlerSoftware - Patientenverwaltung   
                    </td>         
                </tr>

				<tr>
					<td>
<?php 
    $db = mysqli_connect('localhost','root','','patientenverwaltung');
        if (mysqli_connect_errno()) { 
        die ('Konnte keine Verbindung zur Datenbank aufbauen:  
                '.mysqli_connect_error().'('.mysqli_connect_errno().')'); 
        } 
     
    $sql = 'SELECT * FROM patient ORDER BY vorname'; 
    $erg = $db->query($sql); 
        if (!$erg){ 
        die ('Etwas stimmte mit dem Query nicht: '.$db->error); 
        } 
?> 

<table> 

	<tr> 
		<th>Vorname</th> 
        <th>Nachname</th> 
        <th>Geschlecht</th> 
        <th>Geburtsdatum</th> 
        <th>E-Mail</th> 
        <th>Versicherung</th> 
	</tr> 

	<?php 
             while ($row = $erg->fetch_assoc()) {       
         ?> 

	<tr> 
		<td>
			<?php echo $row['vorname']; ?>
		</td> 
		<td>
			<?php echo $row['nachname']; ?>
        </td> 
        <td>
			<?php echo $row['geschlecht']; ?>
        </td>
		<td>
			<?php echo $row['geburtsdatum']; ?>
        </td> 
        <td>
			<?php echo $row['e-mail']; ?>
        </td>
        <td>
			<?php echo $row['versicherung']; ?>
		</td>
	</tr> 

	<?php 
                } 
        ?> 
</table> 
</td> 
                </tr>

                <tr>
                    <a href=../main.html>
                        <button class = "home-button mdl-button mdl-js-button mdl-button--raised">
                            <i class = "material-icons">home</i> Hauptseite
                        </button>
                    </a>
                </tr>
            </table>
        </div>
    </body>
</html>
