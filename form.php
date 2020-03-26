


<?php
if($_POST){
    $errors = array();
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    $_POST['fname'] = test_input($_POST['fname']);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST['fname'])) {
        $errors['fname'] = "Only letters and white space allowed";
    }
  

    $_POST['lname'] = test_input($_POST['lname']);
    if(!preg_match('/^[a-zA-z ]+$/', $_POST['lname'])){
        $errors['lname'] = "Only letters and white space allowed";
    }
   


    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Invalid email format";
    }
    if(empty($_POST['password'])){
        $errors['password'] = "can't be empty";
    }
    if(count($errors) == 0){
        header( 'location:indwelcome.php');
    }


   
}else {


include 'formf.php';}
   
?>
