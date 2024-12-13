<?php
use App\Classes\Manager;

// Inclure le fichier de connexion à la base de données
require_once './Settings/db.php';
require_once './classes/Manager.class.php';

$manager = new Manager(($db));

// Vérifier si le formulaire a été soumis
    // Récupérer les données du formulaire
    $email = $data->email;
    $password = $data->password;

    // Hacher le mot de passe avant de l'insérer
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $manager->addUser($email, $hashed_password);
    
?>