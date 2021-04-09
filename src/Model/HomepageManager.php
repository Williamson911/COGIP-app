<?php

declare(strict_types=1);

require_once('Manager.php');

class HomeInvoicesManager extends Manager
{
    //To display all the invoices
    public function getInvoices()
    {

        $db = $this->connectDb();

        $req = $db->query('SELECT i.Id, InvoiceNumber, InvoiceDate, c.Name 
            FROM Invoices i
            INNER JOIN Companies c
            ON i.CompanyId = c.Id
            ORDER BY InvoiceDate DESC LIMIT 5');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}

class HomeContactsManager extends Manager
{
    public function getContacts()
    {
        $db = $this->connectDb();

        $req = $db->query('SELECT FirstName, LastName, CompanyName, Email, Id
            FROM People
            ORDER BY Id DESC LIMIT 5');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}

class HomeCompaniesManager extends Manager
{

    //To display all the companies
    public function getCompanies()
    {

        $db = $this->connectDb();

        $req = $db->query('SELECT Name, VATNumber, Country, Type, Id 
            FROM Companies
            ORDER BY Id DESC LIMIT 5');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
