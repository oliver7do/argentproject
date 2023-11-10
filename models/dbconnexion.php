<?php
session_start();
require_once("db.php");

if (isset($_POST['submit'])) {
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['pass']);

    // etablir la connexion avec la bd
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM user WHERE email = ?");
    try {
        $request->execute(array($email));
        $userInfo = $request->fetch(PDO::FETCH_ASSOC);
        if (empty($userInfo)) {
            echo "Utilisateur inconnu";
        } else {
            // verifier si le mot de passe est correct
            if (password_verify($pass, $userInfo['pass'])) {
                // si l'utilisateur est un admin
                // definir la variable de session role
                $_SESSION['role'] = $userInfo["role"];
                $_SESSION['id_user'] = $userInfo["id_user"];
                if ($userInfo['role'] == "admin") {
                    header("Location: http://localhost/argentproject/pageadmin/accueiladmin.php");
                } else {
                    header("Location: http://localhost/argentproject/pageclient/accueilclient.php");
                }
            } else {
                echo "Ahh tu fais malin";
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
