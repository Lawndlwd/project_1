<?php 

$mainColor= "#fff";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mainColor = $_POST['color'];
        setcookie('background', $mainColor ,time() + 600000, '/');
    } 

if(isset($_COOKIE['background'])){
    $bodyColor = $_COOKIE['backround'];
}else{
    $bodyColor = $mainColor;
}

?>

<?php
include 'head.php';
//include 'header.php';
?>


<section style="margin:15rem auto; height: 50rem; width:100%; background-color: <?php echo $bodyColor; ?>;">
<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="color" name="color">
    <input type="submit" name="submit">
</form>
</section>
<?php

 ?>





<?php
include 'footer.php';
?>