<?php
session_start();
 
require_once '../config/connexion.php';

$preparedRequest = $connexion->prepare(
    "SELECT * FROM user
    WHERE username =  ?"
);


$preparedRequest->execute([
            $_POST["username"],
        ]);
$verifyUser = $preparedRequest->fetch(PDO::FETCH_ASSOC);



if (!empty($_POST['username'])
    && !empty($_POST['password'])
    && !$verifyUser ) {
        

        $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $preparedRequestCreateUser = $connexion->prepare(
            "INSERT INTO user (`username`, `password`) VALUES (?,?)"
        );
        // Execute la requete pour inserer le user 
        $preparedRequestCreateUser->execute([
            $_POST["username"],
            $hashed_password,
        ]);

        $_SESSION['id'] = $connexion->lastInsertId();
        $_SESSION['username'] = $_POST["username"];

        header('Location: ../feed.php?success=Votre compte a bien été créé !');
}else if ($verifyUser){
    header('Location: ../index.php?error=Deja inscrit !');
}
else{
    header('Location: ../index.php?error=Erreur dans la création du compte');

}