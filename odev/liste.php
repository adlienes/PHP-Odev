<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dash Music</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="dis">
<div class="sol"><?php include "solmenu.php";?></div>
<div class="orta">
<h1 style="padding-left:15px;">Müzik Listem</h1>
<div class="menu2">
<form action="search.php" method="GET">
  <input type="text" name="search" placeholder="Search..">
  <button type="submit"  value="Search" class="button">Ara</button>
</form>
</div>
<div>
<div id="slider">
<figure>
<?php
include ("ayar.php");
$sql="select * from sarkilar ORDER BY RAND() limit 23";
$result=mysqli_query($baglan,$sql);

while($sorgula=mysqli_fetch_array($result))
{
extract($sorgula);
echo "<img src='{$resim_yolu}' style='width:150px;height:150px;padding-right:2px;border-radius:10px 10px 10px 10px; ' alt>";
}
?>
</figure>
</div>
</div>
<?php 
if(isset($_GET['sarki_id']))
{
	include("ayar.php");
	$sql="insert into liste(kullanici_id,sarki_id) values('".$_SESSION['id']."','".$_GET['sarki_id']."',) ";
	$sorgula=mysqli_query($baglan,$sql);
	
	if($sorgula)
	{
		header("location:liste.php");
	}
}	

else
{
	echo "Müzik Listenize Henüz Şarkı Eklemediniz";
}
?>
</div>
<div class="sag"><?php include "sagmenu.php";?></div>
</div>
</body>
</html>