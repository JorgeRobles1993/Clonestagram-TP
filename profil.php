<?php

session_start();

include './partials/header.php'
?>
<div class="row">

<div class="border border-right border-2 col-2">
        <h1 class="textlogo fs-2 ms-3">Clonestagram</h1>
        <nav class="navbar-nav ms-3">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                 <a class="nav-link" href="./feed.php"><i class="fa-solid fa-house fa-xl fa-xl m-3" style="color: #000000;"></i> Accueil </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-brands fa-searchengin fa-xl m-3"></i> Recherche </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-regular fa-compass fa-xl m-3" style="color: #000000;"></i>Decouvrir </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fa-solid fa-clapperboard fa-xl m-3" style="color: #000000;"></i>Reels </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-regular fa-paper-plane fa-xl m-3" style="color: #000000;"></i> Messages </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fa-regular fa-heart fa-xl m-3" style="color: #000000;"></i>Notifications </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-regular fa-square-plus fa-xl m-3" style="color: #000000;"></i> Créer
                </li>
                <li class="nav-item fw-bold">
                   <a class="nav-link" href="./profil.php"><img src="./images/uploads/<?=$_SESSION['profilephoto'] ?>" alt="" srcset="" class="picc2 m-3">  Profil </a>
                </li> 
                <div class="lastitems">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-brands fa-threads fa-xl m-3" style="color: #000000;"></i>Threads </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-bars fa-xl m-3" style="color: #000000;"></i> Plus </a>
                    </li>
                </div>
            </ul>
        </nav>
    </div>
    <div class="col-2">
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-4 d-flex">
            <img src="./images/uploads/<?=$_SESSION['profilephoto'] ?>" alt="" srcset="" class="picc m-2">
            </div>
            <div class=" col-6 d-flex">
                <h5 class="card-title p-2"><?= $_SESSION['username']; ?></h5>
                <a href="./update_profile.php"> <button type="submit" class="btn btn-dark p-2">ajouter un photo</button> </a>
            </div>
            <?php ?>


                <div class="grille">
                <img src="./images/uploads/1.jpg" class="one"></img>
                <img src="./images/uploads/2.jpg" class="two"></img>
                <img src="./images/uploads/3.jpg" class="three"></img>
                <img src="./images/uploads/4.jpg" class="four"></img>
                <img src="./images/uploads/5.jpg" class="five"></img>
                <img src="./images/uploads/6.jpg" class="six"></img>
                </div>
