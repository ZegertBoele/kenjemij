<?php
require ('../Includes/config.php');

$id = $_SESSION['ID'];
$titel = $_POST['titel'];
$beschrijving = $_POST['beschrijving'];
$keuze = $_POST['keuze'];

$sql = "INSERT INTO feed (ID , userID , titel , beschrijving , antwoord) 
        VALUES (NULL, '$id' , '$titel', '$beschrijving' , '$keuze')";


if (mysqli_query($mysqli , $sql)){
    echo "toegevoegd!";
    header("Location:feed.php");
}else{
    echo "error";
}
?>