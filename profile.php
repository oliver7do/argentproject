<?php
include_once "../views/inc/headeradmin.php";
// require_once "model/functions.php";
?>


<div class="profil">
    <div>
        <h1 class="prof">PROFIL - ADMIN</h1>
        <div class="prof2">
            <div class="proff1">

                <div class="row g-2" id="name">
                    <div class="col-md-5">
                        <label class="name1">Prénom*</label>
                        <input type="text" class="form-control" placeholder="Prénom" aria-label="prenom">
                    </div>
                    <div class="col-md-5">
                        <label class="name1">Nom*</label>
                        <input type="text" class="form-control" placeholder="Nom" aria-label="nom">
                    </div>
                    <div class="col-5">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div>
        <h1 class="phot">PHOTO</h1>
        <p class="phott">Ajouter une photo</p>
        <div class="phot1">

            <img src="../views/asset/img/image.png" alt="">

        </div>
    </div>
</div>










<?php
include_once "../views/inc/footerclient.php";
?>