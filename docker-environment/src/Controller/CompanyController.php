<?php
declare(strict_types = 1);

require_once('./Model/CompaniesManager.php');


class CompanyController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        header('Location: ./View/single-company.php?company_id=' . $id);
    }
}