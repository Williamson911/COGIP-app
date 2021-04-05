<?php
declare(strict_types = 1);

require_once('./Model/CompanyManager.php');

class ClientController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {
        
        $clients = new CompanyManager();

        $view = './View/clients.php';

        if (isset($_GET['id'])) {
            if (ctype_digit($_GET['id'])) {
                $detailCompanies = $clients->getDetails($_GET['id']);
                $employees = $clients->getEmployees($_GET['id']);
                $invoices = $clients->getInvoices($_GET['id']);
                $view = './View/detailCompany.php';
            } else {
                $view = './View/error404.php';
            }
        }

        //load the view
        require $view;
    }
}