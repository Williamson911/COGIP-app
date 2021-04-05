<?php
declare(strict_types = 1);

require_once('./Model/CompanyManager.php');

class ClientController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {
       global $url;
        $clients = new CompanyManager();

        $view = './View/clients.php';

        if (isset($url[1])) {
            if (ctype_digit($url[1])) {
                $detailCompanies = $clients->getDetails($url[1]);
                $employees = $clients->getEmployees($url[1]);
                $invoices = $clients->getInvoices($url[1]);
                $view =   $_SERVER['DOCUMENT_ROOT'] . '/View/detailCompany.php';
            } else {
                $view = './View/error404.php';
            }
        }

        //load the view
        require $view;
    }
}