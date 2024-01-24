<?php

session_start();

$uploads = "../images/uploads";
$tmp_name = $_FILES['profile-photo']['tmp_name'];
$name = $_FILES['profile-photo']['name'];
$addpict = move_uploaded_file($tmp_name, $uploads . '/' .$name );
$_SESSION['profilphoto'] = $name;





$_FILES['profile-photo']['name'] ?? null

