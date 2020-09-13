<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p> <br>
Please use the form below to add doggies to the list:
<?php 
include_once 'db_models.php';
include_once 'dogtypes.php';
include_once 'doggender.php';
?>
<form method="post" action="process.php">
Name: <input type="text" name="name"><br>
Age: <input type="number" name="age"><br>
Hours of Sleep: <input type="number" name="hrsofsleep"><br>
Dog Type: <select name="dog_type" id="dog_type">
<?php


$object = new dogtypes;
$object->getdogtypes();

$shop = $object->getdogtypes();
?>
<?php foreach ($shop as $row): ?>
    <option value=<?php echo $row["id"]?>><?=$row["dog_type"]?></option>
<?php endforeach ?>
</select>

<br>Dog Gender: <select name="dog_gender" id="dog_gender">
<?php


$object2 = new doggender;
$object2->getdoggender();

$shop2 = $object2->getdoggender();
?>
<?php foreach ($shop2 as $row): ?>
    <option value=<?php echo $row["id"]?>><?=$row["dog_gender"]?></option>
<?php endforeach ?>
</select>

<input type="submit">
</form>





<br><br>



</body>


</html>
