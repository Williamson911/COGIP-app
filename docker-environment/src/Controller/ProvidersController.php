<?php
declare(strict_types = 1);

require_once('./Model/CompanyManager.php');

class ProviderController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {

        $providers = new CompanyManager();

        $view = './View/providers.php';

        if (isset($_GET['id'])) {
            if (ctype_digit($_GET['id'])) {
                $detailCompanies = $providers->getDetails($_GET['id']);
                $employees = $providers->getEmployees($_GET['id']);
                $invoices = $providers->getInvoices($_GET['id']);
                $view = './View/detailCompany.php';
            } else {
                $view = './View/error404.php';
            }
        }

        //load the view
        require $view;
    }
}