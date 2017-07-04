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
$tur_id = $_POST['tur_id'];
$tur_isim = $_POST['tur_isim'];



$sql = "UPDATE sarki_kategori SET tur_id='$tur_id',  tur_isim='$tur_isim'  WHERE tur_id='$GelenID'";
 
$sonuc= mysqli_query($baglan,$sql);
if($sonuc>0) 
{ 
header("location:kategoriler.php");
}
else
echo "Bir problem oluştu, verileri kontrol ediniz";
}
else
{
$sql="SELECT *FROM sarki_kategori WHERE tur_id=$GelenID";
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
<td>Kategori-ID</td>
<td><input type="text" name="tur_id" value="'.$satir['tur_id'].'"></td>
</tr>
<td>Kategori Adı</td>
<td><input type="text" name="tur_isim" value="'.$satir['tur_isim'].'"></td>
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