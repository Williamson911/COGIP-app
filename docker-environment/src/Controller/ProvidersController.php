<?php
declare(strict_types = 1);

require_once('./Model/CompanyManager.php');

class ProviderController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {

        $providers = new CompanyManager();

        //load the view
        require './View/providers.php';
    }
}