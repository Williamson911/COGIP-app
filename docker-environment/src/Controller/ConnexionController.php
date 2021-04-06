<?php
declare(strict_types = 1);

require_once('./Model/ConnexionManager.php');
require_once('./Model/HomepageManager.php');

class ConnexionController
{

    public function render()
    {
  
        $invoices = new HomeInvoicesManager();

        $contacts = new HomeContactsManager();
    
        $companies = new HomeCompaniesManager();

        $connexion = new ConnexionManager();

        $delete = new DeletionManager();

        if (isset($_SESSION['username']) && isset($_SESSION['userId']) && isset($_SESSION['role'])) {
            $view = './View/admin.php';

            if (isset($_POST['delete-invoice'])) {
                $delInvoice = $delete->deleteInvoice($_POST['id-invoice']);
            }

            if (isset($_POST['delete-contact'])) {
                $delContact = $delete->deleteContact($_POST['id-people']);
            }

            if (isset($_POST['delete-company'])) {
                $delCompany = $delete->deleteCompany($_POST['id-company']);
            }

        } else {
            $view = './View/connexion.php';

            if (isset($_POST['username']) && isset($_POST['password'])) {
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $checkPerson = $connexion->getLogin($_POST['username']);


                if (password_verify($_POST['password'], $checkPerson['Password'])) {
                    $_SESSION['username'] = $checkPerson['Username'];
                    $_SESSION['userId'] = $checkPerson['Id'];
                    $_SESSION['role'] = $checkPerson['Role'];
                    header('Location: index.php?page=admin');
                }
            }
        }

        require $view;
    }
}