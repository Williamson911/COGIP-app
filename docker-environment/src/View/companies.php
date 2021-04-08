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
<header class="masthead companies">
    <div class="container">
        <div class="masthead-heading text-uppercase">Companies Directory</div>
    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#companies">Tell Me More</a>
    </div>
</header>

<!-- Contact -->
<section class="page-section bg-light" id="companies">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">COGIP : List of Companies</h2>
        </div>
        <div>
            <h2>Companies</h2>

            <h3>Clients</h3>

            <table>
                <tr>
                    <th>Name</th>
                    <th>VAT</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td class="pl-2">
                        <?php foreach ($companies->getClients() as $key => $client) { ?>
                            <p><a href="/companies/<?=$client['Id']?>"><?= $client['Name']?></a></p><?php } ?>
                    </td>
                    <td class="pl-2">
                        <?php foreach ($companies->getClients() as $key => $client) { ?>
                            <p><?php echo $client['VATNumber']?></p><?php } ?>
                    </td>
                    <td class="pl-2">
                        <?php foreach ($companies->getClients() as $key => $client) { ?>
                            <p><?php echo $client['Country']?></p><?php } ?>
                    </td>
                </tr>
            </table>

            <h3>Suppliers</h3>

            <table>
                <tr>
                    <th>Name</th>
                    <th>VAT</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td class="pr-2">
                        <?php foreach ($companies->getProviders() as $key => $provider) { ?>
                            <p><a href="/companies/<?=$provider['Id']?>"><?= $provider['Name']?></a></p><?php } ?>
                    </td>
                    <td class="pr-2">
                        <?php foreach ($companies->getProviders() as $key => $provider) { ?>
                            <p><?php echo $provider['VATNumber']?></p><?php } ?>
                    </td>
                    <td>
                        <?php foreach ($companies->getProviders() as $key => $provider) { ?>
                            <p><?php echo $provider['Country']?></p><?php } ?>
                    </td>
                </tr>
            </table>
        </div>
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

