<?php

declare(strict_types=1);

require_once('./Model/ContactManager.php');

class ContactController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {

        $contacts = new ContactManager();

        $view = './View/contacts.php';

        if (isset($_GET['id'])) {
            if (ctype_digit($_GET['id'])) {
                $detailContact = $contacts->getDetails($_GET['id']);
                $invoices = $contacts->getInvoices($_GET['id']);
                $view = './View/detailContact.php';
            } else {
                $view = './View/error404.php';
            }
        }

        //load the view
        require $view;
    }
}
