<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = $pdo->prepare("SELECT image FROM cars WHERE id=:id");
$sql->bindParam(':id', $id);
$sql->execute(); 
$data = $sql->fetch(); 
if(is_file("gambar/".$data['image'])) 
  unlink("gambar/".$data['image']); 
$sql = $pdo->prepare("DELETE FROM cars WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  header("location: index.php"); 
}else{
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}