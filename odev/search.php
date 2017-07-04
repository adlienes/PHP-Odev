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

<div class="orta"><h1 style="padding-left:15px;">Aranan Müzikler</h1>
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
include("ayar.php");

$query = $_GET['search'];                                                                                             

$min_length=3;

if(strlen($query) >= $min_length)
{
	$query = htmlspecialchars($query);
	
	
	$sql="Select * from sarkilar WHERE (`sarki_adi` LIKE '%".$query."%') OR (`sarkici_adi` LIKE '%".$query."%')";
	$raw_results=mysqli_query($baglan,$sql);
	
	 if(mysqli_num_rows($raw_results) > 0)
	 {
		  while($results = mysqli_fetch_array($raw_results))
		  {
			  echo "

		<div class='muzik'><img  src='".$results['resim_yolu']."' style='width:50px;height:50px;border-radius:20px 20px 20px 20px;'/><div class='sarki'><b>".$results['sarki_adi']."</b><br/><b>".$results['sarkici_adi']."</b><br/>
		<button class='button' onClick='oyna(".$results['sarki_id'].")' >Play</button>
		<a href='more.php?sarki_id=$sarki_id'><button class='button2'style='vertical-align:middle'><span>More</span></button></a></div>
		<audio id='".$results['sarki_id']."' style='display:none;'>
		<source src='".$results['sarki_yolu']."'>
		</audio></div>";
		
		  }
		 
	 }
	 else
	 {
		 echo "Sonuç Bulunamadı";
	 }
}
else
{
	echo "Aranacak Şarkı Adı yada Şarkıcı Adı Giriniz";
}
?>
<script type="text/javascript">
		
		
		function oyna(id){//oyna fonksiyonu çağırılırsa
			
			var list=document.getElementsByTagName('audio');
			for(var i=0;i<list.length;i++)
			{
				list[i].pause();	
			}
			var id=id;//playera eriştik
			var player=document.getElementById(id);

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