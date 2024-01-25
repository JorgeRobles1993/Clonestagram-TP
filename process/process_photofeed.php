<?php

session_start();
require_once '../config/connexion.php';




$preparedRequestAddphotofeed = $connexion->prepare( 
    "INSERT INTO photos (`id`, `user_id`, `photo`) VALUES (?, ?, ?)"
);

$preparedRequestAddphotofeed->execute([
    $_SESSION['id'],


])

header('Location: ../profil.php');




$preparedRequestUpdateUser = $connexion->prepare(
    "UPDATE user SET profilephoto = ? WHERE id = ?"
);
// Execute la requete pour inserer le user 
$preparedRequestUpdateUser->execute([
    $name ?? null,
    $_SESSION['id']
]);

header('Location: ../profil.php');