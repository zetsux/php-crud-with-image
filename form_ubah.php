<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>

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
  <h1>Ubah Data Siswa</h1>
  <?php
    include "koneksi.php";

    $id = $_GET['id'];

    $sql = $pdo->prepare("SELECT * FROM siswa WHERE id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $data = $sql->fetch();
  ?>
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
    <table cellpadding="12">
      <tr>
        <td class="form-label">NIS</td>
        <td><input type="text" name="nis" value="<?php echo $data['nis']; ?>" class="form-control" required></td>
      </tr>
      <tr>
        <td class="form-label">Nama</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" required></td>
      </tr>
      <tr>
        <td class="form-label">Jenis Kelamin</td>
        <td>
        <?php
          if ($data['jenis_kelamin'] == "Laki-laki") {
            echo '<div class="form-check">
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
            </div>';
          } else {
            echo '<div class="form-check">
              <input class="form-check-input" type="radio" id="laki1" name="jenis_kelamin" value="Laki-laki">
              <label class="form-check-label" for="laki1">
                Laki-laki
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" id="perempuan2" name="jenis_kelamin" value="Perempuan"  checked>
              <label class="form-check-label" for="perempuan2">
                Perempuan
              </label>
            </div>';
          }
        ?>
        </td>
      </tr>
      <tr>
        <td class="form-label">Telepon</td>
        <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>" class="form-control" required></td>
      </tr>
      <tr>
        <td class="form-label">Alamat</td>
        <td><textarea name="alamat" class="form-control" required><?php echo $data['alamat']; ?></textarea></td>
      </tr>
      <tr>
        <td class="form-label">Foto</td>
        <td>
          <input type="file" name="foto" required>
        </td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah" class='btn btn-primary'>
    <a href="index.php"><input type="button" value="Batal" class='btn btn-danger'></a>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>