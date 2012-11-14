<?php
echo '<form action="validasi" method="POST">';
echo $captcha['image'].'<br><br>';
?>
Silahkan masukkan kode sesuai kode diatas : <br>
<?php
echo '<input type="text" size="22" name="captcha">';
echo '<input type="submit" value="Kirim">';
echo '</form>';
?>