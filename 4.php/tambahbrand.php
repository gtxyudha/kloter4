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
  <link rel="stylesheet" type="text/css" href="css/tambahbrand.css">
</head>
<body>

  <div class="formtambah">
    <h1>Tambah Data Brand</h1>
    <form method="post" action="prosestambahbrand.php" enctype="multipart/form-data">
      <table cellpadding="8">
        <tr>
          <td>Name Brand</td>
          <td><input type="text" name="namabrand"></td>
        </tr>
      </table>
      <hr>
      <input type="submit" value="Simpan" class="btnsimpan">
      <a href="index.php"><input type="button" value="Batal" class="btnbatal"></a>
    </form>
  </div>
</body>
</html>
