<?php

declare(strict_types=1);

require_once('Manager.php');

class HomeInvoicesManager extends Manager
{
    //To display all the invoices
    public function getInvoices()
    {
        
        $db = $this->connectDb();

        $req = $db->query('SELECT InvoiceNumber, InvoiceDate, c.Name 
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

        $req = $db->query('SELECT FirstName, LastName, CompanyName, Email
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

        $req = $db->query('SELECT Name, VATNumber, Country, Type 
            FROM Companies
            ORDER BY Id DESC LIMIT 5');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    

    // //To display company by id
    // public function getCompany(int $companyId)
    // {

    //     $db = $this->connectDb();

    //     $req = $db->prepare('SELECT ... AS ... 
    //         FROM ... 
    //         WHERE id = ?');

    //     $req->bindParam(1, $this->companyId, PDO::PARAM_STR);
    //     $req->execute();
    //     $company = $req->fetch();

    //     return $company;
    // }

}
