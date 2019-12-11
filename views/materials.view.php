<?php require('partials/head.php'); ?>

<h1>Materjali lisamine</h1>

<form method="POST" action="/addmaterial">
    <input type="submit">
    <input name="material_name">
</form>

<?php if(!empty($materials)) : foreach ($materials as $material):?>
    <li><?php echo $material->name; ?></li>
<?php endforeach; endif;?>

<?php require('partials/footer.php'); ?>