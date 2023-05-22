<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];
    $alamat_jalan = $_POST['alamat_jalan'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $nama_dusun = $_POST['nama_dusun'];
    $kelurahan_desa = $_POST['kelurahan_desa'];
    $kecamatan = $_POST['kecamatan'];
    $kode_pos = $_POST['kode_pos'];
    $tempat_tinggal = $_POST['tempat_tinggal'];
    $transportasi = $_POST['transportasi'];
    $hp = $_POST['hp'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $penerima_kps = $_POST['penerima_kps'];
    $no_kps = $_POST['no_kps'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $namaneg = $_POST['namaneg'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO datapribadi (nama_lengkap, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus, alamat_jalan, rt, rw, nama_dusun, kelurahan_desa, kecamatan, kode_pos, tempat_tinggal, transportasi, hp, telepon, email, penerima_kps, no_kps, kewarganegaraan, namaneg) VALUES ('$nama_lengkap', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$berkebutuhan_khusus', '$alamat_jalan', '$rt', '$rw', '$nama_dusun', '$kelurahan_desa', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$transportasi', '$hp', '$telepon', '$email', '$penerima_kps', '$no_kps', '$kewarganegaraan', '$namaneg')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Ayah!'); window.location.href='formdatayah.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Diri Gagal Ditambahkan!!');";
        }
      }
?>