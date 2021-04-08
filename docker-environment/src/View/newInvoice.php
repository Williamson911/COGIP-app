<?php require 'includes/headerAdmin.php' ?>

<section class="page-section bg-light">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Create a new invoice</h2>
        </div>

<form action="" method="POST">
    <div class="row align-items-stretch mb-5">
        <div class="col-md-6">
            <div class="form-group">
    <label>Invoice number</label>
    <input id="invoiceNumber" name="invoiceNumber" type="text" required="required">
            </div>
            <div class="form-group">
    <label>Date</label>
    <input id="date" name="date" type="date" required="required" value"">
            </div>
            <div class="form-group">
    <label>Contact person regarding the invoice</label>
    <select name="contact" id="contact" required="required">
        <?php foreach ($admin->getContacts() as $key => $contact) : ?>
            <option value="<?= $contact['contactId'] . ' ' . $contact['companyId'] ?>"><?= $contact['CompanyName'] . ' | ' . $contact['FirstName'] . ' ' . $contact['LastName'] ?></option>
        <?php endforeach ?>
    </select>
            </div>
    <button class="btn btn-primary btn-xl text-uppercase" type="submit" name="createNewInvoice">Submit</button>
    <button class="btn btn-danger btn-xl text-uppercase"><a href="/index.php?page=admin">Cancel</a></button>
        </div>
    </div>
</form>
    </div>
</section>

