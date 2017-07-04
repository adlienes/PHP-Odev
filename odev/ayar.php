<?php
$baglan=mysqli_connect('localhost','root','','dashradio');
mysqli_set_charset($baglan,"utf8");
if($baglan)
	echo "";
else
	echo "Mysql'e ve uyeler veritabanina baglanilamadi.<br/>";


?>