<?php
class giangvien extends database {
    private $_magv;
    private $_tengv;
    private $_email;
    private $_password;
    private $_idbm;

    function __construct(){
        $this->connect();
    }

    public function getMagv(){
        return $this->_magv;
    }

    public function setMagv($magv){
        $this->_magv = $magv;
    }

    public function getTengv(){
        return $this->_tengv;
    }

    public function setTengv($tengv){
        $this->_tengv = $tengv;
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

    public function getIdbm(){
        return $this->_idbm;
    }

    public function setIdbm($idbm){
        $this->_idbm = $idbm;
    }

    public function themGV(){
        try{
            $sql = "INSERT INTO giangvien VALUES (N'".$this->getMagv()."',N'".$this->getTengv()."',N'".$this->getEmail()."',N'".$this->getPassword()."',N'".$this->getIdbm()."')";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e){
            return false;
        }
    }

    public function suaGV($id){
        try{
            $sql = "UPDATE giangvien SET magv = N'".$this->getMagv()."', name = N'".$this->getTengv()."',email = N'".$this->getEmail()."',password = N'".$this->getPassword()."', idBM = N'".$this->getIdbm()."' WHERE magv = '$id'";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e){
            return false;
        }
    }

    public function layGV(){
        $sql = "SELECT * FROM giangvien ORDER BY magv DESC";
        $this-> query($sql);
        return $this-> fetchALL();
    }

    public function layfullGV(){
        $sql = "SELECT gv.*, bm.* FROM giangvien gv, bomon bm WHERE gv.idBM = bm.idBM ORDER BY magv DESC";
        $this-> query($sql);
        return $this-> fetchALL();
    }

    public function layMotGV($id){
        $sql = "SELECT * FROM giangvien where magv = '$id' ";
        $this-> query($sql);
        return $this-> fetch();
    }

    public function layGVByIdBM($id){
        $sql = "SELECT * FROM `giangvien` WHERE idBM = '$id'";
        $this-> query($sql);
        return $this->fetchALL();
    }

    public function xoaGV($id){
        try{
            $sql = "DELETE FROM giangvien WHERE magv = '$id' ";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e){
            return false;
        }
    }

    public function checkGV($id){
        $ketqua = $this->layMotGV($id);
        if($ketqua){
            return true;
        }
        else {
            return false;
        }
    }

    public function checkLoginGV($id,$pass){
        $sql = "SELECT * FROM giangvien where magv='$id' AND password='$pass' ";
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