<?php
session_start();
include './partials/header.php';
require_once './config/connexion.php';

$preparedRequestPhotoFeed= $connexion->prepare(
    "SELECT * FROM photo ORDER BY created_at DESC");

    $preparedRequestPhotoFeed->execute();

$photofeed = $preparedRequestPhotoFeed->fetchAll(PDO::FETCH_ASSOC);

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

<?php foreach($photofeed as $photofeed1) { ?>



    <div class="card m-3" style="width: 30rem;">
    <h5 class="card-title">here username</h5>
    <img src="/images/uploads/<?=$photofeed1['photo'] ?> " style="width: 30rem;">
  <div class="card-body">
    <h5 class="card-title">here comments and likes</h5>
    <p class="card-text">here photo description</p>
  </div>
</div>
<?php
}?>


    </div>

    <div class="col-4"> <a href="./profil.php" style="text-decoration:none" class="text-dark">

        <div class="row">


            <div class="col-3">
            <img src="./images/uploads/<?=$_SESSION['profilephoto'] ?>" alt="" srcset="" class="picc2 m-2"> <?= $_SESSION['username'] ?> </a>
            </div>
            <div class="col-9 pt-2">
            <a href="./process/process_logout.php" style="text-decoration:none" class="fw-semibold">Basculer</a>
            </div>
    </div>
        </div>


            <!-- la Modal de base -->
            
            <div id="demo" class="modal">
        
                <div class="modal_content">
        
                <form action="./process/process_photofeed.php" method="post" enctype="multipart/form-data"> 
                <div class="upload">
    <h1 class="browse">Sélectionnez un fichier :</h1>
    <input type="file" id="file" class="input-file" name="photofeed" multiple>
    <span id="file-select-button" class="browse button black">Sélectionnez des fichiers</span>
    <button class="btn btn-primary" type="submit">Envoyer photo</button>
</div>
                </form>
                     <section class="p-5">
        
                    <section class="container" id="">
            
            
                <a href="#" class="modal_close">&times;</a>
              </div>
            </div>
            </button>

</div>
<?php

?>

