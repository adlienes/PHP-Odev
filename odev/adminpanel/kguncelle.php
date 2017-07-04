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
$isim = $_POST['isim'];
$kullanici = $_POST['kullanici'];
$mail = $_POST['mail'];
$sifre = $_POST['sifre'];


$sql = "UPDATE uyeler1 SET isim='$isim',  kullanici='$kullanici', mail='$mail', sifre='$sifre'   WHERE kullanici_id='$GelenID'";
 
$sonuc= mysqli_query($baglan,$sql);
if($sonuc>0) 
{ 
header("location:kullanicilar.php");
}
else
echo "Bir problem oluştu, verileri kontrol ediniz";
}
else
{
$sql="SELECT *FROM uyeler1 WHERE kullanici_id=$GelenID";
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
<td>Adı Soyadı</td>
<td><input type="text" name="isim" value="'.$satir['isim'].'"></td>
</tr>
<td>Kullanıcı Adı</td>
<td><input type="text" name="kullanici" value="'.$satir['kullanici'].'"></td>
</tr>
<tr>
<td>E-Mai</td>
<td><input type="text" name="mail" value="'.$satir['mail'].'"></td>
</tr>
<tr>
<td>Şifre</td>
<td><input type="text" name="sifre" value="'.$satir['sifre'].'"></td>
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