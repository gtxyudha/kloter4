<html>
<head>
  <title>DUMBWAYS Kloter 4</title>
</head>
<body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <h1>Data Base</h1>
  <a href="tambahcars.php">Tambah Data Cars</a><br>
  <a href="tambahbrand.php">Tambah Data Brand</a><br>
  <a href="tambahcustomer.php">Tambah Order Customer</a><br>
  <br><br>
  <table border=1 width="100%">
  <tr class="head">
    <th>ID</th>
    <th>Name</th>
    <th>Brand ID</th>
    <th>Image</th>
    <th>Color</th>
    <th colspan="3">Aksi</th>
  </tr>
  <?php
     include "koneksi.php";
     $sql = $pdo->prepare("SELECT * FROM cars");
     $sql->execute(); 
     while($data = $sql->fetch()){ 
        echo "<tr>";
        echo "<td>".$data['id']."</td>";
        echo "<td>".$data['name']."</td>";
        echo "<td>".$data['brand_id']."</td>";
        echo "<td align='center'><img src='gambar/".$data['image']."' width='100px' height='100px'/></td>";
        echo "<td>".$data['color']."</td>";
        echo "<td align='center'><a href='detail.php?id=".$data['id']."' class='fa fa-eye'>Detail</a></td>";
        echo "<td align='center'><a href='edit.php?id=".$data['id']."' class='fa fa-edit'>Ubah</a></td>";
        echo "<td align='center'><a href='proseshapus.php?id=".$data['id']."' class='fa fa-close'>Hapus</a></td>";
        echo "</tr>";
     }
  ?>
  </table>

  <h2>Tabel Order Customer</h2>
  <table border=1 width="100%">
  <tr class="head">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Cars ID</th>
    <th>quantity</th>
  </tr>
  <?php
     include "koneksi.php";
     $sql = $pdo->prepare("SELECT * FROM customer");
     $sql->execute(); 
     while($data = $sql->fetch()){ 
        echo "<tr>";
        echo "<td>".$data['id']."</td>";
        echo "<td>".$data['name']."</td>";
        echo "<td>".$data['email']."</td>";
        echo "<td>".$data['address']."</td>";
        echo "<td>".$data['cars_id']."</td>";
        echo "<td>".$data['quantity']."</td>";
        echo "</tr>";
     }
  ?>
  </table>
</body>
</html>