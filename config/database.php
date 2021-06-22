

<?php 
//change document root in httpd.config file in xampp to root directory 
//of the project you are working on when doing other projects
class DB {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'root';
    private $dbname = 'slim-api';

    public function connect(){
        $connStr = "mysql:host=$this->host;dbname=$this->dbname";
        $conn = new PDO($connStr, $this->user);
        //$conn->setAttributes(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }

}

?>