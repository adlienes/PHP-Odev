<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/uyelik_sayfasi.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Uyelik formu</title>
</head>
<body>
<div class="sol"><?php include "solmenu.php";?></div>
<div class="uyeliksag"> 
<h1>Şimdi Kayıt Ol!</h1>
<form name="form1" method="post" action="uyelik_islemleri.php" style="border:1px solid #ccc">
    <div class="container">
	<label><b>Ad Soyad</b></label>
    <input type="text" placeholder="Ad Soyad " name="isim">
	
    <label><b>Kullanıci Adi</b></label>
    <input type="text" placeholder="Kullanici Adı" name="kullanici">
	
	<label><b>E-Mail</b></label>
    <input type="text" placeholder="E-Mail" name="mail">

    <label><b>Şifre</b></label>
    <input type="password" placeholder="Şifre" name="sifre">

    <button type="submit" class="button">Kayıt Ol!</button>
  </div>
</form>

 </div>
 <div class="sag"><?php include "sagmenu.php";?></div>
</body>
</html>