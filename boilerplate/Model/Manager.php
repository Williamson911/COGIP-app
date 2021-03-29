<?php
declare(strict_types=1);

namespace Becode\MVCBoilerplate\Model;

class Manager
{
	protected function connectDb()
	{
		try{
			$db = new PDO("mysql:host=mysql;dbname=classicmodels;port=3306","root","root");
		    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    } catch(Exception $e){
	        die('Error : '.$e->getMessage());
	    }
	}

}