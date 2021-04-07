<?php require 'includes/headerAdmin.php' ?>


<section>Create a new contact</section>

<form action="" method="POST">
    <label>Invoice number</label>
    <input id="invoiceNumber" name="invoiceNumber" type="text" required="required" value="<?= $detailInvoice['InvoiceNumber'] ?>">
    <br>
    <label>Date</label>
    <input id="date" name="date" type="date" required="required" value="<?= $detailInvoice['InvoiceDate'] ?>">
    <br>
    <label>Contact person regarding the invoice</label>
    <select name="contact" id="contact" required="required">
        <?php foreach ($admin->getContacts() as $key => $contact) : ?>
            <option value="<?= $contact['contactId'] . ' ' . $contact['companyId'] ?>" <?php if ($contact['contactId'] == $detailInvoice['contact']) {
                                                                                            echo 'selected';
                                                                                        } ?>><?= $contact['CompanyName'] . ' | ' . $contact['FirstName'] . ' ' . $contact['LastName'] ?></option>
        <?php endforeach ?>
    </select>
    <br>
    <button type="submit" name="editInvoice">Submit</button>
    <button><a href="/index.php?page=admin">Cancel</a></button>
</form>