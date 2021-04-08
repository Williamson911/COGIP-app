<?php require 'includes/headerAdmin.php' ?>


<section>Create a new contact</section>

<form action="" method="POST">
    <label>Lastname</label>
    <input id="lastname" name="lastname" type="text" required="required">
    <br>
    <label>Firstname</label>
    <input id="firstname" name="firstname" type="text" required="required">
    <br>
    <label>Email</label>
    <input id="email" name="email" type="email" required="required">
    <br>
    <label>Company</label>
    <select name="company" id="company" required="required">
        <?php foreach ($admin->getCompanies() as $key => $company) { ?>
            <option value="<?php echo $company['Name'] ?>"><?php echo $company['Name'] ?></option>
        <?php } ?>
    </select>
    <br>
    <button type="submit" name="createNewContact">Submit</button>
    <button><a href="/admin">Cancel</a></button>
</form>