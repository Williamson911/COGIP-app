<?php

declare(strict_types=1);

//include all your model files here
require 'Model/CompaniesManager.php';
//include all your controllers here
require 'Controller/HomepageController.php';

//Your index is your Router. You could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
require 'routeur/config.php';
$controller = new HomepageController();

// if(isset($_GET['company']) && $_GET['company'] === 'company') {
//     $controller = new CompanyController();
// }


$controller->render();
// ($_GET, $_POST);