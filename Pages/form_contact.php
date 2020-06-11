<?php

var_dump($_POST);
$message = $_POST['message'];
$header = 'FROM: test@gmail.com';

mail('guillonaxel0714@gmail.com', 'Formulaire de contact', $message, $header);

?>