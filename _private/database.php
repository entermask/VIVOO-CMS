<?php

namespace Database;

class Init {
	private $conn;
	
	public function __construct($host, $user, $pass, $name)
	{
		$this->conn = mysqli_connect($host, $user, $pass, $name) or die('#1: CSDL Config Sai !');
		mysqli_set_charset($this->conn,"UTF8");
	}
	
	public function query($query)
	{
		return mysqli_query($this->conn, $query);
    }
	
	public function get($query)
	{
		return mysqli_fetch_assoc($this->query($query));
    }
	
	public function rows($query, $format = false)
	{
		if(!$format)
			return mysqli_num_rows($this->query($query));
		else
			return number_format(mysqli_num_rows($this->query($query)));
	}

	public function lastId()
	{
		return mysqli_insert_id($this->conn);
	}
	
	public function escape(string $string)
	{
		return mysqli_real_escape_string($this->conn, $string);
	}
}