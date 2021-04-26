<?php
class db {
    public $conn = NULL;
    public $result = NULL;
    public $host="localhost";
    public $user="root";
    public $pass="";
    public $database="kend";
    protected $author="Ken";
    protected $version="1.1";

    function __construct(){
        $this->conn = mysqli_connect($this->host,$this->user,$this->pass);
        mysqli_select_db($this->conn,$this->database);
        mysqli_query($this->conn,"set names 'utf8'");
    } 
    function getdata($sql) {
        $this->result = mysqli_query($this->conn,$sql);
    }
    function fetchRow() {
        // if (is_resource($this->result) ==false) return false;
        $row = mysqli_fetch_assoc($this->result);
        return $row;
    }

    //TheLoai
    public function TheLoai($lang='vi' , $AnHien=1){
        $sql="SELECT idTL, TenTL from theloai WHERE (AnHien=$AnHien or $AnHien=-1)
        AND (lang = '$lang' or '$lang'='')
        ORDER BY ThuTu";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
        return $kq;
    }

    //LoaiTin
    public function LoaiTin ($lang='vi',$AnHien=1){
        $sql="SELECT idLT, Ten FROM loaitin
        WHERE (AnHien = $AnHien or $AnHien = -1)
        AND (lang = '$lang' or '$lang'='')
        ORDER BY Thutu";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
        return $kq;
    }

    function LoaiTinTrongTheLoai($idTL,$AnHien=1){
        settype($idTL, "int");
        $sql = "SELECT idLT, Ten FROM loaitin WHERE (AnHien=$AnHien or $AnHien=-1)
        AND idTL=$idTL ORDER BY ThuTu ASC";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
        return $kq;
    }
    
} //class db
?> 