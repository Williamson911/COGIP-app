<?php
declare(strict_types = 1);

require_once('./Model/CompanyManager.php');

class CompanyController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {
     
        global $url;        
            $companies = new CompanyManager();
            $view = './View/companies.php';

            if (isset($url[1])) {
                if (ctype_digit($url[1])) {
                    $detailCompanies = $companies->getDetails($url[1]);
                    $employees = $companies->getEmployees($url[1]);
                    $invoices = $companies->getInvoices($url[1]);
                    $view =   $_SERVER['DOCUMENT_ROOT'] . '/View/detailCompany.php';
                } else {
                    $view = '/View/error404.php';
        }
    }

        //load the view
        require $view;
    }
}