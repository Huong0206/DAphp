public function ListTin(){
$sql=" SELECT idTin, TieuDe, TomTat, Ngay, SoLanXem, tin.AnHien, TinNoiBat, TenTL, Ten
FROM tin, theloai, loaitin
WHERE tin.idTL=theloai.idTL AND tin.idLT = loaitin.idLT
ORDER BY idTin DESC ";
$kq = mysql_query($sql) or die (mysql_error());
return $kq;
}