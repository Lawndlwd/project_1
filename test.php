
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

// define variables and set to empty values


// start validation
if($_POST){
  $errors = array();
  if(empty($_POST['fname'])){
    $errors['fname1'] = "can't be empty";
  }
  else {
    $_POST['fname'] = test_input($_POST['fname']);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST['fname'])) {
      $errors['fname2'] = "Only letters and white space allowed";
    }
  }


  if(empty($_POST['lname'])){
    $errors['lname1'] = "can't be empty";
  }else{
    $_POST['lname'] = test_input($_POST['lname']);
    if(!preg_match('/^[a-zA-z ]*$/', $_POST['lname'])){
      $errors['lname2'] = "Only letters and white space allowed";
    }
  }



  if(empty($_POST['email'])){
    $errors['email1'] = "can't be empty";
  }else{
    $_POST['email'] = test_input($_POST['email']);
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $errors['email2'] = "Invalid email format";
    }
  }



  if(empty($_POST['tel'])){
    $errors['tel1'] = "can't be empty";
  }



  if(empty($_POST['subject'])){
    $errors['subject1'] = "can't be empty";
  }else{
    $_POST['subject'] = test_input($_POST['subject']);
  }



  if(empty($_POST['message'])){
    $errors['message1'] = "can't be empty";
  }else{
    $_POST['message'] = test_input($_POST['message']);
  }



  if(count($errors) == 0){
      $firstname=$_POST['fname'];
      $lastName =$_POST['lname'];
      $subject =$_POST['subject'];
      $email    =$_POST['email'];
      $phoneNum =$_POST['tel'];
      $message  =$_POST['message'];

      echo "Merci " . $lastName . " ". $firstname . " de nous avoir contacté à propos de " . $subject . "<br>" ;
      echo "Un de nos conseiller vous contactera soit à l’adresse " . $email . " ou par téléphone au " . $phoneNum . " dans les plus brefs délais pour traiter votre demande <br>"; 
      echo  $message;
    exit;
  }
} 
  



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="POST" target="">  
<div>
  <label for=""> First Name:</label>  
  <input type="text" name="fname" value="<?php if(isset($_POST['fname'])){ echo $_POST['fname'];} ?>" required>
  <span class="error">* <?php if(isset($errors['fname1'])){ echo $errors['fname1'];} ?>
  <?php if(isset($errors['fname2'])){ echo $errors['fname2'];} ?></span>
</div>
<div>
  <label for=""> Last Name:</label>  
  <input type="text" name="lname" value="<?php if(isset($_POST['lname'])){ echo $_POST['lname'];} ?>" required>
  <span class="error">*<?php if(isset($errors['lname1'])){ echo $errors['lname1'];} ?>
  <?php if(isset($errors['lname2'])){ echo $errors['lname2'];} ?></span>
</div>
<div>
  <label for="email">E-mail:</label>  
  <input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>"required>
  <span class="error">*<?php if(isset($errors['email1'])){ echo $errors['email1'];} ?>
  <?php if(isset($errors['email2'])){ echo $errors['email2'];} ?></span>
</div>
<div>
  <label for="">Phone</label>: 
  <input type="tel" name="tel" value="<?php if(isset($_POST['tel'])){ echo $_POST['tel'];} ?>" required>
  <span class="error">* <?php if(isset($errors['tel1'])){ echo $errors['tel1'];} ?>
  <?php if(isset($errors['tel2'])){ echo $errors['tel2'];} ?></span>
</div>
<div>
  <label for="subject">Subject:</label>  
  <input list="subject" name="subject" value="<?php if(isset($_POST['subject'])){ echo $_POST['subject'];} ?>"required>
  <span class="error">* <?php if(isset($errors['subject1'])){ echo $errors['subject1'];} ?>
  <?php if(isset($errors['subject2'])){ echo $errors['subject2'];} ?></span>
  <datalist id="subject">
    <option value="samfony">
    <option value="react.js">
    <option value="angular.js">
    <option value="laravel">
  
</div>
<div>
  <label for="message">message:</label>  
  <textarea name="message" rows="5" cols="40" value = "<?php if(isset($_POST['message'])){ echo $_POST['message'];} ?>" required></textarea>
  <span class="error">* <?php if(isset($errors['message1'])){ echo $errors['message1'];} ?>
  <?php if(isset($errors['message2'])){ echo $errors['message2'];} ?></span>

</div>  
<div>
      <input type="submit" name="submit" value="Submit">  
</div>
</form>

