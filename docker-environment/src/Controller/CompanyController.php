<?php
declare(strict_types = 1);

require_once('./Model/CompanyManager.php');

class CompanyController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {

        $companies = new CompanyManager();

        $view = './View/companies.php';

        if (isset($_GET['id'])) {
            if (ctype_digit($_GET['id'])) {
                $detailCompanies = $companies->getDetails($_GET['id']);
                $employees = $companies->getEmployees($_GET['id']);
                $invoices = $companies->getInvoices($_GET['id']);
                $view = './View/detailCompany.php';
            } else {
                $view = './View/error404.php';
            }
        }

        //load the view
        require $view;
    }
}