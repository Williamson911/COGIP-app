<?php
declare(strict_types = 1);

require_once('./Model/ContactManager.php');

class ContactController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {
        global $url;
        $contacts = new ContactManager();

        $view = './View/contacts.php';

        if (isset($url[1])) {
            if (ctype_digit($url[1])) {
                $detailContact = $contacts->getDetails($url[1]);
                $invoices = $contacts->getInvoices($url[1]);
                $view = $_SERVER['DOCUMENT_ROOT'] . '/View/detailContact.php';
            } else {
                $view = './View/error404.php';
            }
        }

        //load the view
        require $view;
    }
}