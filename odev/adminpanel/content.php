<div class="content">
<div class="resim"><img src="img/user.png" style="width:150px;height:175px;margin:25px;"/></div>
<div class="bilgiler">
<div><?php session_start(); echo  "Hoşgeldiniz sayın: ".$_SESSION['admin_adsoyad']."<br />"; ?></div>
<div><?php  echo  "Kullanıcı Adınız: ".$_SESSION['admin_kullanici']."<br />"; ?></div>
<div><?php  echo 'Çıkış yapmak için lütfen <a href="cikis.php"> tıklayın.</a>' ?></div>
</div>
</div>