<?php require 'includes/headerAdmin.php'?>


<section>Create a new company</section>

<form action="" method="POST">
    <label>Company name</label>
    <input id="companyName" name="companyName" type="text" required="required">
    <br>
    <label>VAT number</label>
    <input id="VATNumber" name="VATNumber" type="text" required="required">
    <br>
    <label>Country</label>
    <input id="country" name="country" type="text" required="required">
    <br>
    <label>Company type</label>
    <select name="companyType" id="companyType" required="required">
        <option value="Client">Client</option>
        <option value="Provider">Provider</option>
    </select>
    <br>
    <button type="submit" name="createNewCompany">Submit</button>
    <button><a href="/index.php?page=admin">Cancel</a></button>
</form>