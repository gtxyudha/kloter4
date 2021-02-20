<?php
include "koneksi.php";
$name = $_POST['namacustomer'];
$email = $_POST['email'];
$address = $_POST['address'];
$carsid = $_POST['carsid'];
$quantity = $_POST['quantity'];

   
$selSto =mysqli_query($conn, "SELECT * FROM cars WHERE id='$carsid'");
$sto    =mysqli_fetch_array($selSto);
$stok    =$sto['stock'];
$sisa    =$stok-$quantity;
    
    if ($stok < $quantity) {
        ?>
        <script language="JavaScript">
            alert('Oops! Jumlah Pemesanan lebih besar dari stok ...');
            document.location='./';
        </script>
        <?php
    } else {

                $sql = $pdo->prepare("INSERT INTO customer(name, email, address, cars_id, quantity) VALUES(:name,:email,:address,:carsid,:quantity)");
                $sql->bindParam(':name', $name);
                $sql->bindParam(':email', $email);
                $sql->bindParam(':address', $address);
                $sql->bindParam(':carsid', $carsid);
                $sql->bindParam(':quantity', $quantity);
                $sql->execute();

                $upstok= mysqli_query($conn, "UPDATE cars SET stock='$sisa' WHERE id='$carsid'");
                if($sql){ 
                  header("location: index.php"); 
                }else{
                  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
          }
    }



?>