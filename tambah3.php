<?php
 
$connect=mysqli_connect("localhost", "id12804678_pkl", "sundealll","id12804678_projectpkl");
 
$query = "SELECT * from kerja ";
$result = mysqli_query($connect,$query) or die(mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(

    "NamaPemesan" => $row["NamaPemesan"],
    "Pesanan" => $row["Pesanan"], 
    "JumlahPesanan" => $row["JumlahPesanan"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA kerja\":" . $data . "}";
?>
