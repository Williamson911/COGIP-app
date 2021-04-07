<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COGIP</title>
</head>

<body>
    <header>
        <h1>Welcome to the COGIP!</h1>
            <a href="/">Home</a>
            <a href="/companies">Companies</a>
            <a href="/invoices">Invoices</a>
            <a href="/contacts">Contacts</a>
            <a href="/providers">Providers</a>
            <a href="/clients">Clients</a>

        <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href="/index.php?page=companies">Companies</a></li>
            <li><a href="/index.php?page=invoices">Invoices</a></li>
            <li><a href="/index.php?page=contacts">Contacts</a></li>
            <?php if (!isset($_SESSION['username']) && !isset($_SESSION['userId']) && !isset($_SESSION['role'])) : ?>
            <li><a href="/login">Connexion</a></li>
            <?php endif ?>
        </ul>
    </header>