<?php
include_once 'db_models.php';
include_once 'db_models_query_dogs.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>My Dogs</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<h1>Here's a list of my dogs</h1>



<?php


$object = new dogs;
$object->getalldogs();

$shop = $object->getalldogs();
?>
<?php if (count($shop) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($shop))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($shop as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>

<p class="thicker"><a href = "login.php">Login To Add Dogs</a></p>



        















</html>