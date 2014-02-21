<?php
class db
{
    public $host;
    public $user;
    public $pass;
    public $data;
    public $con;
    public $table;
    function db()
    {
        $this->host="http://sql7.000webhost.com/";
        $this->user="a1341807_dylan";
        $this->pass="Qw3erfgh";
        $this->data="a1341807_test";   
    }   
    public function connect()
    {
        $this->con=mysql_connect($this->host,$this->user,$this->pass);
        if(!$this->con)
        {
            echo mysql_error();
        }
        $sel=mysql_select_db($this->data, $this->con);
        if(!$sel)
        {
            echo mysql_error();
        }
    }
    public function insert($address,$size,$age,$years,$people,$utility)
    {
        $sql=mysql_query("INSERT INTO houseprofile(Address, Size, Age, People, Utility) VALUES('$address', '$size', '$age', '$people', '$utility')");
        if(!$sql)
        {
            echo mysql_error();
        }
    }
}
?>