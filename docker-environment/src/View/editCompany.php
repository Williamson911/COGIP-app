<?php require 'includes/headerAdmin.php' ?>


<section>Edit a contact</section>

<form action="" method="POST">
    <label>Name</label>
    <input id="Name" name="Name" type="text" required="required" value="<?= $detailCompanies['Name'] ?>">
    <br>
    <label>Country</label>
    <input id="Country" name="Country" type="text" required="required" value="<?= $detailCompanies['Country'] ?>">
    <br>
    <label>Company type</label>
    <select name="Type" id="Type" required="required">
        <option value="Client">Client</option>
        <option value="Provider">Provider</option>
    </select>
    <label>VAT number</label>
    <input name="VATNumber" id="VATNumber" type="text" required="required" value="<?= $detailCompanies['VATNumber'] ?>">
    <br>
    <button type="submit" name="editCompany">Submit</button>
    <button><a href="/index.php?page=admin">Cancel</a></button>
</form>