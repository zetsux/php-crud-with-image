<html>
<head>
  <title>PHP Student CRUD</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
  <style>
    body {
      background-color: #85FFBD;
      background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
      font-family: "Trirong", serif;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="p-4">
  <h1>Tambah Data Siswa</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
    <table cellpadding="12">
      <tr>
        <td class="form-label">NIS</td>
        <td><input type="text" name="nis" class="form-control" required></td>
      </tr>
      <tr>
        <td class="form-label">Nama</td>
        <td><input type="text" name="nama" class="form-control" required></td>
      </tr>
      <tr>
        <td class="form-label">Jenis Kelamin</td>
        <td>
        <div class="form-check">
          <input class="form-check-input" type="radio" id="laki1" name="jenis_kelamin" value="Laki-laki" checked>
          <label class="form-check-label" for="laki1">
            Laki-laki
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" id="perempuan2" name="jenis_kelamin" value="Perempuan">
          <label class="form-check-label" for="perempuan2">
            Perempuan
          </label>
        </div>
        </td>
      </tr>
      <tr>
        <td class="form-label">Telepon</td>
        <td><input type="text" name="telp" class="form-control" required></td>
      </tr>
      <tr>
        <td class="form-label">Alamat</td>
        <td><textarea name="alamat" class="form-control" required></textarea></td>
      </tr>
      <tr>
        <td class="form-label">Foto</td>
        <td><input type="file" name="foto" required></td>
      </tr>
    </table>
    
    <hr>
    <input type="submit" value="Simpan" class='btn btn-primary'>
    <a href="index.php"><input type="button" value="Batal" class='btn btn-danger'></a>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>