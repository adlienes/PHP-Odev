
<div class="sol">
<div class="logo"><a href="index.php"><img  src="img/logo.png" style="width:200px;margin-left:50px;margin-top:50px;"/></a></div>
<div class="giris">
<?php
if(!isset($_SESSION))
{
	session_start();
}
include "anasayfa.php";
?>
</div>
	
<nav class="navigation">
  <ul class="mainmenu">
    <li><a href="index.php"><img src="img/anasayfa.png" style="width:25px;height:25px;margin-right:25px;"/>Anasayfa</a></li>
<?php if(isset($_SESSION['kullanici'])){echo '<li><a href="liste.php"><img src="img/muzik.png" style="width:25px;height:25px;margin-right:25px;"/>Müzik Listem</a></li>'; }?>
    <li><a href=""><img src="img/list.png" style="width:25px;height:25px;margin-right:25px;"/>Müzikler</a>
      <ul class="submenu">
        <li><a href="muzik.php?tur_id=1">Arabesk</a></li>
        <li><a href="muzik.php?tur_id=2">Pop</a></li>
        <li><a href="muzik.php?tur_id=3">Rap</a></li>
		<li><a href="muzik.php?tur_id=4">Rock</a></li>
		<li><a href="muzik.php?tur_id=5">İlahi</a></li>

	
      </ul>
    </li>
    <li><a href=""><img src="img/more.png" style="width:25px;height:25px;margin-right:25px;"/>Daha Fazla</a>
	<ul class="submenu">
        <li><a href="hakkimizda.php">Hakkımızda</a></li>
        <li><a href="iletisim.php">İletişim</a></li>
      </ul>
	</li>
  </ul>
</nav>
<div class="sosyal">
<a href="https://www.facebook.com/dashradio/" target="_blank"><img src="img/facebook.png" style="width:40px;height:40px;margin-right:25px;"/></a>
<a href="https://twitter.com/dash_radio" target="_blank"><img src="img/twitter.png" style="width:40px;height:40px;margin-right:25px;"/></a>
<a href="https://www.instagram.com/dashradio/" target="_blank"><img src="img/instagram.png" style="width:40px;height:40px;margin-right:25px;"/></a>
</div>
</div>
