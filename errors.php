
<?php $error=""; if (isset($errors)): ?>

    <div class="error">
        <?php foreach ($errors as $error) ?>
            <p><?php echo $error ; ?></p>
    </div>
<?php endif ;?>

