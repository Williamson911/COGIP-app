<?php
declare(strict_types=1);


//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/CompanyController.php';
require 'Controller/InvoiceController.php';
require 'Controller/ContactController.php';
require 'Controller/ProvidersController.php';
require 'Controller/ClientController.php';

//Your index is your Router. You could write a simple IF here based on some $_GET or $_POST vars, to choose your controller

$controller = new HomepageController();

if(isset($_GET[1]) && $_GET['1'] === 'companies') {
    $controller = new CompanyController();
} elseif(isset($_GET['1']) && $_GET['1'] === 'invoices') {
    $controller = new InvoiceController();
} elseif(isset($_GET['1']) && $_GET['1'] === 'contacts') {
    $controller = new ContactController();
} elseif(isset($_GET['1']) && $_GET['1'] === 'providers') {
    $controller = new ProviderController();
} elseif(isset($_GET['1']) && $_GET['1'] === 'clients') {
    $controller = new ClientController();
}

$controller->render();
