<?php
  include "koneksi.php";

  $id = $_GET['id'];

  $sql = $pdo->prepare("SELECT foto FROM siswa WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();

  if (is_file("images/".$data['foto'])) unlink("images/".$data['foto']);

  $sql = $pdo->prepare("DELETE FROM siswa WHERE id=:id");
  $sql->bindParam(':id', $id);
  $execute = $sql->execute();
  if ($execute) {
    header("location: index.php");
  } else {
    echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
  }
?>