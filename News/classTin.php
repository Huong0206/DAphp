<?php
include "classDB.php";
class tin extends db{
    function __destruct(){
        if (is_resource($this->conn)) mysql_close($this->conn);
        // echo "<hr><p>Version: {$this->version} </p>";
        // echo "<p>Author: {$this->author} </p>";
    } 

    function TinXemNhieu($sotin = 10, $lang = 'vi'){
        if (is_null($sotin)) $sotin = 5;
        $sql="SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin WHERE AnHien = 1 and ( lang = '{$lang}' or '{$lang}' = '' )
        ORDER BY SoLanXem DESC
        LIMIT 0,$sotin";
        $kq = mysqli_query($this->conn,$sql) or die (mysqli_error());
        return $kq;
    }

    function TinMoi($sotin = 10 , $lang ='vi'){
        if (is_null($sotin)) $sotin = 5;
        $sql="SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin
        WHERE AnHien = 1 and ( lang ='{$lang}' or '{$lang}'='' )
        ORDER BY idTin DESC
        LIMIT 0,$sotin";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
        return $kq;
    }

    function TinTrongLoai($idLT, $pageNum=1, $pageSize = 10 , $lang ='vi'){
        $startRow = ($pageNum-1)*$pageSize;
        $sql=" SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin
        WHERE AnHien = 1 AND idLT=$idLT AND ( lang ='{$lang}' or '{$lang}'='' )
        ORDER BY idTin DESC
        LIMIT $startRow , $pageSize";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
        return $kq;
    }

    function CungSuKienVoiTin($idTin, $sotin = 10, $lang ='vi'){
        settype($idTin, "int");
        $sql=" SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin
        WHERE AnHien = 1 AND ( lang ='{$lang}' or '{$lang}'='' )
        AND idSK = (SELECT idSK FROM tin WHERE idTin=$idTin)
        LIMIT 0, $sotin";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
        return $kq;
    }

    function TinMoiCungLoai(){
        $idTin = $_GET['idTin'];
        $sql=" SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin
        WHERE AnHien = 1 AND idTin>$idTin AND lang='vi'
        AND idTL = (SELECT idTL FROM tin WHERE idTin = $idTin)
        LIMIT 0,5 ";
        $kq = mysqli_query($this->conn,$sql);
        return $kq;
    }

    function TinCuCungLoai($idTin, $sotin = 10, $lang ='vi'){
        settype($idTin, "int");
        $sql="SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin
        WHERE AnHien = 1 AND idTin<$idTin AND ( lang ='{$lang}' or '{$lang}'='' )
        AND idLT = (SELECT idLT FROM tin WHERE idTin = $idTin)
        ORDER BY idTin DESC LIMIT 0, $sotin";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
        return $kq;
    }

    function chitiettin() {
        $idTin = $_GET['idTin'];
        $sql=" SELECT idTin, TieuDe, TomTat, Ngay, urlHinh, Content, SoLanXem,
        TinNoiBat, tin.AnHien, tin.idLT, Ten, tin.idTL, TenTL
        FROM tin, loaitin, theloai
        WHERE idTin=$idTin AND tin.idLT=loaitin.idLT AND loaitin.idTL=theloai.idTL";
        $chitiettin = mysqli_query($this->conn,$sql);
        return $chitiettin;
    }

    function ChiTietLoaiTin($idLT) {
        settype($idLT, "int");
        $sql = " SELECT idLT, Ten, loaitin.idTL, TenTL
        FROM loaitin, theloai
        WHERE idLT = $idLT AND loaitin.idTL = theloai.idTL";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
        return $kq;
    } 


} //class tin
?>