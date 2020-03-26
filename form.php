


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
    if(count($errors) == 0){
        header( 'location:indwelcome.php');
    }


   
}
?>



<form target="" method="POST"  class="free-trail-lev">
    <div class="first-line-lev">
        <div>
            <label for="fname">First name</label>
            <input type="text" id="fname" name="fname" value="<?php if(isset($_POST['fname'])){ echo $_POST['fname'];} ?>" required>
            <?php if(isset($errors['fname'])){ echo $errors['fname'];} ?>
        </div>
        <div>
            <label for="lname">Last name</label>
            <input type="text" id="lname" name="lname" value="<?php if(isset($_POST['lname'])){ echo $_POST['lname'];} ?>" required>
            <?php if(isset($errors['lname'])){ echo $errors['lname'];} ?>
        </div>
    </div>
    <div class="second-line-lev">
        <div>
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>" required>
            <?php if(isset($errors['email'])){ echo $errors['email'];} ?>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <?php if(isset($errors['password'])){ echo $errors['password'];} ?>
        </div>
    </div>
    <div>
        <input type="checkbox" id="check" required>
        <label for="check"><span  class="dev-label-lev"> I want to hear from Treehouse about products and services.</span></label>
    </div>
    <hr>
    <input type="submit" required name="term" value="Claim Your Free Trial">
    </form>