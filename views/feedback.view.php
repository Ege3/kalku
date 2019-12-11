<?php require('partials/head.php'); ?>

    <h1>Feedback</h1>
<form method="post" action="/add-feedback">
    <input type="text" name="subject" placeholder="Add Subject" class="form-control">
    <textarea name="body" class="form-control"></textarea>
    <button class="btn btn-success" name="action" value="send">Send</button>
</form>

<?php if(!empty($feedback)) : foreach ($feedback as $feedb):?>
    <li><?php echo $feedb->subject; ?></li>
    <li><?php echo $feedb->body; ?></li>
<?php endforeach; endif; ?>

<?php require('partials/footer.php'); ?>