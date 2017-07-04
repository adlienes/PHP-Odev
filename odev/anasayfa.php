<?php
if(!isset($_SESSION['kullanici']))
	{
		include "giriskisim.php";
	}
	else
	{
		echo '<div class="girisyazi2"><img src="img/avatar.jpg" style="width:50px;height:50px;border-radius:20px 20px 20px 20px;"> Hoşgeldiniz sayın: ' .$_SESSION['kullanici'].'<br />';
		echo 'çıkış yapmalk için lütfen <a href="cikis.php"> tıklayın.</a></div>';
	}
?> 
