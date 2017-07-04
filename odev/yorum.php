<?php
include("ayar.php");
if(isset($_POST['gonder'])) {

$GelenID = $_GET['sarki_id'];
$yorum_cu =$_POST['yorum_cu'];
$email_yorumcu =$_POST['email_yorumcu'];
$yorum_yaz =$_POST['yorum_yaz'];
$tarih1 = date("d.m.Y");
$saat1 = date("H:i:s");

$sorgu = "insert into yorumlar (adsoyad,sarki_id,email,yorum_yaz, tarih, yorum_saat ) values ('$yorum_cu',$GelenID, '$email_yorumcu', '$yorum_yaz', '$tarih1', '$saat1')"; 

$result2=mysqli_query($baglan,$sorgu);
if($result2)
{
echo header("location:more.php?sarki_id=".$GelenID."");
}
else {
echo mysql_error();
}
}
?>