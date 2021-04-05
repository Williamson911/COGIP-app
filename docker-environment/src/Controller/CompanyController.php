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

        if (isset($_GET['1'])) {
            if (ctype_digit($_GET['1'])) {
                $detailCompanies = $companies->getDetails($_GET['1']);
                $employees = $companies->getEmployees($_GET['1']);
                $invoices = $companies->getInvoices($_GET['1']);
                $view = './View/detailCompany.php';
            } else {
                $view = './View/error404.php';
            }
        }

        //load the view
        require $view;
    }
}