<?php 
include 'test.php' ;
print_r($_POST)
$firstname=$_POST['fname'];
$lastName =$_POST['lname'];
$subjects =$_POST['subject'];
$email    =$_POST['email'];
$phoneNum =$_POST['tel'];
$message  =$_POST['message'];

echo "Merci " . $lastName . " ". $firstname . " de nous avoir contacté à propos de " . $subject . "<br>" ;
echo "Un de nos conseiller vous contactera soit à l’adresse " . $email . " ou par téléphone au " . $tel . " dans les plus brefs délais pour traiter votre demande <br>"; 
echo  $message;


?>
