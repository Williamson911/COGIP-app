<?php

declare(strict_types=1);

require_once('Manager.php');

class ConnexionManager extends Manager
{
    public function getLogin($username)
    {
        $db = $this->connectDb();

        $req = $db->prepare('SELECT *
            FROM Admin
            WHERE Username = :username');

        $req->execute(['username' => $username]);

        $login = $req->fetch();

        return $login;
    }
}

class DeletionManager extends Manager
{
    public function deleteInvoice($Id)
    {

        $db = $this->connectDb();

        $req = $db->prepare('DELETE 
        FROM Invoices
        WHERE InvoiceNumber = :Id');

        $req->execute(['Id' => $Id]);

        $result = $req->fetch();

        return $result;
    }

    public function deleteContact($Id)
    {
        $db = $this->connectDb();

        $req = $db->prepare('DELETE
        FROM People
        WHERE Id = :Id');

        $req->execute(['Id' => $Id]);

        $result = $req->fetch();

        return $result;
    }

    public function deleteCompany($Id)
    {
        $db = $this->connectDb();

        $req = $db->prepare('DELETE
        FROM Companies
        WHERE Id = :Id');

        $req->execute(['Id' => $Id]);

        $result = $req->fetch();

        return $result;
    }
}
