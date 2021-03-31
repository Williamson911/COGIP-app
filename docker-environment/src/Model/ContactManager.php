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
}