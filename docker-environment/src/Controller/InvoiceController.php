<?php
declare(strict_types = 1);

require_once('./Model/InvoiceManager.php');

class InvoiceController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {

        $invoices = new InvoiceManager();

        //load the view
        require './View/invoices.php';
    }
}