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
$sarki_adi = $_POST['sarki_adi'];
$sarkici_adi = $_POST['sarkici_adi'];
$resim_yolu = $_POST['resim_yolu'];
$sarki_yolu = $_POST['sarki_yolu'];
$begeni = $_POST['begeni'];
$tur_id = $_POST['tur_id'];


$sql = "UPDATE sarkilar SET sarki_adi='$sarki_adi',  sarkici_adi='$sarkici_adi', resim_yolu='$resim_yolu', sarki_yolu='$sarki_yolu', begeni='$begeni', tur_id='$tur_id'   WHERE sarki_id='$GelenID'";
 
$sonuc= mysqli_query($baglan,$sql);
if($sonuc>0) 
{ 
header("location:muzikler.php");
}
else
echo "Bir problem oluştu, verileri kontrol ediniz";
}
else
{
$sql="SELECT *FROM sarkilar WHERE sarki_id=$GelenID";
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
<td>Şarkı Adı</td>
<td><input type="text" name="sarki_adi" value="'.$satir['sarki_adi'].'"></td>
</tr>
<td>Şarkıcı Adı</td>
<td><input type="text" name="sarkici_adi" value="'.$satir['sarkici_adi'].'"></td>
</tr>
<tr>
<td>Resim-Yolu</td>
<td><input type="text" name="resim_yolu" value="'.$satir['resim_yolu'].'"></td>
</tr>
<tr>
<td>Şarkı-Yolu</td>
<td><input type="text" name="sarki_yolu" value="'.$satir['sarki_yolu'].'"></td>
</tr>
<tr>
<td>Beğeni</td>
<td><input type="text" name="begeni" value="'.$satir['begeni'].'"></td>
</tr>
<tr>
<td>Tür-ID</td>
<td><input type="text" name="tur_id" value="'.$satir['tur_id'].'"></td>
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