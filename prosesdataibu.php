<?php 
include 'koneksi.php';
$namaibu = $_POST['namaibu'];
$tahunlahir = $_POST['tahunlahir'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$penghasilan = $_POST['penghasilan'];
$berkebutuhan = $_POST['berkebutuhan'];

// Menyimpan ke database
$sql = mysqli_query($conn, "INSERT INTO ibukandung (namaibu, tahunlahir, pendidikan, pekerjaan, penghasilan, berkebutuhan) 
VALUES ('$namaibu', '$tahunlahir', '$pendidikan', '$pekerjaan', '$penghasilan', '$berkebutuhan')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Lihat Data Anda?'); window.location.href='tampil.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ibu Kandung Gagal Ditambahkan!!');";
        }
?>