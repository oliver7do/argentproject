<?php
include_once "./views/inc/header.php";
// require_once "model/functions.php";
?>
<div class="feuille">
    <img src="./views/asset/img/logo.png" alt="">
</div>
<div class="introoo">
    <h1 class="intro111">REGISTER</h1>
    <div class="container1">

        <div class="row g-2" id="name">
            <div class="col-md-5">
                <label class="name1">Prénom*</label>
                <input type="text" class="form-control" placeholder="Prénom" aria-label="prenom">
            </div>
            <div class="col-md-5">
                <label class="name1">Nom*</label>
                <input type="text" class="form-control" placeholder="Nom" aria-label="nom">
            </div>
        </div>

        <form class="row g-3" id="name">
            <div class="col-md-5">
                <label for="inputEmail" class="form-label">Email*</label>
                <input type="email" class="form-control" placeholder="bonjour@oui.com" id="inputEmail" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
            </div>
            <div class="col-md-5">
                <label for="inputState" class="form-label">Montant</label>
                <select id="inputState" class="form-select">
                    <option selected>Sélectionnez une option</option>
                    <option>10.000$</option>
                    <option>20.000$</option>
                    <option>30.000$</option>
                    <option>40.000$</option>
                    <option>50.000$</option>
                </select>
            </div>
            <div class="col-md-5">
                <label for="inputProfession" class="form-label">Profession*</label>
                <input type="profession" class="form-control" id="inputProfession">
            </div>
            <div class="col-md-5">
                <label for="inputPassword4" class="form-label">Mot de passe*</label>
                <input type="password" class="form-control" placeholder="********" id="inputPassword4">
            </div>
            <div class="col-7">
                <label for="inputMessages" class="form-label">Messages*</label>
                <input type="text" class="form-control" id="inputMessages" placeholder="Tapez votre message ici">
            </div>

        </form>

    </div>
    <div class="intro33">
        <a type="submit" name="submit" value="submit" class="nav-link active" aria-current="page" href="http://localhost/argentproject/">REGISTER</a>
    </div>
</div>