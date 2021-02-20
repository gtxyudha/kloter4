<?php
include "koneksi.php";
$namebrand = $_POST['namabrand'];
$sql = $pdo->prepare("INSERT INTO brand(name) VALUES(:name)");
$sql->bindParam(':name', $namebrand);
$sql->execute();
if($sql){ 
  header("location: index.php"); 
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>