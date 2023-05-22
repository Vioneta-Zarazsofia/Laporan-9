<?php 
include 'koneksi.php';
$namaayah = $_POST['namaayah'];
$tahunlahir = $_POST['tahunlahir'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$penghasilan = $_POST['penghasilan'];
$berkebutuhan = $_POST['berkebutuhan'];

// Menyimpan ke database
$sql = mysqli_query($conn, "INSERT INTO ayahkandung (namaayah, tahunlahir, pendidikan, pekerjaan, penghasilan, berkebutuhan) 
VALUES ('$namaayah', '$tahunlahir', '$pendidikan', '$pekerjaan', '$penghasilan', '$berkebutuhan')");
      
      if ($sql) {
        // pesan jika data tersimpan
        echo "<script>alert('Selanjutnya Mengisi Form Data Ibu Kandung!'); window.location.href='formdataibu.php'</script>"; 
      } else {
        // pesan jika data gagal disimpan
          echo "alert('Data Ayah Kandung Gagal Ditambahkan!!');";
      }
?>