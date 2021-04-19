<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="https://i.ibb.co/7Rh7NNg/24b99a4eedf226ba.png" alt="cogip" border="0" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/invoices">Invoices</a></li>
                <li class="nav-item"><a class="nav-link" href="/companies">Companies</a></li>
                <li class="nav-item"><a class="nav-link" href="/contacts">Contacts</a></li>

                <?php if (!isset($_SESSION['username']) && !isset($_SESSION['userId']) && !isset($_SESSION['role'])) : ?>
                    <li class="nav-item"><a class="nav-link" href="/login">Connexion</a></li>
                <?php endif ?>
                <?php if (isset($_SESSION['username']) && isset($_SESSION['userId']) && isset($_SESSION['role'])) : ?>
                    <li class="nav-item"><a class="nav-link" href="/login">Admin</a></li>
                    <form action="" method="POST">
                        <button class="btn btn-danger btn-s text-uppercase" type="submit" name="deconnexion">Log out</button>
                    </form>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>