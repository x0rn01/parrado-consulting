<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'info@parradoconsulting.be';
$subject = "Nouveau courrier reçu de $name";
$body = "From: $name\nEmail: $email\n\n$message";

if (mail($to, $subject, $body)) {
    $result .= '<br> <div class="alert alert-success alert-dismissible" role="alert">';
    $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    $result .= 'Merci pour votre message! Je reviendrai vers vous dans les plus brefs délais.';
    $result .= '</div>';

    echo $result;
} else {
    $result = '<br>';
    $result .= '<div class="alert alert-danger alert-dismissible" role="alert">';
    $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    $result .= 'Une erreur s\'est produite, veuillez réessayer plus tard.';
    $result .= '</div>';
}
?>
