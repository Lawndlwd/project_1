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
}