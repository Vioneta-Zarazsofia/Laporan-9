<html>

<head>
    <title>FORMULIR PESERTA DIDIK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center">TAMPILAN DATA PESERTA DIDIK</h1><br>
    <div class="card">
        <p>Tanggal : <?php echo date('d F Y'); ?></p>
        <div class="card-header bg-dark text-white">
            REGISTRASI PESERTA DIDIK
        </div>
        <div class="card-body">
            <form method="post" action="logout.php">
                <div class="form-group row">
                    <table class="table table-bordered table-sm">
                        <tr>
                            <th>Jenis Pendaftaran</th>
                            <th>Tanggal Masuk Sekolah</th>
                            <th>NIS</th>
                            <th>Nomor Peserta Ujian</th>
                            <th>Apakah Pernah PAUD</th>
                            <th>Apakah Pernah TK</th>
                            <th>No. Seri SKHUN Sebelumnya</th>
                            <th>No. Seri Ijazah Sebelumnya</th>
                            <th>Hobi</th>
                            <th>Cita-cita</th>
                        </tr>
                        <?php
                    include 'koneksi.php';
                    $registrasi = mysqli_query($conn, "SELECT * FROM registrasi");
                    foreach ($registrasi as $row) {
           

                echo "<tr>
                    <td>" . $row['jenispendaftaran'] . "</td>
                    <td>" . $row['tanggalmasuk'] . "</td>
                    <td>" . $row['nis'] . "</td>
                    <td>" . $row['nomerps'] . "</td>
                    <td>" . $row['paud'] . "</td>
                    <td>" . $row['tk'] . "</td>
                    <td>" . $row['skhun'] . "</td>
                    <td>" . $row['ijazah'] . "</td>
                    <td>" . $row['hobi'] . "</td>
                    <td>" . $row['cita'] . "</td>
                <tr>";
                      
                    }
                    ?>
                    </table>
                </div>
        </div>
        <div class="card-header bg-dark text-white">
            DATA PRIBADI
        </div>
        <div class="card-body">
            <form method="post" action="logout.php">
                <div class="form-group row">
                    <table class="table table-bordered table-sm">
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>NISN</th>
                            <th>NIK</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Berkebutuhan Khusus</th>
                            <th>Alamat Jalan</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Nama Dusun</th>
                            <th>Nama Kelurahan/Desa</th>
                            <th>Kecamatan</th>
                            <th>Kode Pos</th>
                            <th>Tempat Tinggal</th>
                        </tr>
                        <?php
                    include 'koneksi.php';
                    $datapribadi = mysqli_query($conn, "SELECT * FROM datapribadi");
                    foreach ($datapribadi as $row) {
           

                echo "<tr>
                    <td>" . $row['nama_lengkap'] . "</td>
                    <td>" . $row['jenis_kelamin'] . "</td>
                    <td>" . $row['nisn'] . "</td>
                    <td>" . $row['nik'] . "</td>
                    <td>" . $row['tempat_lahir'] . "</td>
                    <td>" . $row['tanggal_lahir'] . "</td>
                    <td>" . $row['agama'] . "</td>
                    <td>" . $row['berkebutuhan_khusus'] . "</td>
                    <td>" . $row['alamat_jalan'] . "</td>
                    <td>" . $row['rt'] . "</td>
                    <td>" . $row['rw'] . "</td>
                    <td>" . $row['nama_dusun'] . "</td>
                    <td>" . $row['kelurahan_desa'] . "</td>
                    <td>" . $row['kecamatan'] . "</td>
                    <td>" . $row['kode_pos'] . "</td>
                    <td>" . $row['tempat_tinggal'] . "</td>
                <tr>";
                      
                    }
                    ?>
                    </table>
                </div>
                <br>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Moda Transportasi</th>
                    <th>Nomor HP</th>
                    <th>Nomor Telepon</th>
                    <th>E-mail Pribadi</th>
                    <th>Penerima KPS/PKH/KIP</th>
                    <th>No.KPS/KK/PKH/KIP</th>
                    <th>Kewarganegaraan</th>
                    <th>Nama Negara</th>

                </tr>
                <?php
                    include 'koneksi.php';
                    $datapribadi = mysqli_query($conn, "SELECT * FROM datapribadi");
                    foreach ($datapribadi as $row) {
           

                echo "<tr>
                <td>" . $row['transportasi'] . "</td>
                    <td>" . $row['hp'] . "</td>
                    <td>" . $row['telepon'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['penerima_kps'] . "</td>
                    <td>" . $row['no_kps'] . "</td>
                    <td>" . $row['kewarganegaraan'] . "</td>
                    <td>" . $row['namaneg'] . "</td>
                <tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>
    <div class="card-header bg-dark text-white">
        DATA AYAH KANDUNG
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Nama Ayah Kandung</th>
                    <th>Tahun Lahir</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan Bulanan</th>
                    <th>Berkebutuhan Khusus</th>
                </tr>
                <?php
                    include 'koneksi.php';
                    $ayahkandung = mysqli_query($conn, "SELECT * FROM ayahkandung");
                    foreach ($ayahkandung as $row) {
           

                echo "<tr>
                    <td>" . $row['namaayah'] . "</td>
                    <td>" . $row['tahunlahir'] . "</td>
                    <td>" . $row['pendidikan'] . "</td>
                    <td>" . $row['pekerjaan'] . "</td>
                    <td>" . $row['penghasilan'] . "</td>
                    <td>" . $row['berkebutuhan'] . "</td>
                <tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>
    <div class="card-header bg-dark text-white">
        DATA IBU KANDUNG
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Nama Ibu Kandung</th>
                    <th>Tahun Lahir</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan Bulanan</th>
                    <th>Berkebutuhan Khusus</th>
                </tr>
                <?php
                    include 'koneksi.php';
                    $ibukandung = mysqli_query($conn, "SELECT * FROM ibukandung");
                    foreach ($ibukandung as $row) {
           

                echo "<tr>
                    <td>" . $row['namaibu'] . "</td>
                    <td>" . $row['tahunlahir'] . "</td>
                    <td>" . $row['pendidikan'] . "</td>
                    <td>" . $row['pekerjaan'] . "</td>
                    <td>" . $row['penghasilan'] . "</td>
                    <td>" . $row['berkebutuhan'] . "</td>
                <tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>
    <form action="reportdataexcll.php" method="POST">
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="report" name="report" class="btn btn-primary">Report Data</button>
            </div>
        </div>
    </form>
    <form action="logout.php" method="POST">
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="keluar" name="keluar" class="btn btn-primary">Log Out</button>
            </div>
        </div>
    </form>


</body>

</html>