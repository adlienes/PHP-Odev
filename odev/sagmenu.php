<?php
echo '
<div class="liste">
<table>
  <tbody>
    <tr>
	<th>Resim</th>
    <th>Sarkı Adı</th>
    <th>Sarkıcı Adı</th>
    <th>Beğeni</th>
    </tr>';
 
include("ayar.php");
$sql="select * from sarkilar ORDER BY begeni desc Limit 18";
$result=mysqli_query($baglan,$sql);
while($row=mysqli_fetch_assoc($result))
{
	extract($row);
	echo 
	"<tr>
	<td><img  src='{$resim_yolu}' style='width:30px;height:30px;border-radius:20px 20px 20px 20px;'/></td>
	<td>$sarki_adi</td>
	<td>$sarkici_adi</td>
	<td>$begeni</td>
	</tr>";

}
echo 
' </tbody>
</table>
</div>';
?>

