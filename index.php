<?php
include "Etudiant.php";
include "EtudiantManager.php";
$etudiantManager = new EtudiantManager();
$etudiants = $etudiantManager->getEtudiants();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <style>
        table{
            border: 1px solid black;
        }
        
    </style>
</head>
<body>
<h1>Let's display All our Students</h1>
<table>
<tr>
    <th>Namee</th>
    <th>Age</th>
    <th>Email</th>
</tr>
<?php


foreach($etudiants as $etudiant):
echo "<tr>
<td>$etudiant->name</td>
<td>$etudiant->age</td>
<td>$etudiant->email</td>
</tr>";
endforeach

?>
</table>
</body>
</html>