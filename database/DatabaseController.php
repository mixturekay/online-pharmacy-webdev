<?php

class DBController
{
	//Database connection properties
	protected $host = 'localhost';
	protected $user = 'root';
	protected $password = '';
	protected $database = 'onlinepharmacy';
    // connection
    public $conn = null;

	// constructor
  public function __construct()
	{
 $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
	   if ($this->conn->connect_error) {
	   	echo "connection Fail".$this->conn->connect_error;
	   }
	   
	}
 public function __destruct(){
 	$this->closeConnection();
 }

//closing mysqli connetion
protected function closeConnection()
{
	if ($this->conn !=null)
		$this->conn->close();
	    $this->conn = null;
	}

}

