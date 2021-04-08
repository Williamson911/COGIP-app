<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>COGIP</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">

<!-- Navigation-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/View/includes/nav.php'); ?>
<!-- Masthead-->
<header class="masthead homepage">
    <div class="container">
        <div class="masthead-heading text-uppercase">Welcome To The COGIP!</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#lastinvoices">Tell Me More</a>
    </div>
</header>
<section class="page-section bg-light" id="lastinvoices">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Bonjour!</h2>
            <h2 class="section-heading text-uppercase">Last Invoices</h2>
        </div>
        <div>
            <table>
                <tr>
                    <th>Invoice Number</th>
                    <th>Dates</th>
                    <th>Company</th>
                </tr>
                <tr>
                    <td class="pr-2"><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
                            <p><?php echo $invoice['InvoiceNumber']?></p><?php } ?>
                    </td>
                    <td class="pr-2"><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
                            <p><?php echo $invoice['InvoiceDate']?></p><?php } ?>
                    </td>
                    <td class="pr-2"><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
                            <p><?php echo $invoice['Name']?></p><?php } ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>
<!-- Companies -->
<section class="page-section bg-light" id="lastcompanies">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"Last Companies</h2>
        </div>
        <div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>VAT</th>
                    <th>Country</th>
                    <th>Type</th>
                </tr>
                <tr>
                    <td class="pr-2"><?php foreach ($companies->getCompanies() as $key => $company) { ?>
                            <p><?php echo $company['Name']?></p><?php } ?>
                    </td>
                    <td class="pr-2"><?php foreach ($companies->getCompanies() as $key => $company) { ?>
                            <p><?php echo $company['VATNumber']?></p><?php } ?>
                    </td>
                    <td class="pr-2"><?php foreach ($companies->getCompanies() as $key => $company) { ?>
                            <p><?php echo $company['Country']?></p><?php } ?>
                    </td>
                    <td><?php foreach ($companies->getCompanies() as $key => $company) { ?>
                            <p><?php echo $company['Type']?></p><?php } ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>

<!-- Contact-->
<section class="page-section" id="lastcontacts">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Last Contacts</h2>
        </div>
        <div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>e-mail</th>
                    <th>Company</th>
                </tr>
                <tr>
                    <td class="pl-2"><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
                            <p><?php echo $contact['FirstName'] . ' ' . $contact['LastName']?></p><?php } ?>
                    </td>
                    <td class="pl-2"><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
                            <p><?php echo $contact['Email']?></p><?php } ?>
                    </td>
                    <td class="pl-2"><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
                            <p><?php echo $contact['CompanyName']?></p><?php } ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>
<!-- Footer-->

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
