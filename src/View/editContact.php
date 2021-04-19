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
    <label>Firstname</label>
    <input id="firstname" name="firstname" type="text" required="required" value="<?= $detailContact['FirstName'] ?>">
            </div>
            <div class="form-group">
    <label>Lastname</label>
    <input id="lastname" name="lastname" type="text" required="required" value="<?= $detailContact['LastName'] ?>">
            </div>
            <div class="form-group">
    <label>Email</label>
    <input id="email" name="email" type="email" required="required" value="<?= $detailContact['Email'] ?>">
            </div>
            <div class="form-group">
    <label>Company</label>
    <select name="company" id="company" required="required">
        <?php foreach ($admin->getCompanies() as $key => $company) : ?>
            <option value="<?= $company['Name'] ?>" <?php if ($company['Name'] == $detailContact['CompanyName']) {
                                                        echo 'selected';
                                                    } ?>><?= $company['Name'] ?></option>
        <?php endforeach ?>
    </select>
            </div>
        </div>
            <div class="text-center">
    <button class="btn btn-primary btn-xl text-uppercase" type="submit" name="editContact">Submit</button>
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