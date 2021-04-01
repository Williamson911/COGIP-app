<?php

declare(strict_types=1);

require_once('Manager.php');

class ContactManager extends Manager
{
    public function getContact()
    {
        $db = $this->connectDb();

        $req = $db->query('SELECT FirstName, LastName, CompanyName, Email, Id
            FROM People
            ORDER BY LastName');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDetails($Id)
    {
        
        $db = $this->connectDb();

        $req = $db->prepare('SELECT FirstName, LastName, Email, CompanyName
            FROM People
            WHERE Id = :Id');

        $req->execute(['Id'=>$Id]);

        $result = $req->fetch();

        return $result;
    }

    public function getInvoices($Id)
    {
        $db = $this->connectDb();

        $req = $db->prepare('SELECT InvoiceNumber, InvoiceDate
            FROM Invoices i
            INNER JOIN People p
            ON i.ClientId = p.Id
            WHERE p.Id = :Id
            ORDER BY InvoiceDate DESC');

        $req->execute(['Id'=>$Id]);

        $result = $req->fetchAll();

        return $result;
    }

}