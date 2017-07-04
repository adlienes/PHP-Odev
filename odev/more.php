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
<?php
$GelenID = $_GET['sarki_id'];
if($GelenID)
{
include("ayar.php");
$sql="select * from sarkilar where sarki_id='$GelenID'";
$result=mysqli_query($baglan,$sql);

while($sorgula=mysqli_fetch_array($result))
{
extract($sorgula);

echo "
	
<div class='bilgi'><img  src='{$resim_yolu}' style='width:250px;height:250px;float:left;'/><div class='bilgiyazi'><b>$sarki_adi</b><br/><b>$sarkici_adi</b><br/></div>
<div>
<button class='button' onClick='oyna()'>Play</button>
<audio id='audio-player' style='display:none;'>
<source src='{$sarki_yolu}'>
</audio>
";

if(isset($_SESSION['kullanici']))
{echo "<a href='begen.php?sarki_id=".$GelenID."' class='button'>Beğen</a><br/>
 <a href='liste.php?sarki_id=".$GelenID."' class='button'>Listeye Ekle</a>";}
 
echo "
</div>
</div>

<div class='yorum'>
<fieldset>
<legend>Yorum yap</legend>
<form action='yorum.php?sarki_id=".$GelenID."' method='post'>
<table border='0'>
<tr>
<td><input type='text' name='yorum_cu' placeholder='Ad Soyad' size='25'></td>
</tr>
<tr>
<td><input type='text' name='email_yorumcu' placeholder='E-Mail' size='25'></td>
</tr>
<tr>
<td>
<textarea name='yorum_yaz' style='max-width:650px; height:106px' placeholder='Yorum' cols='90' rows='100'></textarea>
<tr>
<td align='enter'><input type='submit' class='button' name='gonder' value='Gonder'></td>
</tr>
</table>
</fieldset> 
</div>";
}
}
?>
<?php
$GelenID = $_GET['sarki_id'];
if($GelenID)
{
include ("ayar.php");
$sorgu="select*from yorumlar where sarki_id='$GelenID'";
$result2=mysqli_query($baglan,$sorgu);

while($veriler=@mysqli_fetch_array($result2))
{
extract($veriler);
echo"
<div class='yorumlar'>
<fieldset>
<legend>Yorumlar</legend>
<div class='yorumlar2'><img src='img\logo.png'style='width:200px;height:100px;float:left;box-shadow: 0px 0px 6px 0px rgba(0,0,0,0.5);'/><b>$adsoyad</b><br/><b>$tarih<br/><div class='yorumyazi'><b>$yorum_yaz</b></div></div>
</fieldset> 
</div>";
}
}
?>
<script type="text/javascript">

		var player=document.getElementById("audio-player");//playera eriştik

		var sure_alan=document.getElementById("sure");//süreyi koyacağımız yere eriştik

		

		function oyna(){//oyna fonksiyonu çağırılırsa

			if (player.paused) {//eğer çalmıyosa

				player.play();//çal

				sure();//sure fonksiyonunu çağır.

			}else{

				player.pause();//çalıyosa durdur

			}

		}

		

		function sure(){//sure fonksiyonu çalırılırsa

				var sure=player.currentTime;//o anki süreyi al

				sure_alan.innerHTML=sure;//sayfaya bas

				setTimeout("sure()",10);//fonksiyonu yine çağır.

		}



</script>
</div>
<div class="sag"><?php include "sagmenu.php";?></div>
</div>
</body>
</html>