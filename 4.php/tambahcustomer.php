<html>
<head>
  <title>Kloter 4</title>
  <script type='text/javascript'>
        function preview_image(event){
                    var reader = new FileReader();
                    reader.onload = function(){
                        var output = document.getElementById('uploadPreview');
                        output.src = reader.result;
                    }
                    reader.readAsDataURL(event.target.files[0]);
                }
  </script>
  <link rel="stylesheet" type="text/css" href="css/tambahcustomer.css">
</head>
<body>

  <div class="formtambah">
    <h1>Tambah Data Order Customers</h1>
    <form method="post" action="prosestambahcustomer.php" enctype="multipart/form-data">
      <table cellpadding="8">
        <tr>
          <td>Name</td>
          <td><input type="text" name="namacustomer"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><input type="text" name="address"></td>
        </tr>
        <tr>
          <td>Cars</td>
          <td>
            <select name="carsid" style="width:160px;">
                    <?php
                    include "koneksi.php";
                    $query = mysqli_query($conn, "SELECT id, name FROM cars");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?=$data['id'];?>"><?php echo $data['name'];?></option>
                    <?php
                    }
                    ?>
                </select>
          </td>
        </tr>
        <tr>
          <td>Quantity</td>
          <td><input type="text" name="quantity"></td>
        </tr>
        <tr>
      </table>
      <hr>
      <input type="submit" value="Simpan" class="btnsimpan">
      <a href="index.php"><input type="button" value="Batal" class="btnbatal"></a>
    </form>
  </div>
</body>
</html>
