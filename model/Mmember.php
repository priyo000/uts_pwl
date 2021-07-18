<?php 

class Mmember
{
    //member1 var
    private $connection;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh;
        $this->connection = $dbh;
    }

    public function check_login($data) {
        // query 
        $query = 'select * from dbpegawai.member where username = "'.$data[0].'"';
        // prepare statement
        $get = $this->connection->prepare($query);
        // execute
        $get->execute();
		$result = $get->fetch();
        
        $password =  $result['password']; // get password
        // return $password;
        if (password_verify($data[1], $password)) {
            return $result;
        } else {
            return NULL;
        }
        
    }    
}
