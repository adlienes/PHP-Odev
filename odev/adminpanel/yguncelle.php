<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dash Music</title>
<link rel="stylesheet" type="text/css" href="css/panel.css">
</head>

<body>

<div class="header">
<h2 style="text-align:center;padding-top:25px;">Dash Radio Admin Panel</h2>
</div>
<div class="ana">
<?php include ("aside.php"); ?>

<?php 
include ("ayar.php");
$GelenID=$_GET['id'];

if($_POST)
{
$GelenID=$_GET['id'];
$sarki_id = $_POST['sarki_id'];
$adsoyad = $_POST['adsoyad'];
$email= $_POST['email'];
$yorum_yaz = $_POST['yorum_yaz'];
$tarih = $_POST['tarih'];
$yorum_saat = $_POST['yorum_saat'];


$sql = "UPDATE yorumlar SET sarki_id='$sarki_id',  adsoyad='$adsoyad', email='$email', yorum_yaz='$yorum_yaz', tarih='$tarih', yorum_saat='$yorum_saat'   WHERE yorum_id='$GelenID'";
 
$sonuc= mysqli_query($baglan,$sql);
if($sonuc>0) 
{ 
header("location:yorumlar.php");
}
else
echo "Bir problem oluştu, verileri kontrol ediniz";
}
else
{
$sql="SELECT *FROM yorumlar WHERE yorum_id=$GelenID";
$sorgula=mysqli_query($baglan,$sql);

$satirsay=mysqli_num_rows($sorgula);

if($satirsay>0)
{
	$satir=mysqli_fetch_array($sorgula);
	
echo'	
	<table border="1" align="center">
	<form action="" method="POST">
<tr>
<td colspan="2" align="center"> Kayıt Güncelleme</td>
 
</tr>
<tr>
<tr>
<td>Şarkı-ID</td>
<td><input type="text" name="sarki_id" value="'.$satir['sarki_id'].'"></td>
</tr>
<td>Adı Soyadı</td>
<td><input type="text" name="adsoyad" value="'.$satir['adsoyad'].'"></td>
</tr>
<tr>
<td>E-Mail</td>
<td><input type="text" name="email" value="'.$satir['email'].'"></td>
</tr>
<tr>
<td>Yorum</td>
<td><input type="text" name="yorum_yaz" value="'.$satir['yorum_yaz'].'"></td>
</tr>
<tr>
<td>Tarih</td>
<td><input type="text" name="tarih" value="'.$satir['tarih'].'"></td>
</tr>
<tr>
<td>Saat</td>
<td><input type="text" name="yorum_saat" value="'.$satir['yorum_saat'].'"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Kaydet"></td>
</tr>
</table>
</form>';

} else 
{
//Kayıt bulunamadı
echo "Aranılan kayıt bulunamadı";
}
}
?>
</div>

</body>
</html>