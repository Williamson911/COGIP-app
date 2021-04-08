<?php require 'includes/headerAdmin.php' ?>


<section class="page-section bg-light">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Create a new company</h2>
        </div>


<form action="" method="POST">
    <div class="row align-items-stretch mb-5">
    <div class="col-md-6">
    <div class="form-group">
    <label>Company name</label>
    <input id="companyName" name="companyName" type="text" required="required">
    </div>>
        <div class="form-group">
    <label>VAT number</label>
    <input id="VATNumber" name="VATNumber" type="text" required="required">
        </div>
        <div class="form-group">
    <label>Country</label>
    <input id="country" name="country" type="text" required="required">
        </div>
        <div class="form-group">
    <label>Company type</label>
    <select name="companyType" id="companyType" required="required">
        <option value="Client">Client</option>
        <option value="Provider">Provider</option>
    </select>
        </div>
    <button type="submit" name="createNewCompany">Submit</button>
    <button><a href="/index.php?page=admin">Cancel</a></button>
    </div>
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
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    </body>
    </html>
<?php require 'includes/footer.php' ?>