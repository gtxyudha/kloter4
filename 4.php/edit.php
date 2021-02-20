<html>
<head>
  <title>DUMBWAYS Kloter 4</title>
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
  <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>
  <div class="formedit">
        <h1>Ubah Data</h1>
        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $sql = $pdo->prepare("SELECT * FROM cars WHERE id=:id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        $data = $sql->fetch();
        ?>
        <form method="post" action="prosesedit.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
        <table cellpadding="8">
            <tr>
              <td>Name</td>
              <td><input type="text" name="nama" value="<?php echo $data['name']; ?>"></td>
            </tr>
              <td>Image</td>
              <td><img id="uploadPreview" style="width: 150px; height: 150px;" src="gambar/<?php echo $data['image']?>"><br>
                  <input type="file" id="uploadImage" name="gambar" onchange="preview_image(event)"></td>
            </tr>
            <tr>
              <td>Color</td>
              <td><input type="text" name="color" value="<?php echo $data['color']; ?>"></td>
            </tr>
            <tr>
              <td>Description</td>
              <td><textarea name="description"><?php echo $data['description']; ?></textarea></td>
            </tr>
            <tr>
              <td>Stock</td>
              <td><input type="text" name="stock" value="<?php echo $data['stock']; ?>"></td>
            </tr>
          </table>
          <hr>
          <input type="submit" value="Ubah" class="btnubah">
          <a href="index.php"><input type="button" value="Batal" class="btnbatal"></a>
        </form>
  </div>
</body>
</html>