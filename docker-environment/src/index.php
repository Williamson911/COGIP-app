<?php
declare(strict_types=1);


$url = '';
if (isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/CompanyController.php';
require 'Controller/InvoiceController.php';
require 'Controller/ContactController.php';
require 'Controller/ProvidersController.php';
require 'Controller/ClientController.php';

//Your index is your Router. You could write a simple IF here based on some $_GET or $_POST vars, to choose your controller

$controller = new HomepageController();


if (isset($url[0]) && $url[0] === 'companies') {
    $controller = new CompanyController();
} elseif (isset($url[0]) && $url[0] === 'invoices') {
    $controller = new InvoiceController();
} elseif (isset($url[0]) && $url[0] === 'contacts') {
    $controller = new ContactController();
} elseif (isset($url[0]) && $url[0] === 'providers') {
    $controller = new ProviderController();
} elseif (isset($url[0]) && $url[0] === 'clients') {
    $controller = new ClientController();
}

$controller->render();
