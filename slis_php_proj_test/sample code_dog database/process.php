<?php include_once 'config.php';?>
<?php include_once 'insert_controller.php';?>

<?php
 
$name             = $_POST["name"];
$age             = $_POST["age"];
$hrsofsleep      = $_POST["hrsofsleep"];
$dog_type     = $_POST["dog_type"];
$dog_gender     = $_POST["dog_gender"];
  
 //echo $name ."*".$age."*".$hrsofsleep."*".$dog_type."*".$dog_gender;
     $newSearch = new dogInfoInsert($name, $age, $hrsofsleep, $dog_type, $dog_gender, $pdo);
     $newSearch->insertdog();
      //exit();
  
  ?>
  Your record was inserted.<br>
  <a href ="myapp.php">Click here to go back to the doggie list.</a>