<?php

declare(strict_types=1);

require 'environment.php';


class Manager
{ $user = getenv('USER');
$password = getenv('PASSWORD');
	protected function connectDb()
	{
		try {
			$db = new PDO("mysql:host=remotemysql.com;dbname=S4vXv3ajmJ;port=3306", $user, $password);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());
		}
	}
}
