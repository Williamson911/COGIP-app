<?php

declare(strict_types=1);

require_once('Manager.php');

class CreationManager extends Manager
{
    public function newContact($firstname, $lastname, $company, $email)
    {
        $db = $this->connectDb();

        $req = $db->prepare("INSERT INTO People (Id, FirstName, LastName, CompanyName, Email)
        VALUES (NULL, :firstname, :lastname, :company, :email)");

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
}