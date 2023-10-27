<?php
include_once "./views/inc/header.php";
// require_once "model/functions.php";
?>
<div class="feuille">
    <img src="./views/asset/img/logo.png" alt="">
</div>
<div class="conne2">
    <form action="./models/dbconnexion.php" method="post">
        <h1 class="conne22">CONNEXION</h1>
        <div class="container2">
            <div class="col-md-7" id="co1">
                <i class="fa-regular fa-user" id="user"></i>
                <i class="fa-regular fa-circle" id="circ"></i>

                <label for="inputEmail" class="co1">Email*</label>
                <input type="email" class="form-control" placeholder="bonjour@oui.com" id="inputEmail" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" name="email">
            </div>
            <div class="col-md-7" id="co1">
                <i class="fa-solid fa-lock fa-spin-pulse" id="lock"></i>
                <label class="co1" for="inputPassword4" class="form-label">Mot de passe*</label>
                <input type="password" class="form-control" placeholder="********" id="inputPassword4"
                name="pass">
            </div>

            <div>
                <input type="submit" class="co11" name="submit" value="CONNEXION" class="nav-link active" aria-current="page">
            </div>
        </div>
    </form>
</div>