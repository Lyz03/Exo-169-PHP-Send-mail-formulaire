<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo 169</title>
</head>
<body>

<?php
$mail = '';
$message = '';
if (isset($_POST['submit'])) {

     if (isset($_POST['email']) && isset($_POST['message'])) {

         $mail = trim(strip_tags($_POST['email']));
         $message = trim(strip_tags($_POST['message']));

         if (!empty($mail) && !empty($message)) {

             if (strlen($message) <= 500) {

                 if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                     $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);

                     if (mail($mail, 'exo 169', $message, 'From: leelilyfr@gmail.com')) {
                         echo "Mail bien envoyé";
                     } else {
                         echo "Le mail n'a pas été envoyé";
                     }
                 } else {
                     echo "adresse mail non valide";
                 }

             } else {
                 echo "message trop grand";
             }
         }
     }
}
?>

</body>
</html>