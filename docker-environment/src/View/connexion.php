<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Becode - Boiler plate MVC</title>
</head>
<body>
    <header>
        <h1>Welcome to the COGIP!</h1>
    </header>
    <main>
        <h2>Log in</h2>
        <form action="index.php?page=admin" method="POST">
            <label>Username</label>
            <input id="username" name="username" type="text" required="required">
            <br>
            <label>Password</label>
            <input id="password" name="password" type="password" required="required">
            <br>
            <button type="submit" name="submit">Log in</button>
            <button><a href="/index.php">Cancel</a></button>
        </form>
    </main>

<?php require 'includes/footer.php'?>