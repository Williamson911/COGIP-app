<?php

declare(strict_types=1);

require_once('Manager.php');

class CompanyManager extends Manager
{
    public function getClients()
    {

        $db = $this->connectDb();

        $req = $db->query('SELECT Name, Country, VATNumber, Id
            FROM Companies
            WHERE Type="Client"
            ORDER BY Name');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProviders()
    {

        $db = $this->connectDb();

        $req = $db->query('SELECT Name, Country, VATNumber, Id
            FROM Companies
            WHERE Type="Provider"
            ORDER BY Name');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDetails($Id)
    {

        $db = $this->connectDb();

        $req = $db->prepare('SELECT Name, Country, VATNumber, Id, Type
            FROM Companies
            WHERE Id = :Id');

        $req->execute(['Id' => $Id]);

        $result = $req->fetch();

        return $result;
    }

    public function getEmployees($Id)
    {
        $db = $this->connectDb();

        $req = $db->prepare('SELECT FirstName, LastName, Email
            FROM People p
            INNER JOIN Companies c
            ON p.CompanyName = c.Name
            WHERE c.Id = :Id
            ORDER BY LastName');

        $req->execute(['Id' => $Id]);

        $result = $req->fetchAll();

        return $result;
    }

    public function getInvoices($Id)
    {
        $db = $this->connectDb();

        $req = $db->prepare('SELECT InvoiceNumber, InvoiceDate, FirstName, LastName
            FROM ((Invoices i
            INNER JOIN People p
            ON i.ClientId = p.Id)
            INNER JOIN Companies c
            ON i.CompanyId = c.Id)
            WHERE c.Id = :Id
            ORDER BY InvoiceDate DESC');

        $req->execute(['Id' => $Id]);

        $result = $req->fetchAll();

        return $result;
    }
}
