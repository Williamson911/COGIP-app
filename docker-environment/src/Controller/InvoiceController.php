<?php

declare(strict_types=1);

require_once('./Model/InvoiceManager.php');

class InvoiceController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {       
        global $url;

        $invoices = new InvoiceManager();

        $view = './View/invoices.php';

        if (isset($url[1])) {
            if (ctype_digit($url['1'])) {
                $detailInvoice = $invoices->getDetails($url[1]); //renvoi vers la fonction mySql qui est dans modèle.
                $view =   $_SERVER['DOCUMENT_ROOT'] . '/View/detailInvoice.php';
            } else {
                $view = '/View/error404.php';
            }
        }

        //load the view
        require $view;
    }
}
