<?php
session_start();
include_once "./views/inc/header.php";
?>

<div class="feuille">
    <img src="./views/asset/img/logo.png" alt="">
</div>
<div class="introoo">
    <h1 class="intro111">REGISTER</h1>
    <div class="container1">
        <form class="row g-3" id="name" method="post" action="./models/dbregister.php">
            <div class="col-md-5">
                <input type="text" class="form-control" class="name1" placeholder="Prénom" aria-label="prenom" name="prenom">
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" class="name1" placeholder="Nom" aria-label="nom" name="nom">
            </div>
            <div class="col-md-5">
                <label for="inputEmail" class="form-label">Email*</label>
                <input type="email" class="form-control" placeholder="bonjour@oui.com" id="inputEmail" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" name="email">
            </div>
            <div class="col-md-5">
                <label for="inputProfession" class="form-label">Profession*</label>
                <input type="text" class="form-control" id="inputProfession" name="profession">
            </div>
            <div class="col-md-5">
                <label for="number" class="form-label">Téléphone*</label>
                <input type="tel" class="form-control" placeholder="#99999" id="number" name="number" pattern="[0-9]{10}" required name="number">
            </div>
            <div class="col-md-5">
                <label for="inputPassword4" class="form-label">Mot de passe*</label>
                <input type="password" class="form-control" placeholder="********" id="inputPassword4" name="pass">
            </div>

            <div>
                <input type="submit" class="intro33" name="register" value="REGISTER" class="nav-link active" aria-current="page">
            </div>
        </form>

    </div>

</div>