<?php

declare(strict_types=1);

require_once('./Model/HomepageManager.php');

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {

        $invoices = new HomeInvoicesManager();

        $contacts = new HomeContactsManager();

        $companies = new HomeCompaniesManager();

        //load the view
        require('./View/homepage.php');
    }
}
