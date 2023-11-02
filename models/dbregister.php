<?php

require_once("db.php");


if (isset($_POST['register'])) {
    // recuperer les infos saisies par le user
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    // $montant = htmlspecialchars($_POST['montant']);
    $profession = htmlspecialchars($_POST['profession']);
    $number = htmlspecialchars($_POST['number']);
    $pass = htmlspecialchars($_POST['pass']);
    // $message = htmlspecialchars($_POST['message']);
    $cryptedPassword = password_hash($password, PASSWORD_DEFAULT);

    $db = dbConnexion();
    $request = $db->prepare("INSERT INTO `user`(`prenom`, `nom`, `email`,  `profession`, `number`, `pass`) VALUES (?,?,?,?,?,?)");

    try {
        $request->execute(array($prenom, $nom, $email, $profession, $number, $cryptedPassword));
        header("Location: http://argentproject.com/connexion.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
