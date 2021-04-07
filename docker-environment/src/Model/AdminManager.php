<?php

declare(strict_types=1);

require_once('Manager.php');

class AdminManager extends Manager
{
    public function newContact($firstname, $lastname, $company, $email)
    {
        $db = $this->connectDb();

        $req = $db->prepare("INSERT INTO People (FirstName, LastName, CompanyName, Email)
        VALUES (:firstname, :lastname, :company, :email)");

        $req->execute(['firstname' => $firstname, 'lastname' => $lastname, 'company' => $company, 'email' => $email]);

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

        $req->execute(['name' => $companyName, 'vatnumber' => $VATNumber, 'country' => $country, 'type' => $companyType]);

        $result = $req->fetch();

        return $result;
    }

    public function newInvoice($InvoiceNumber, $InvoiceDate, $ClientId, $CompanyId)
    {
        $db = $this->connectDb();

        $req = $db->prepare("INSERT INTO Invoices (InvoiceNumber, InvoiceDate, ClientId, CompanyId)
        VALUES (:number, :date, :cId, :coId)");

        $req->execute(['number' => $InvoiceNumber, 'date' => $InvoiceDate, 'cId' => $ClientId, 'coId' => $CompanyId]);

        $result = $req->fetch();

        return $result;
    }

    public function editContact($id, $firstname, $lastname, $companyName, $email)
    {
        $db = $this->connectDb();

        $req = $db->prepare("UPDATE People 
        SET FirstName = :firstname, LastName = :lastname, CompanyName = :companyname, Email = :email
        WHERE Id = :id");

        $req->execute(['id' => $id, 'firstname' => $firstname, 'lastname' => $lastname, 'companyname' => $companyName, 'email' => $email]);

        $result = $req->fetch();

        return $result;
    }

    public function editCompany($id, $name, $country, $type, $vatnumber)
    {
        $db = $this->connectDb();

        $req = $db->prepare("UPDATE Companies
        SET Name = :name, Country = :country, Type = :type, VATNumber = :vatnumber
        WHERE Id = :id");

        $req->execute(['id' => $id, 'name' => $name, 'country' => $country, 'type' => $type, 'vatnumber' => $vatnumber]);

        $result = $req->fetch();

        return $result;
    }

    public function editInvoice($id, $invoicenumber, $invoicedate, $clientid, $companyid)
    {
        $db = $this->connectDb();

        $req = $db->prepare("UPDATE Invoices
        SET InvoiceNumber = :invoicenumber, InvoiceDate = :invoicedate, ClientId = :clientid, CompanyId = :companyid
        WHERE Id = :id");

        $req->execute(['id' => $id, 'invoicenumber' => $invoicenumber, 'invoicedate' => $invoicedate, 'clientid' => $clientid, 'companyid' => $companyid]);

        $result = $req->fetch();

        return $result;
    }
}

class ModerationManager extends Manager
{
    public function getModos()
    {
        $db = $this->connectDb();

        $req = $db->query('SELECT Id, Username, Role 
            FROM Admin
            ORDER BY Role');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editModo($role, $id)
    {
        $db = $this->connectDb();

        $req = $db->prepare("UPDATE Admin
        SET Role = :role
        WHERE Id = :id");

        $req->execute(['role' => $role, 'id' => $id]);

        $result = $req->fetch();

        return $result;
    }
}
