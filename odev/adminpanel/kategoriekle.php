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
<h2>Kategori Ekle</h2>
<?php 
include ("ayar.php");

if($_POST)
{
$isim=$_POST['isim'];

$sql="INSERT INTO sarki_kategori(tur_isim) VALUES('$isim')";
$sorgula=mysqli_query($baglan,$sql);
header("location:kategori.php");	
	
}
else
{
	echo'	
	<table border="1" align="center">
	<form action="" method="POST">
<tr>
<td colspan="2" align="center">Kategori Adı Ekle</td>
</tr>
<tr>
<tr>
<td>Kategori Adı</td>
<td><input type="text" name="isim"></td>
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