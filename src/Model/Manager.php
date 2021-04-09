<?php

declare(strict_types=1);

require 'environment.php';

class Manager
{
	protected function connectDb()
	{
		try {
			$db = new PDO("mysql:host=remotemysql.com;dbname=S4vXv3ajmJ;port=3306", $_ENV["USER"], $_ENV["PASSWORD"]);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());
		}
	}
}
