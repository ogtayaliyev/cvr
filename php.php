<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $titre_message = $_POST["titre_message"];
    $objet = $_POST["objet"];
    $message = $_POST["message"];

    $to = "ogtayaliyev@yahoo.com";
    $subject = $titre_message;
    $message = "De : $nom $prenom\n\n";
    $message .= "Objet : $objet\n\n";
    $message .= "Message : $message";

    mail($to, $subject, $message);

    // Rediriger l'utilisateur vers une page de confirmation
    header("Location: confirmation.html");
}
?>
