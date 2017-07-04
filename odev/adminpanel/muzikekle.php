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
<h2>Şarkı Ekle</h2>
<?php 
include ("ayar.php");


if($_POST)
{

$sarki_adi=$_POST['sarki_adi'];
$sarkici_adi=$_POST['sarkici_adi'];
$resim_yolu=$_POST['resim_yolu'];
$sarki_yolu=$_POST['sarki_yolu'];
$begeni=$_POST['begeni'];
$tur_id=$_POST['tur_id'];

$sql="INSERT INTO sarkilar(sarki_adi,sarkici_adi,resim_yolu,sarki_yolu,begeni,tur_id) VALUES('$sarki_adi','$sarkici_adi','$resim_yolu','$sarki_yolu','$begeni','$tur_id')";
$sorgula=mysqli_query($baglan,$sql);


if($sorgula>0)
{
	 header("location:muzikler.php");
}
else
{
	echo "MÜZiK EKLERKEN HATA OLUŞTU";
}
}
else
{
	echo'	
	<table border="1" align="center">
	<form action="" method="POST">
<tr>
<td colspan="2" align="center"> Kayıt Güncelleme</td>
 
</tr>
<tr>
<tr>
<td>Şarkı Adı</td>
<td><input type="text" name="sarki_adi"></td>
</tr>
<td>Şarkıcı Adı</td>
<td><input type="text" name="sarkici_adi"></td>
</tr>
<tr>
<td>Resim-Yolu</td>
<td><input type="text" placeholder="img\...." name="resim_yolu"></td>
</tr>
<tr>
<td>Şarkı-Yolu</td>
<td><input type="text"placeholder="muzik\...." name="sarki_yolu"></td>
</tr>
<tr>
<td>Begeni</td>
<td><input type="text" name="begeni"></td>
</tr>
<tr>
<td>Kategori Adı</td>
<td>
<input type="text" name="tur_id">
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Kaydet"></td>
</tr>
</table>
</form>';
	
}

?>
</div>

</body>
</html>