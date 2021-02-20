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
  <link rel="stylesheet" type="text/css" href="css/tambahcars.css">
</head>
<body>

  <div class="formtambah">
    <h1>Tambah Data Cars</h1>
    <form method="post" action="prosestambahcars.php" enctype="multipart/form-data">
      <table cellpadding="8">
        <tr>
          <td>Name</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Brand</td>
          <td>
          <select name="brandid" style="width:160px;">
                <?php
                include "koneksi.php";
                $query = mysqli_query($conn, "SELECT id, name FROM brand");
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
          <td>Image</td>
          <td><img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
              <input type="file" id="uploadImage" name="gambar" onchange="preview_image(event)"></td>
        </tr>
        <tr>
          <td>Color</td>
          <td><input type="text" name="color"></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><textarea name="description"></textarea></td>
        </tr>
        <tr>
          <td>Stock</td>
          <td><input type="text" name="stock"></td>
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
