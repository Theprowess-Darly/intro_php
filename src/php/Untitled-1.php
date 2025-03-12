
// 1) Creation du script et Récupération des données
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST["nom"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Validation des données (voir section 3)

  // Traitement des données (voir section 4)

  // Réponse à l'utilisateur (voir section 5)
}

// Validation des données
$nom = htmlspecialchars(trim($_POST["nom"]));
$email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
$message = htmlspecialchars(trim($_POST["message"]));

if (empty($nom) || empty($email) || empty($message)) {
  echo "Tous les champs sont obligatoires.";
  exit;
}

if ($email === false) {
  echo "L'adresse email n'est pas valide.";
  exit;
}

// Traitement des données
// Exemple : Envoi d'un email
// $destinataire = "votre_email@example.com";
// $sujet = "Nouveau message de $nom";
// $contenu = "Email: $email\n\nMessage: $message";
// mail($destinataire, $sujet, $contenu);

// Exemple : Enregistrement dans une base de données
// (nécessite une connexion à la base de données)
// ...

// Réponse à l'utilisateur
echo "Merci pour votre message !";
