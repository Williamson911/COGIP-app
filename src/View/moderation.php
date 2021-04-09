<?php require 'includes/headerAdmin.php' ?>

<section>
    <?php foreach ($moderation->getModos() as $key => $modo) : ?>
        <p><?= $modo['Username'] ?></p>
        <form action="" method="POST">
            <select name="Role" id="Role" required="required">
                <option value="Admin">Admin</option>
                <option value="Moderator">Moderator</option>
            </select>
            <input type="hidden" name="id" id="id" value="<? $modo['Id']?>">
            <button type="submit" name="editAdmin">Submit</button>
        </form>
    <?php endforeach ?>
</section>

<?php require 'includes/footer.php' ?>