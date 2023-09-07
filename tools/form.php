<!-- Gestion du formulaire de contact en php -->
<?php
    // collect des infos utilisateurs
    $userName = $_POST["nom"];
    $userNameLast = $_POST["prenom"];
    $userMail = $_POST["mail"];
    $userMessage = $_POST["message"];
    $date = date("Y-m-D");

    // Envoi des mail
    $to = 'mandresy.andriantsoanavalona@gmail.com';
    $subject = 'Nouvelle notification sur ton site !';
    $message = $userMessage;
    $headers = 'From:'.$userMail. "\r\n" .
        'Reply-To: site internet' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $retour = mail($to, $subject, $message, $headers);

    if($retour){
        echo "Mail a été envoyé";
    }
    else{
        echo "Non pas envoyé";
    }
?>
