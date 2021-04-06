<?php

declare(strict_types=1);

require_once('Manager.php');

class InvoiceManager extends Manager
{
    public function getInvoice()
    {
        
        $db = $this->connectDb();

        $req = $db->query('SELECT i.Id, InvoiceNumber, InvoiceDate, Name, Type 
            FROM Invoices i
            INNER JOIN Companies c
            ON i.CompanyId = c.Id
            ORDER BY InvoiceDate DESC');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDetails($Id)
    {
        $db = $this->connectDb();
    
            $req = $db->prepare('SELECT i.Id, InvoiceNumber, Name, VATNumber, Type, FirstName, LastName, Email
                FROM ((Invoices i
                INNER JOIN Companies c
                ON i.CompanyId = c.Id)
                INNER JOIN People p
                ON i.ClientId = p.Id)
                WHERE i.Id = :Id');
    
            $req->execute(['Id'=>$Id]);
    
            $result = $req->fetch();
    
            return $result;
    }
}