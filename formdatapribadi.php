<?php
    include 'koneksi.php';
?>
<html>

<head>
    <title>FORMULIR PESERTA DIDIK</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

    <?php
    $error_nama_lengkap = "";
    $error_jenis_kelamin = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tempat_lahir = "";
    $error_tanggal_lahir = "";
    $error_agama = "";
    $error_berkebutuhan_khusus = "";
    $error_alamat_jalan = "";
    $error_rt = "";
    $error_rw = "";
    $error_nama_dusun = "";
    $error_kelurahan_desa = "";
    $error_kecamatan = "";
    $error_kode_pos = "";
    $error_tempat_tinggal = "";
    $error_transportasi = "";
    $error_hp = "";
    $error_telepon = "";
    $error_email = "";
    $error_penerima_kps = "";
    $error_no_kps = "";
    $error_kewarganegaraan = "";
    $error_namaneg = "";

    $nama_lengkap = "";
    $jenis_kelamin = "";
    $nisn = "";
    $nik = "";
    $tempat_lahir = "";
    $tanggal_lahir = "";
    $agama = "";
    $berkebutuhan_khusus = "";
    $alamat_jalan = "";
    $rt = "";
    $rw = "";
    $nama_dusun = "";
    $kelurahan_desa = "";
    $kecamatan = "";
    $kode_pos = "";
    $tempat_tinggal = "";
    $transportasi = "";
    $hp = "";
    $telepon = "";
    $email = "";
    $penerima_kps = "";
    $no_kps = "";
    $kewarganegaraan = "";
    $namaneg = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nisn"])) {
            $error_nisn = "NISN Tidak Boleh Kosong";
        } else {
            $nisn = cek_input($_POST["nisn"]);
            if (!is_numeric($nisn)) {
                $error_nisn = "NISN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nik"])) {
            $error_nik = "NIK Tidak Boleh Kosong";
        } else {
            $nik = cek_input($_POST["nik"]);
            if (!is_numeric($nik)) {
                $error_nik = "NIK Hanya Boleh Angka";
            }
        }

        if (empty($_POST["hp"])) {
            $error_hp = "Nomor HP Tidak Boleh Kosong";
        } else {
            $nohp = cek_input($_POST["hp"]);
            if (!is_numeric($nohp)) {
                $error_hp = "Nomor HP Hanya Boleh Angka";
            }
        }

        if (empty($_POST["email"])) {
            $error_email = "Email Tidak Boleh Kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format Email Invalid";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <br>
    <h1 class="text-center">FORMULIR PESERTA DIDIK</h1><br>
    <div class="card">
        <div class="card-header bg-dark text-white">
            DATA PRIBADI
        </div>
        <div class="card-body">
            <form method="post" action="prosesdatapribadi.php">

                <div class="form-group row">
                    <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                            <?php echo ($error_nama_lengkap !="" ? "is-invalid" : ""); ?>" placeholder=""
                            value="<?php echo $nama_lengkap; ?>"> <span
                            class="warning"><?php echo $error_nama_lengkap ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="radio" name="jenis_kelamin" value="Laki Laki">Laki-Laki</label>
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
                        <span class="warning"><?php echo $error_jenis_kelamin; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-10">
                        <input type="text" name="nisn" id="nisn" class="form-control"
                            <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" placeholder=""
                            value="<?php echo $nisn; ?>"> <span class="warning"><?php echo $error_nisn ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" name="nik" id="nik" class="form-control"
                            <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" placeholder="352xxxxxxxx"
                            value="<?php echo $nik; ?>"> <span class="warning"><?php echo $error_nik ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                            <?php echo ($error_tempat_lahir !="" ? "is-invalid" : ""); ?>" placeholder="Tempat Lahir"
                            value="<?php echo $tempat_lahir; ?>"> <span
                            class="warning"><?php echo $error_tempat_lahir ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <td>
                            <input type="date" name="tanggal_lahir">
                        </td>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="agama" class="col-sm-2 col-form-label "> Agama </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="agama">
                            <option value=""></option>
                            <option value="Islam"> Islam </option>
                            <option value="Kristen/Protestan"> Kristen/Protestan </option>
                            <option value="Katholik"> Katholik </option>
                            <option value="Hindu"> Hindu </option>
                            <option value="Budha"> Budha </option>
                            <option value="Konghucu"> Konghucu </option>
                            <option value="Lainnya"> Lainnya </option>
                        </select>
                        <span class="warning"><?php echo $error_agama; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="berkebutuhan_khusus" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="berkebutuhan_khusus">
                            <option value=""></option>
                            <option value="Tidak"> Tidak </option>
                            <option value="Netra (A)"> Netra (A) </option>
                            <option value="Rungu (B)"> Rungu (B) </option>
                            <option value="Grahita Ringan (C)"> Grahita Ringan (C) </option>
                            <option value="Grahita Sedang (C1)"> Grahita Sedang (C1) </option>
                            <option value="Daksa Ringan (D)"> Daksa Ringan (D) </option>
                            <option value="Laras (E)"> Laras (E) </option>
                            <option value="Wicara (F)"> Wicara (F) </option>
                            <option value="Tuna Ganda (G)"> Tuna Ganda (G) </option>
                            <option value="Hiper Aktif (H)"> Hiper Aktif (H) </option>
                            <option value="Cerdas Istimewa (I)"> Cerdas Istimewa (I) </option>
                            <option value="Bakat Istimewa (J)"> Bakat Istimewa (J) </option>
                            <option value="Kesulitan Belajar (K)"> Kesulitan Belajar (K) </option>
                            <option value="Narkoba (N)"> Narkoba (N) </option>
                            <option value="Indigo (O)"> Indigo (O) </option>
                            <option value="Down Syndrom (P)"> Down Syndrom (P) </option>
                            <option value="Autis (Q)"> Autis (Q) </option>
                            <option value="Lainnya"> Lainnya </option>
                        </select>
                        <span class="warning"><?php echo $error_berkebutuhan_khusus; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat_jalan" class="col-sm-2 col-form-label">Alamat Jalan</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat_jalan" id="alamat_jalan" class="form-control"
                            <?php echo ($error_alamat_jalan !="" ? "is-invalid" : ""); ?>" placeholder="Alamat Jalan"
                            value="<?php echo $alamat_jalan; ?>"> <span
                            class="warning"><?php echo $error_alamat_jalan ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rt" class="col-sm-2 col-form-label">RT</label>
                    <div class="col-sm-10">
                        <input type="text" name="rt" id="rt" class="form-control"
                            <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" placeholder="XX"
                            value="<?php echo $rt; ?>"> <span class="warning"><?php echo $error_rt ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rw" class="col-sm-2 col-form-label">RW</label>
                    <div class="col-sm-10">
                        <input type="text" name="rw" id="rw" class="form-control"
                            <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" placeholder="XX"
                            value="<?php echo $rw; ?>"> <span class="warning"><?php echo $error_rw ?></span>
                    </div>
                </div>

                <br>
                <div class="form-group row">
                    <label for="nama_dusun" class="col-sm-2 col-form-label">Nama Dusun</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_dusun" id="nama_dusun" class="form-control"
                            <?php echo ($error_nama_dusun !="" ? "is-invalid" : ""); ?>" placeholder="Nama Dusun"
                            value="<?php echo $nama_dusun; ?>"> <span
                            class="warning"><?php echo $error_nama_dusun ?></span>
                    </div>
                </div> <br>


                <div class="form-group row">
                    <label for="kelurahan_desa" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
                    <div class="col-sm-10">
                        <input type="text" name="kelurahan_desa" id="kelurahan_desa" class="form-control"
                            <?php echo ($error_kelurahan_desa !="" ? "is-invalid" : ""); ?>"
                            placeholder="Nama Kelurahan/Desa" value="<?php echo $kelurahan_desa; ?>"> <span
                            class="warning"><?php echo $error_kelurahan_desa ?></span>
                    </div>
                </div> <br>


                <div class="form-group row">
                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <input type="text" name="kecamatan" id="kecamatan" class="form-control"
                            <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" placeholder="Kecamatan"
                            value="<?php echo $kecamatan; ?>"> <span
                            class="warning"><?php echo $error_kecamatan ?></span>
                    </div>
                </div> <br>


                <div class="form-group row">
                    <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
                    <div class="col-sm-10">
                        <input type="text" name="kode_pos" id="kode_pos" class="form-control"
                            <?php echo ($error_kode_pos !="" ? "is-invalid" : ""); ?>" placeholder="xxxxxx"
                            value="<?php echo $kode_pos; ?>"> <span class="warning"><?php echo $error_kode_pos ?></span>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <label for="tempat_tinggal" class="col-sm-2 col-form-label "> Tempat Tinggal </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="tempat_tinggal">
                            <option value=""></option>
                            <option value="Bersama Orang Tua"> Bersama Orang Tua </option>
                            <option value="Wali"> Wali </option>
                            <option value="Kos"> Kos </option>
                            <option value="Asrama"> Asrama </option>
                            <option value="Panti Asuhan"> Panti Asuhan </option>
                            <option value="Lainnya"> Lainnya </option>
                        </select>
                        <span class="warning"><?php echo $error_tempat_tinggal; ?></span>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <label for="transportasi" class="col-sm-2 col-form-label "> Moda Transportasi </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="transportasi">
                            <option value=""></option>
                            <option value="Jalan Kaki"> Jalan Kaki </option>
                            <option value="Kendaraan Pribadi"> Kendaraan Pribadi </option>
                            <option value="Kendaraan Umum/Angkot/Pete-Pete"> Kendaraan Umum/Angkot/Pete-Pete
                            </option>
                            <option value="Jemputan Sekolah"> Jemputan Sekolah </option>
                            <option value="Kereta Api"> Kereta Api </option>
                            <option value="Ojek"> Ojek </option>
                            <option value="Andong/Bedi/Sado/Dokar/Delman/Becak"> Andong/Bedi/Sado/Dokar/Delman/Becak
                            </option>
                            <option value="Perahu Penyebrangan/Rakit/Getek"> Perahu Penyebrangan/Rakit/Getek
                            </option>
                            <option value="Lainnya"> Lainnya </option>
                        </select>
                        <span class="warning"><?php echo $error_transportasi; ?></span>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <label for="hp" class="col-sm-2 col-form-label">Nomor HP</label>
                    <div class="col-sm-10">
                        <input type="text" name="hp" id="hp" class="form-control"
                            <?php echo ($error_hp !="" ? "is-invalid" : ""); ?>" placeholder="XXXXXXXXXX"
                            value="<?php echo $hp; ?>"> <span class="warning"><?php echo $error_hp ?></span>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <label for="telepon" class="col-sm-2 col-form-label">Nomor Telp</label>
                    <div class="col-sm-10">
                        <input type="text" name="telepon" id="telepon" class="form-control"
                            <?php echo ($error_telepon !="" ? "is-invalid" : ""); ?>" placeholder="XXXXXXXXXX"
                            value="<?php echo $telepon; ?>"> <span class="warning"><?php echo $error_telepon ?></span>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email Pribadi</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" id="email" class="form-control"
                            <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" placeholder="...@gmail.com"
                            value="<?php echo $email; ?>"> <span class="warning"><?php echo $error_email ?></span>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <label for="penerima_kps" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
                    <div class="col-sm-10">
                        <input type="radio" name="penerima_kps" value="Ya">Ya</label>
                        <input type="radio" name="penerima_kps" value="Tidak">Tidak</label>
                        <span class="warning"><?php echo $error_penerima_kps; ?></span>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <label for="no_kps" class="col-sm-2 col-form-label">Nomor KPS/PKH/KIP</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_kps" id="no_kps" class="form-control"
                            <?php echo ($error_no_kps !="" ? "is-invalid" : ""); ?>" placeholder="XXXXXXXXXX"
                            value="<?php echo $no_kps; ?>"> <span class="warning"><?php echo $error_no_kps ?></span>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                    <div class="col-sm-10">
                        <input type="radio" name="kewarganegaraan" value="Indonesia (WNI)">Indonesia (WNI)</label>
                        <input type="radio" name="kewarganegaraan" value="Asing (WNA)">Asing (WNA)</label>
                        <span class="warning"><?php echo $error_kewarganegaraan; ?></span>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <label for="namaneg" class="col-sm-2 col-form-label">Nama Negara</label>
                    <div class="col-sm-10">
                        <input type="text" name="namaneg" id="namaneg" class="form-control"
                            <?php echo ($error_namaneg !="" ? "is-invalid" : ""); ?>" placeholder=""
                            value="<?php echo $namaneg; ?>"> <span class="warning"><?php echo $error_namaneg ?></span>
                    </div>
                </div>

                <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>