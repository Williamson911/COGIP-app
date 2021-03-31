<?php

declare(strict_types=1);

require_once('Manager.php');

class InvoiceManager extends Manager
{
    public function getInvoice()
    {
        
        $db = $this->connectDb();

        $req = $db->query('SELECT InvoiceNumber, InvoiceDate, Name, Type 
            FROM Invoices i
            INNER JOIN Companies c
            ON i.CompanyId = c.Id
            ORDER BY InvoiceDate DESC');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}