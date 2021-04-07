<?php require 'includes/headerAdmin.php' ?>


<section>Edit a contact</section>

<form action="" method="POST">
    <label>Firstname</label>
    <input id="firstname" name="firstname" type="text" required="required" value="<?= $detailContact['FirstName'] ?>">
    <br>
    <label>Lastname</label>
    <input id="lastname" name="lastname" type="text" required="required" value="<?= $detailContact['LastName'] ?>">
    <br>
    <label>Email</label>
    <input id="email" name="email" type="email" required="required" value="<?= $detailContact['Email'] ?>">
    <br>
    <label>Company</label>
    <select name="company" id="company" required="required">
        <?php foreach ($admin->getCompanies() as $key => $company) : ?>
            <option value="<?= $company['Name'] ?>" <?php if ($company['Name'] == $detailContact['CompanyName']) {
                                                        echo 'selected';
                                                    } ?>><?= $company['Name'] ?></option>
        <?php endforeach ?>
    </select>
    <br>
    <button type="submit" name="editContact">Submit</button>
    <button><a href="/index.php?page=admin">Cancel</a></button>
</form>