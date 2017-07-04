<div class="orta"><h1 style="padding-left:15px;">Tüm Müzikler</h1>
<div>
<div id="slider">
<figure>
<img src="img\mustafaceceli.jpg" alt>
<img src="img\müslümgürses.jpg" alt>
<img src="img\sezenaksu.jpg" alt>
<img src="img\sıla.jpg" alt>
<img src="img\mustafaceceli.jpg" alt>
<img src="img\müslümgürses.jpg" alt>
<img src="img\sezenaksu.jpg" alt>
<img src="img\sıla.jpg" alt>
<img src="img\mustafaceceli.jpg" alt>
<img src="img\müslümgürses.jpg" alt>
<img src="img\sezenaksu.jpg" alt>
<img src="img\sıla.jpg" alt>
<img src="img\mustafaceceli.jpg" alt>
<img src="img\müslümgürses.jpg" alt>
<img src="img\sezenaksu.jpg" alt>
<img src="img\sıla.jpg" alt>
<img src="img\mustafaceceli.jpg" alt>
<img src="img\müslümgürses.jpg" alt>
<img src="img\sezenaksu.jpg" alt>
<img src="img\sıla.jpg" alt>
<img src="img\mustafaceceli.jpg" alt>
<img src="img\müslümgürses.jpg" alt>
<img src="img\sezenaksu.jpg" alt>

</figure>
</div>

</div>
<div class="menu2"></div>
<?php
include("ayar.php");
$sql="select * from sarkilar";
$result=mysqli_query($baglan,$sql);

while($sorgula=mysqli_fetch_array($result))
{
extract($sorgula);

echo "

<div class='muzik' {$sarki_id}><img  src='{$resim_yolu}' style='width:50px;height:50px;border-radius:20px 20px 20px 20px;'/><div class='sarki'><b>$sarki_adi</b><br/><b>$sarkici_adi</b><br/>
<button class='button' onClick='oyna()'>Play</button>
<a href='more.php?sarki_id=$sarki_id'><button class='button2'style='vertical-align:middle'><span>More</span></button></a></div>
<audio id='audio-player' style='display:none;'>
<source src='{$sarki_yolu}'>
</audio></div>";
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

<?php include "footer.php";?>

</div>