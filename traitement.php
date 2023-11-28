<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $souhait = $_POST["souhait"];
    $precisions = $_POST["precisions"];
    $message = $_POST["ameliorer"];
    
    // Adresse e-mail où vous souhaitez recevoir le formulaire
    $destinataire = "tomgammeur@outlook.fr";  // Remplacez ceci par votre adresse e-mail
    
    // Sujet de l'e-mail
    $sujet = "Nouveau formulaire de contact de $nom $prenom";
    
    // Construire le corps du message
    $corps_message = "Nom: $nom\n";
    $corps_message .= "Prénom: $prenom\n";
    $corps_message .= "E-mail: $email\n";
    $corps_message .= "Souhait: $souhait\n";
    $corps_message .= "Précisions: $precisions\n";
    $corps_message .= "Message:\n$message";
    
    // En-têtes de l'e-mail
    $entetes = "From: $email\r\n";
    $entetes .= "Reply-To: $email\r\n";
    
    // Envoyer l'e-mail
    if (mail($destinataire, $sujet, $corps_message, $entetes)) {
        // Redirection après envoi réussi
        header("Location: confirmation.html");
    } else {
        // Redirection en cas d'échec de l'envoi
        header("Location: erreur.html");
    }
} else {
    // Si le formulaire n'est pas soumis, redirigez vers la page du formulaire
    header("Location: formulaire.html");
}

   //Si un probleme persiste , afficher "Erreur 12".
?>

    

