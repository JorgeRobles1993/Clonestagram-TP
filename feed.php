<?php
session_start();
include './partials/header.php'

?>


<div class="row">

    <div class="border border-right border-2 col-2">
        <h1 class="textlogo fs-3 m-5">Clonestagram</h1>
        <nav class="navbar">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                 <a class="nav-link" href="./feed.php"><i class="fa-solid fa-house m-3" style="color: #000000;"></i> Accueil </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-brands fa-searchengin m-3"></i> Recherche </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-regular fa-compass m-3" style="color: #000000;"></i>Decouvrir </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fa-solid fa-clapperboard m-3" style="color: #000000;"></i>Reels </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-regular fa-paper-plane m-3" style="color: #000000;"></i> Messages </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fa-regular fa-heart m-3" style="color: #000000;"></i>Notifications </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-regular fa-square-plus m-3" style="color: #000000;"></i> Créer
                </li>
                <li class="nav-item fw-bold">
                   <a class="nav-link" href="./profil.php"><img src="./images/<?=$_SESSION['photo']?>" alt="" srcset="" class="picc2 m-2">  Profil </a>
                </li> 
                <div class="lastitems">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-brands fa-threads m-3" style="color: #000000;"></i>Threads </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-bars m-3" style="color: #000000;"></i> Plus </a>
                    </li>
                </div>
            </ul>
        </nav>
    </div>
<div class="col-2">
</div>
    <div class="col-4">
                <img src="./images/messicup.jpg" alt="" srcset="" class="w-100">

    </div>

    <div class="col-4"> <a href="./profil.php" style="text-decoration:none" class="text-dark">

    <img src="./images/<?=$_SESSION['profilephoto']?>" alt="" srcset="" class="picc2 m-2"> <?= $_SESSION['username'] ?> 
     
        </a></div>

        <a href="./process/process_logout.php" class="btn btn-black">
                <i class="fa-solid fa-person-walking-arrow-right"></i>
            </a>


</div>


<?php

?>

