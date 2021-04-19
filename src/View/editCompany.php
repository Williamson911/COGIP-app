<?php require 'includes/headerAdmin.php' ?>


<section class="page-section bg-light">
    <div class="container">
        <div class="text-center">
    <h2 class="section-heading text-uppercase">Edit a contact</h2>
        </div>

<form action="" method="POST">
    <div class="row align-items-stretch mb-5">
        <div class="col-md-6">
            <div class="form-group">
    <label>Name</label>
    <input id="Name" name="Name" type="text" required="required" value="<?= $detailCompanies['Name'] ?>">
            </div>
            <div class="form-group">
    <label>Country</label>
    <input id="Country" name="Country" type="text" required="required" value="<?= $detailCompanies['Country'] ?>">
            </div>
            <div class="form-group">
    <label>Company type</label>
    <select name="Type" id="Type" required="required">
        <option value="Client">Client</option>
        <option value="Provider">Provider</option>
    </select>
            </div>
            <div class="form-group">
    <label>VAT number</label>
    <input name="VATNumber" id="VATNumber" type="text" required="required" value="<?= $detailCompanies['VATNumber'] ?>">
            </div>
        </div>
        <div class="text-center">
    <button class="btn btn-primary btn-xl text-uppercase" type="submit" name="editCompany">Submit</button>
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
    <!-- Contact form JS-->
    <!-- <script src="assets/mail/jqBootstrapValidation.js"></script> -->
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    </body>
    </html>
<?php require 'includes/footer.php' ?>