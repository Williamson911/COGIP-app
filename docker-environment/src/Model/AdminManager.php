<?php

declare(strict_types=1);

require_once('Manager.php');

class CreationManager extends Manager
{
    public function newContact($firstname, $lastname, $company, $email)
    {
        $db = $this->connectDb();

        $req = $db->prepare("INSERT INTO People (FirstName, LastName, CompanyName, Email)
        VALUES (:firstname, :lastname, :company, :email)");

        $req->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'company'=>$company, 'email'=>$email]);

        $result = $req->fetch();

        return $result;
    }

    public function getCompanies()
    {
        
        $db = $this->connectDb();

        $req = $db->query('SELECT Name 
            FROM Companies
            ORDER BY Name');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getContacts()
    {
        
        $db = $this->connectDb();

        $req = $db->prepare('SELECT FirstName, LastName, CompanyName, p.Id AS contactId, c.Id AS companyId
            FROM People p
            INNER JOIN Companies c
            ON p.CompanyName = c.Name
            ORDER BY CompanyName');

        $req->execute();

        $result = $req->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function newCompany($companyName, $VATNumber, $country, $companyType)
    {
        $db = $this->connectDb();

        $req = $db->prepare("INSERT INTO Companies (Name, VATNumber, Country, Type)
        VALUES (:name, :vatnumber, :country, :type)");

        $req->execute(['name'=>$companyName, 'vatnumber'=>$VATNumber, 'country'=>$country, 'type'=>$companyType]);

        $result = $req->fetch();

        return $result;
    }

    public function newInvoice($InvoiceNumber, $InvoiceDate, $ClientId, $CompanyId)
    {
        $db = $this->connectDb();

        $req = $db->prepare("INSERT INTO Invoices (InvoiceNumber, InvoiceDate, ClientId, CompanyId)
        VALUES (:number, :date, :cId, :coId)");

        $req->execute(['number'=>$InvoiceNumber, 'date'=>$InvoiceDate, 'cId'=>$ClientId, 'coId'=>$CompanyId]);

        $result = $req->fetch();

        return $result;
    }
}