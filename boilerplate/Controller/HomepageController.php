<?php
declare(strict_types = 1);

use Becode\MVCBoilerplate\model\CompaniesManager;

require_once('./Model/CompaniesManager.php');

class CompaniesController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST) 
    {

        //this is just example code, you can remove the line below
        $companies = new CompaniesManager();

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require('./View/homepage.php');
    }
}

