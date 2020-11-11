<?php
    class DB{
        public $con;
        protected $servername = "localhost";
        protected $username = "root";
        protected $password="";
        protected $dbname="web";

        function __construct(){
            $this->con = mysqli_connect($this->servername, $this->username, $this->password);
            mysqli_set_charset($this->con, 'UTF8');
            mysqli_select_db($this->con, $this->dbname);
            mysqli_query($this->con,"SET NAMES 'utf-8'");
        }
        
    }
?>