<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['NamaPemesan'])) {
$url = 'https://000afifamanatu.000webhostapp.com/tambah2.php';
//$data = "[{\"NamaPemesan\":\".$_POST['NamaPemesan'].\",\"Pesanan\":\".$_POST['Pesanan'].\",\"JumlahPesanan\":\".$_POST['JumlahPesanan'].\"}]";//
$data="{\"NamaPemesan\":\"".$_POST['NamaPemesan']."\",\"Pesanan\":\"".$_POST['Pesanan']."\",\"JumlahPesanan\":\"".$_POST['JumlahPesanan']."\"}";
echo "datanya ".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="tambah1.php">
<table>
<tr>
<td>NamaPemesan</td>
<td><input type="text" name="NamaPemesan" id="NamaPemesan"></td>
</tr>
<tr>
<td>Pesanan</td>
<td><input type="text" name="Pesanan" id="Pesanan"></td>
</tr>
<tr>
<td>JumlahPesanan</td>
<td><input type="text" name="JumlahPesanan" id="JumlahPesanan"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>