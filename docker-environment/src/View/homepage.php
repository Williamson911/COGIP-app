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
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="https://i.ibb.co/7Rh7NNg/24b99a4eedf226ba.png" alt="cogip" border="0" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#invoices">Invoices</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#companies">Companies</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contacts">Contacts</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Connexion</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-heading text-uppercase">Welcome To The COGIP!</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#home">Tell Me More</a>
    </div>
</header>
<!-- Home-->
<section class="page-section" id="home">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Bonjour!</h2>
        </div>
        <div class="row text-center">

            <div class="col-md-3">
                <h3> Last Invoice :</h3>
            </div>

            <div class="col-md-3">
                <h3> Last Contacts :</h3>
            </div>

            <div class="col-md-3">
                <h3> Last Companies :</h3>
            </div>
        </div>
    </div>
</section>
<!-- Invoices -->
<section class="page-section bg-light" id="invoices">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">COGIP : List of Invoices</h2>
        </div>
        <div>
            <table>
                <tr>
                    <th>Invoice Number</th>
                    <th>Dates</th>
                    <th>Company</th>
                </tr>
                <tr>
                    <td><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
                            <p><?php echo $invoice['InvoiceNumber']?></p><?php } ?>
                    </td>
                    <td><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
                            <p><?php echo $invoice['InvoiceDate']?></p><?php } ?>
                    </td>
                    <td><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
                            <p><?php echo $invoice['Name']?></p><?php } ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>
<!-- Companies -->
<section class="page-section" id="companies">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">COGIP : Companies Directory</h2>
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
                    <td><?php foreach ($companies->getCompanies() as $key => $company) { ?>
                            <p><?php echo $company['Name']?></p><?php } ?>
                    </td>
                    <td><?php foreach ($companies->getCompanies() as $key => $company) { ?>
                            <p><?php echo $company['VATNumber']?></p><?php } ?>
                    </td>
                    <td><?php foreach ($companies->getCompanies() as $key => $company) { ?>
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
<section class="page-section" id="contacts">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Directory</h2>
        </div>
        <div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>e-mail</th>
                    <th>Company</th>
                </tr>
                <tr>
                    <td><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
                            <p><?php echo $contact['FirstName'] . ' ' . $contact['LastName']?></p><?php } ?>
                    </td>
                    <td><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
                            <p><?php echo $contact['Email']?></p><?php } ?>
                    </td>
                    <td><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
                            <p><?php echo $contact['CompanyName']?></p><?php } ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © COGIP <?php echo date('Y')?></div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
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




<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>



</section>