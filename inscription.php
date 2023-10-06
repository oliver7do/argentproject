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
            <div class="col-md-6">
                <label class="name1">Prénom</label>
                <input type="text" class="form-control" placeholder="Prénom" aria-label="prenom">
            </div>
            <div class="col-md-6">
                <label class="name1">Nom</label>
                <input type="text" class="form-control" placeholder="Nom" aria-label="nom">
            </div>
        </div>

        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Montant</label>
                <select id="inputState" class="form-select">
                    <option selected>Choisir...</option>
                    <option>10.000$</option>
                    <option>20.000$</option>
                    <option>30.000$</option>
                    <option>40.000$</option>
                    <option>50.000$</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>

            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>

    </div>
    <div>
        <button type="submit" class="intro33" name="submit" value="submit">REGISTER</button>
    </div>
</div>