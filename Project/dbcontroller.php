<?php

use LDAP\Result;

class DBcontroller{

    private $host="localhost:3307";
    private $user="root";
    private $pass='';
    private $dbname="web_project";

    private $conn;

    function __construct()
    {
        $this->conn = $this->connectDB();
    }

    function connectDB(){
        $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        mysqli_set_charset($conn,"utf8");
        return $conn;
    }
    function runQuery($query){
        $result = mysqli_query($this->conn, $query);
        while ($row=mysqli_fetch_assoc($result)){
            $resultset[] = $row;
        }if (!empty($resultset))
        return $resultset;
        
    }
    function numRows($query){
        $result = mysqli_query($this->conn, $query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
            

    }
}

?>