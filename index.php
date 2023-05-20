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

    table td {
      text-align: center;
      vertical-align: middle;
    }

    table th {
      text-align: center;
      vertical-align: middle;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="p-4">
  <h1>Data Siswa</h1>
  <a href="form_simpan.php" class="btn btn-success mt-3">Tambah Data</a><br><br>
  <table border="1" width="100%" class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Foto</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "koneksi.php";

        $sql = $pdo->prepare("SELECT * FROM siswa");
        $sql->execute();
        while ($data = $sql->fetch()) {
          echo "<tr>";
          echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
          echo "<td>".$data['nis']."</td>";
          echo "<td>".$data['nama']."</td>";
          echo "<td>".$data['jenis_kelamin']."</td>";
          echo "<td>".$data['telp']."</td>";
          echo "<td>".$data['alamat']."</td>";
          echo "<td><a href='form_ubah.php?id=".$data['id']."' class='btn btn-primary'>Ubah</a></td>";
          echo "<td><a href='proses_hapus.php?id=".$data['id']."' class='btn btn-danger'>Hapus</a></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>