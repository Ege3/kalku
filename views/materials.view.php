<?php require('partials/head.php'); ?>

<h1>Materjali lisamine</h1>

<form method="POST" action="/addmaterial">
    <input type="submit">
    <input name="material_name">
</form>

<?php $message = filter_input(INPUT_GET, 'message', FILTER_SANITIZE_STRING); ?>
<?php echo empty($message) ? "" : '<div class="alert">' . $message . '</div>'; ?> 

<table border="1">
<tr>
  <th>Name</th>
  <th>Name</th>
  <th>Edited</th>
  <th>Delete</th>
</tr>

<?php if(!empty($materials)) : foreach ($materials as $material): ?>
  <tr>
  <td><?php echo $material->name; ?></td>
  <td><?php echo $material->name; ?></td>
  <td><a href="/materials/edit/?id=<?php echo $material->idmaterials;?>">Edit</a></td>
  <td><a href="/materials/delete/?id=<?php echo $material->idmaterials;?>">Delete</a></td>
  </tr>

<?php endforeach; endif;?>

<?php require('partials/footer.php'); ?>