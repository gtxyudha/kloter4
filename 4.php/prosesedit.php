<?php
include "koneksi.php";
    $id = $_GET['id'];
    $name = $_POST['nama'];
    $fileName = $_FILES['gambar']['name'];
    date_default_timezone_set('Asia/Jakarta');
    $updatetime = date('Y-m-d H:i:s');
    $color = $_POST['color'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];

    if(empty($fileName)){ 
            $sql = $pdo->prepare("UPDATE cars SET name='$name', update_time='$updatetime', color='$color',  description='$description', stock='$stock' WHERE id='$id'");
            $execute = $sql->execute();
            header('location:index.php');
    } else if (!empty($fileName)) {
            $sql = $pdo->prepare("UPDATE cars SET image=:image, name='$name', update_time='$updatetime', color='$color',  description='$description', stock='$stock' WHERE id=:id");
            $sql->bindParam(':image', $fileName);
            $sql->bindParam(':id', $id);
            $data = $sql->fetch();
            $execute = $sql->execute();
            
            move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
            header('location:index.php');

    }    

?>









