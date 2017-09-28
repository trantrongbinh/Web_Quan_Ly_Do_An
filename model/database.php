<?php
class database{
    public $_dbh = '';
    public $_sql = '';
    public $_cursor = NULL;        
    
    public function database() {
        $this->_dbh = new PDO('mysql:host=localhost; dbname=quanlydoan2','root','');
        //PDO là một thư viện giúp giao tiep vs CSDL, chuyển các câu lệnh truy vấn thành câu lệnh truy vấn tương ứng trong hệ quản trị CSDL. đọc dứ liệu từ database sẽ trả về kiểu aray hoặc object
        $this->_dbh->query('set names "utf8"');//lenh truy van lay du lieu tu database
    }
    
    public function setQuery($sql) {
        $this->_sql = $sql;
    }
    
    //Function thuc hien truy vấn
    public function execute($options=array()) {//tra ve mang cac doi tuong lay tu database qua lenh truy van
        $this->_cursor = $this->_dbh->prepare($this->_sql);//tao ra các lenh truy van chuẩn bị gán cho _sql hay chính là $sql
        if($options) {  //If have $options then system will be tranmission parameters
            for($i=0;$i<count($options);$i++) {
                $this->_cursor->bindParam($i+1,$options[$i]);//set cột i+1 tro den bien options[i]
            }
        }
        $this->_cursor->execute();//lệnh thục thi các câu truy vấn chuẩn bị trong ham prepare
        return $this->_cursor;
    }
    
    //Funtion load datas on table(lay toan bo du lieu trong bang)
    public function loadAllRows($options=array()) {
        if(!$options) {
            if(!$result = $this->execute())
                return false;
        }
        else {
            if(!$result = $this->execute($options))
                return false;
        }
        return $result->fetchAll(PDO::FETCH_OBJ);//tra doi tuong ve la 1 mang
    }
    
    //Funtion load 1 data on the table
    public function loadRow($option=array()) {
        if(!$option) {
            if(!$result = $this->execute())
                return false;
        }
        else {
            if(!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_OBJ);
    }
    
    //Function count the record on the table (đếm bản ghi)
    public function loadRecord($option=array()) {
        if(!$option) {
            if(!$result = $this->execute())
                return false;
        }
        else {
            if(!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_COLUMN);
    }
    
    public function getLastId() { 
        return $this->_dbh->lastInsertId();//lấy id tự dong khi insert vào table
    }
    
    public function disconnect() { 
        $this->_dbh = NULL;
    }
}
?>  