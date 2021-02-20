<?php
include "koneksi.php";
$name = $_POST['nama'];
$brandid = $_POST['brandid'];
$fileName = $_FILES['gambar']['name'];
date_default_timezone_set('Asia/Jakarta');
$createtime = date('Y-m-d H:i:s');
$color = $_POST['color'];
$description = $_POST['description'];
$stock = $_POST['stock'];


$sql = $pdo->prepare("INSERT INTO cars(name, brand_id, image, color, description, create_time, stock) VALUES(:name,:brandid,:image,:color,:description,:createtime,:stock)");
$sql->bindParam(':name', $name);
$sql->bindParam(':brandid', $brandid);
$sql->bindParam(':image', $fileName);
$sql->bindParam(':color', $color);
$sql->bindParam(':description', $description);
$sql->bindParam(':createtime', $createtime);
$sql->bindParam(':stock', $stock);
$sql->execute();
move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']); 
if($sql){ 
  header("location: index.php"); 
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>