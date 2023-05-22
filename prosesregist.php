<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $jenispendaftaran = $_POST['jenispendaftaran'];
        $tanggalmasuk = $_POST['tanggalmasuk'];
        $nis = $_POST['nis'];
        $nomerps= $_POST['nomerps'];
        $paud = $_POST['paud'];
        $tk = $_POST['tk'];
        $skhun = $_POST['skhun'];
        $ijazah = $_POST['ijazah'];
        $hobi = $_POST['hobi'];
        $cita = $_POST['cita'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO registrasi (jenispendaftaran, tanggalmasuk, nis, nomerps, paud, tk, skhun, ijazah, hobi, cita) VALUES ('$jenispendaftaran', '$tanggalmasuk', '$nis', '$nomerps', '$paud', '$tk', '$skhun', '$ijazah', '$hobi', '$cita')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Pribadi!'); window.location.href='formdatapribadi.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Registrasi Gagal Ditambahkan!!');";
        }
      }
?>