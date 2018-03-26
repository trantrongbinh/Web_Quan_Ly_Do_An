<?php
class giaovu extends database {
    private $_magvu;
    private $_tengvu;
    private $_email;
    private $_password;

    function __construct(){
        $this->connect();
    }

    public function getMagvu(){
        return $this->_magvu;
    }

    public function setMagvu($magvu){
        $this->_magvu = $magvu;
    }

    public function getTengvu(){
        return $this->_tengvu;
    }

    public function setTengvu($tengvu){
        $this->_tengvu = $tengvu;
    }

    public function getEmail(){
        return $this->_email;
    }

    public function setEmail($email){
        $this->_email = $email;
    }

    public function getPassword(){
        return $this->_password;
    }

    public function setPassword($password){
        $this->_password = $password;
    }

    public function themGvu(){
        try{
            $sql = "INSERT INTO giaovu VALUES (N'".$this->getMagvu()."',N'".$this->getTengvu()."',N'".$this->getEmail()."',N'".$this->getPassword()."')";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e){
            return false;
        }
    }

    public function suaGvu($id){
        try{
            $sql = "UPDATE giaovu SET name = N'".$this->getTengvu()."',email = N'".$this->getEmail()."',password = N'".$this->getPassword()."' WHERE magvu = '$id'";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e){
            return false;
        }
    }

    public function layGvu(){
        $sql = "SELECT * FROM giaovu ORDER BY magvu DESC";
        $this-> query($sql);
        return $this-> fetchALL();
    }

    public function layMotgvu($id){
        $sql = "SELECT * FROM giaovu where magvu = '$id' ";
        $this-> query($sql);
        return $this-> fetch();
    }

    public function xoaGvu($id){
        try{
            $sql = "DELETE FROM giaovu WHERE magvu = '$id' ";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e){
            return false;
        }
    }

    public function checkGvu($id){
        $ketqua = $this->layMotgvu($id);
        if($ketqua){
            return true;
        }
        else {
            return false;
        }
    }

    public function checkLogingvu($id,$pass){
        $sql = "SELECT * FROM giaovu where magvu='$id' AND password='$pass' ";
        $this-> query($sql);
        $ketqua = $this->fetch();
        if($ketqua){
            return true;
        }
        else {
            return false;
        }
    }
}
?>