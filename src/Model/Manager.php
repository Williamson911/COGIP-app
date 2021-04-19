<?php

declare(strict_types=1);

class Manager
{
	protected function connectDb()
	{
		try {
			if (file_exists(__DIR__ . '/../.env')) {
				$dbUsername = $_ENV['DB_NAME'];
				$dbPassword = $_ENV['DB_PASSWORD'];
			} else {
				$dbUsername = getenv('DB_NAME');
				$dbPassword = getenv('DB_PASSWORD');
			}

			$db = new PDO("mysql:host=remotemysql.com;dbname=$dbUsername;port=3306", "$dbUsername", "$dbPassword");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());
		}
	}
}
