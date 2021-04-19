<?php require 'includes/headerAdmin.php' ?>

<section class="page-section bg-light">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Edit invoice</h2>
        </div>
        <form action="" method="POST">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Invoice number</label>
                        <input id="invoiceNumber" name="invoiceNumber" type="text" required="required" value="<?= $detailInvoice['InvoiceNumber'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input id="date" name="date" type="date" required="required" value="<?= $detailInvoice['InvoiceDate'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Contact person regarding the invoice</label>
                        <select name="contact" id="contact" required="required">
                            <?php foreach ($admin->getContacts() as $key => $contact) : ?>
                                <option value="<?= $contact['contactId'] . ' ' . $contact['companyId'] ?>" <?php if ($contact['contactId'] == $detailInvoice['contact']) {
                                                                                                                echo 'selected';
                                                                                                            } ?>><?= $contact['CompanyName'] . ' | ' . $contact['FirstName'] . ' ' . $contact['LastName'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-xl text-uppercase" type="submit" name="editInvoice">Submit</button>
                    <button class="btn btn-danger btn-xl text-uppercase"><a href="/index.php?page=admin">Cancel</a></button>
                </div>
        </form>
    </div>

</section>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- <script src="assets/mail/contact_me.js"></script> -->
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>
</body>

</html>
<?php require 'includes/footer.php' ?>