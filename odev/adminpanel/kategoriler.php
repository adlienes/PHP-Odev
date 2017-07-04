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
<h2>Şarkı Kategori Tablosu</h2>
<div class="kullanicilar">
<table style="border:1px;">
<tr>
<th></th>
<th></th>
<th>Kategori-Id</th>
<th>Kategori Adı</th>
</tr>
<?php 
include("ayar.php");

$sql="SELECT *FROM sarki_kategori" ;
$sorgula=mysqli_query($baglan,$sql);

while($result=mysqli_fetch_array($sorgula))
{
	extract($result);
	
	echo "
	<tr>
	<th><a href='katguncelle.php?id=$tur_id'>Düzenle</th>
	<th><a href='katsil.php?id=$tur_id'>Sil</th>
	<td>$tur_id</td>
	<td>$tur_isim</td>
	</tr>";
}
?>
</table>
</div>




</div>

</body>
</html>