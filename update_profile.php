<?php
session_start();
include './partials/header.php'
?>
<div class="row">
<div class="border border-right border-2 col-2">
        <nav class="stickynavbar navbar-nav ms-3">
            <h1 class="textlogo fs-2 ms-3">Clonestagram</h1>
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
                    <a class="nav-link" href="#demo"><i class="fa-regular fa-square-plus fa-xl m-3" style="color: #000000;"></i> Créer
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
    <div class="col-4">
            <div>
                <h5 class="card-title mb-0"><?= $_SESSION['username']; ?></h5> 

                <form action="./process/process_addphoto.php" method="post" enctype="multipart/form-data"> 
                    <input type="file" id="profilephoto" name="profilephoto"> <button class="btn" type="submit">envoyer</button>
                </form>

                <div id="demo" class="modal">
        
        <div class="modal_content">

        <form action="./process/process_photofeed.php" method="post" enctype="multipart/form-data"> 
        <div class="upload">
<h1 class="browse">Sélectionnez un fichier :</h1>
<input type="file" id="file" class="input-file" name="photofeed" multiple>
<span id="file-select-button" class="browse button black"></span>
<button class="btn btn-primary" type="submit">Envoyer photo</button>
</div>
        </form>
             <section class="p-5">

            <section class="container" id="">      
    
        <a href="#" class="modal_close">&times;</a>
      </div>
    </div>