<?php
declare(strict_types = 1);

require_once('./Model/AdminManager.php');

class AdminController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {

        $creation = new CreationManager();

        if (isset($_SESSION['username']) && isset($_SESSION['userId']) && isset($_SESSION['role']) && $_SESSION['role'] == 'Admin') {
            if (isset($_GET['page']) && $_GET['page'] === 'newcontact') {
                $view = './View/newContact.php';
    
                if (isset($_POST['createNewContact'])) {
                    $newContact = $creation->newContact($_POST['firstname'], $_POST['lastname'], $_POST['company'], $_POST['email']);
                    header('Location: index.php?page=admin');
                }
            } elseif (isset($_GET['page']) && $_GET['page'] === 'newcompany') {
                $view = './View/newCompany.php';

                if (isset($_POST['createNewCompany'])) {
                    $newCompany = $creation->newCompany($_POST['companyName'], $_POST['VATNumber'], $_POST['country'], $_POST['companyType']);
                    header('Location: index.php?page=admin');
                }
            } elseif (isset($_GET['page']) && $_GET['page'] === 'newinvoice') {
                $view = './View/newInvoice.php';

                if (isset($_POST['createNewInvoice'])) {
                    $allInfos = explode(" ",$_POST['contact']);
                    $contactId = $allInfos[0];
                    $companyId = $allInfos[1];

                    $newInvoice = $creation->newInvoice($_POST['invoiceNumber'], $_POST['date'], $contactId, $companyId);
                    header('Location: index.php?page=admin');
                }
            } else {
                $view = './View/error404.php';
            }
        } else {
            $view = './View/error404.php';
        }

        //load the view
        require $view;
    }
}