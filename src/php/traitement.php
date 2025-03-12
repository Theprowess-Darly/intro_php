<?php
  session_start();
  // Inclure le fichier de connexion
  require_once "connexion_db.php";
  
 // Verifier si le formulaire a ete soumis
  if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])){
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Inserer les donnees dans la database
    $req = $bdd->prepare('INSERT INTO messagerie(nom, email, message) VALUES(:nom, :email, :message)');
    $req->execute(array(
        'nom' => $nom,
        'email' => $email,
        'message' => $message
    ));
    // message de succes
    echo "Message envoyé avec succès";
   
  
    // Rediriger vers le formulaire
  }else{
    $_SESSION['message'] = "Erreur lors de l'envoi du message";
    header('Location: ../../formulaire_b.php');
  }


?>
