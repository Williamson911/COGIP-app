<?php
declare(strict_types = 1);

require_once('./Model/CompanyManager.php');

class ClientController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {

        $clients = new CompanyManager();

        //load the view
        require './View/clients.php';
    }
}