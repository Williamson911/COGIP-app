<?php

declare(strict_types=1);

namespace Becode\MVCBoilerplate\model;

require_once('Manager.php');

class CompaniesManager extends Manager
{

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    //To display all the companies
    public function getCompanies()
    {
        
        $db = $this->connectDb();

        $req = $db->query('SELECT ... AS ... 
            FROM ... 
            ORDER BY ... 
            DESC');

        return $req->fetch(PDO::FETCH_ASSOC);
    }

    //To display company by id
    public function getCompany(int $companyId)
    {

        $db = $this->connectDb();

        $req = $db->prepare('SELECT ... AS ... 
            FROM ... 
            WHERE id = ?');

        $req->bindParam(1, $this->companyId, PDO::PARAM_STR);
        $req->execute();
        $company = $req->fetch();

        return $company;
    }

}