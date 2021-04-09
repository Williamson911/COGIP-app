<!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>COGIP</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/View/includes/nav.php'); ?> <!--import du code nav dans ma page $_SERVER['DOCUMENT_ROOT= pour le savoir var_dum $_SERVER[document root]'] permet de prendre le chemin complet(les dossier de l'emplacement de la racine du serveur- )--> 


<!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="https://i.ibb.co/7Rh7NNg/24b99a4eedf226ba.png" alt="cogip" border="0" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html#portfolio">Invoices</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html#about">Companies</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html#contact">Contacts</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/login">Connexion</a></li>
            </ul>
        </div>
    </div>
</nav> -->
<!-- Masthead-->
<header class="masthead login">
    <div class="container">
        <div class="masthead-heading text-uppercase">Welcome To The COGIP!</div>
    </div>
</header>

<!-- Form-->
<section class="page-section" id="connect">
    <div class="container">
        <div class="text-center">
            <h3 class="section-subheading text-muted">Bienvenue dans l'espace de connexion de la COGIP</h3>
        </div>
        <form action="/login" id="contactForm" name="sentMessage" novalidate="novalidate" method="POST">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username</label>
                        <input id="username" name="username" type="text" required="required">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input id="password" name="password" type="password" required="required">
                        <p class="help-block text-danger"></p>
                    </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" name="submit">Login</button>
                <button class="btn btn-danger btn-xl text-uppercase"><a href="/index.php">Cancel</a></button>
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