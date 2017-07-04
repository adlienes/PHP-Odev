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
<h1 style="padding-left:5px;">İletişim</h1>
<p style="font-size:20px;padding-left:5px;">Herhangi bir hata fark ettiyseniz veya DASH'ı nasıl daha iyi hale getireceğiniz konusunda bir fikriniz varsa lütfen bize bildirin!</p>
<div style="margin-top:150px;">
<fieldset>
<legend>İletişim</legend>
<form action='yorum.php?sarki_id=".$GelenID."' method='post'>
<table border='0'>
<tr>
<td><input type='text' name='yorum_cu' placeholder="Ad Soyad" size='25'></td>
</tr>
<tr>
<td><input type='text' name='email_yorumcu' placeholder="E-Mail" size='25'></td>
</tr>
<tr>
<td>
<textarea name='yorum_yaz' style='max-width:650px; height:106px' placeholder="Açıklama" cols='90' rows='100'></textarea>
<tr>
<td align='enter'><input type='submit' name='gonder' class="button" value='Gonder'></td>
</tr>
</table>
</fieldset> 
</div>

</div>

<div class="sag"><?php include "sagmenu.php";?></div>
</div>
</body>
</html>