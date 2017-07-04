<div class="avatar" ><img src="img/avatar.jpg" style="width:50px;height:50px;border-radius:20px 20px 20px 20px;"><div class="girisyazi"><b>Hoşgeldiniz</b><br/><b>Giriş Yap YADA Kayıt Ol!</b></div></div>
<button class="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Giriş Yap</button>
<a href="uyelik_formu.php"><button  class="button">Kayıt Ol!</button></a>
<div id="id01" class="modal">
  <form class="modal-content animate" name="giris" action="uye_giris_islemleri.php" method="post">
    <div class="container">
      <label><b>Kullancı Adı</b></label>
      <input type="text" placeholder="Kullancı Adı" name="kullanici">

      <label><b>Şifre</b></label>
      <input type="password" placeholder="Şifre" name="sifre">
        
      <button class="button" type="submit" >Giriş Yap</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Kapat</button>
    </div>
  </form>
</div>
<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>