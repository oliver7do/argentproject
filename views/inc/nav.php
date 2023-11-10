<nav class="navbar navbar-expand-lg mb-5" id="boom">

    <div class="container-fluid">

        <a class="navbar-brand" href="http://localhost/argentproject/accueil.php" id="navlet">L'ARGENT</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
           
            <span class="navbar-toggler-icon"></span>

        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarText">

            <ul class="navbar-nav mb-2 mb-lg-0">
                <?php if (isset($_SESSION['id_user'])) { ?>
                    <li class="nav-item">
                        <?php if ($_SESSION['role'] == "admin") { ?>
                            <a class="nav-link active" aria-current="page" href="http://localhost/argentproject/pageadmin/list_clients.php" id="navlet">CLIENTS</a>
                        <?php } ?>
                    </li>
                <?php } ?>
                <li class="nav-item">

                    <a class="nav-link active" aria-current="page" href="http://localhost/argentproject/proposdenous.php" id="navlet">A PROPOS DE NOUS</a>
                
                </li>

                <li class="nav-item">
                    
                    <a class="nav-link active" aria-current="page" href="http://localhost/argentproject/inscription.php" id="navlet">INSCRIPTION</a>
                
                </li>
                
                <li class="nav-item">
                    
                    <a class="nav-link active" aria-current="page" href="http://localhost/argentproject/connexion.php" id="navlet">CONNEXION</a>
               
                </li>
            </ul>
        </div>
    </div>
</nav>