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
<h2>Müzikler  Tablosu</h2>
<div class="kullanicilar">
<table style="border:1px;">
<tr>
<th></th>
<th></th>
<th>Şarkı Adı</th>
<th>Şarkıcı Adı</th>
<th>Resim-Yolu</th>
<th>Şarkı-Yolu</th>
<th>Beğeni</th>
<th>Kategori Adı</th>
</tr>
<?php 
include("ayar.php");

$sql="SELECT sarkilar.sarki_id,sarkilar.sarki_adi,sarkilar.sarkici_adi,sarkilar.resim_yolu,sarkilar.sarki_yolu,sarkilar.begeni,sarki_kategori.tur_isim FROM sarkilar INNER JOIN sarki_kategori ON sarkilar.tur_id=sarki_kategori.tur_id" ;
$sorgula=mysqli_query($baglan,$sql);

while($result=mysqli_fetch_array($sorgula))
{
	extract($result);
	
	echo "
	<tr>
	<th><a href='mguncelle.php?id=$sarki_id'>Düzenle</th>
	<th><a href='msil.php?id=$sarki_id'>Sil</th>
	<td>$sarki_adi</td>
	<td>$sarkici_adi</td>
	<td>$resim_yolu</td>
	<td>$sarki_yolu</td>
	<td>$begeni</td>
	<td>$tur_isim</td>
	</tr>";
}
?>
</table>
</div>
</div>
</body>
</html>