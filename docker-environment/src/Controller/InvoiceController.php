<?php

declare(strict_types=1);

require_once('./Model/InvoiceManager.php');

class InvoiceController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {

        $invoices = new InvoiceManager();

        $view = './View/invoices.php';

        if (isset($_GET['id'])) {
            if (ctype_digit($_GET['id'])) {
                $detailInvoice = $invoices->getDetails($_GET['id']);
                $view = './View/detailInvoice.php';
            } else {
                $view = './View/error404.php';
            }
        }

        //load the view
        require $view;
    }
}
