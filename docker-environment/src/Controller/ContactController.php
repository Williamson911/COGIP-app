<?php
declare(strict_types = 1);

require_once('./Model/ContactManager.php');

class ContactController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {

        $contacts = new ContactManager();

        //load the view
        require './View/contacts.php';
    }
}