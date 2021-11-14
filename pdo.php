<?php
/**
 * 
 */
class ClassName
{
public $dbname = 'test';
public $dbserver = 'localhost';
public $dbpass = '';
public $dbuser = 'root';
	
	function __contruct()
	{
		$dns = "mysql:host=".$this->dbserver."; dbname=".$this->dbname."";
		$pdo = new PDO( $dns,  $this->dbuser, $this->dbpass );
		$pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
        return $pdo;
	}
}