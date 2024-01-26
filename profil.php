<?php

session_start();

include './partials/header.php'
?>
<div class="row">

    <?php
    include './partials/navbar.php';
    ?>


</div>
<div class="col-2 pt-4">
</div>
<div class="col-6 pt-4">
    <div class="row">
        <div class="col-4 d-flex">
            <img src="./images/uploads/<?= $_SESSION['profilephoto'] ?>" alt="" srcset="" class="picc m-2">
        </div>
        <div class=" col-6 d-flex">
            <h5 class="card-title p-2"><?= $_SESSION['username']; ?></h5>
            <a href="./update_profile.php"> <button type="submit" class="btn btn-dark p-2">Modifier photo profil</button> </a>
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

        <!-- la Modal (fenetre pop-up) -->

        <div id="demo" class="modal">

            <?php
            include './partials/modal.php'
            ?>

        </div>