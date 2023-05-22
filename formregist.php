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
    $error_jenispendaftaran = "";
    $error_tanggalmasuk = "";
    $error_nis = "";
    $error_nomerps = "";
    $error_paud = "";
    $error_tk = "";
    $error_skhun = "";
    $error_ijazah = "";
    $error_hobi = "";
    $error_cita = "";

    $jenispendidikan = "";
    $tanggalmasuk = "";
    $nis = "";
    $nomerps = "";
    $paud = "";
    $tk = "";
    $skhun = "";
    $ijazah = "";
    $hobi = "";
    $cita = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nis"])) {
            $error_nis = "NIS Tidak Boleh Kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "NIS Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nomerps"])) {
            $error_nomerps = "No Peserta Ujian Tidak Boleh Kosong";
        } else {
            $nomerps = cek_input($_POST["nomerps"]);
            if (!is_numeric($nomerps)) {
                $error_nomerps = "Nomor Peserta Ujian Hanya Boleh Angka";
            }
        }

        if (empty($_POST["skhun"])) {
            $error_skhun = "Nomor Seri SKHUN Tidak Boleh Kosong";
        } else {
            $skhun = cek_input($_POST["skhun"]);
            if (!is_numeric($skhun)) {
                $error_skhun = "Nomor Seri SKHUN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["ijazah"])) {
            $error_ijazah = "No Seri Ijazah Tidak Boleh Kosong";
        } else {
            $ijazah = cek_input($_POST["ijazah"]);
            if (!is_numeric($ijazah)) {
                $error_ijazah = "Nomor Seri Ijazah Hanya Boleh Angka";
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
        <p>Tanggal : <?php echo date('d F Y'); ?></p>
        <div class="card-header bg-dark text-white">
            REGISTRASI PESERTA DIDIK
        </div>
        <div class="card-body">
            <form method="post" action="prosesregist.php">

                <div class="form-group row">
                    <label for="jenispendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                    <div class="col-sm-10">
                        <input type="radio" name="jenispendaftaran" value="Siswa Baru">Siswa Baru</label>
                        <input type="radio" name="jenispendaftaran" value="Pindahan">Pindahan</label>
                        <span class="warning"><?php echo $error_jenispendaftaran; ?></span>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="tanggalmasuk" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                    <div class="col-sm-10">
                        <td>
                            <input type="date" name="tanggalmasuk">
                        </td>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                        <input type="text" name="nis" id="nis"
                            class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>"
                            placeholder="Nomor Induk Siswa" value="<?php echo $nis; ?>"> <span
                            class="warning"><?php echo $error_nis ?></span>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <label for="nomerps" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                    <div class="col-sm-10">
                        <input type="text" name="nomerps" id="nomerps"
                            class="form-control <?php echo ($error_nomerps !="" ? "is-invalid" : ""); ?>"
                            placeholder="No Peserta Ujian" value="<?php echo $nomerps; ?>"> <span
                            class="warning"><?php echo $error_nomerps ?></span>
                    </div>
                </div>

                <br>
                <div class="form-group row">
                    <label for="paud" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                    <div class="col-sm-10">
                        <input type="radio" name="paud" value="Ya">Ya</label>
                        <input type="radio" name="paud" value="Tidak">Tidak</label>
                        <span class="warning"><?php echo $error_paud; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                    <div class="col-sm-10">
                        <input type="radio" name="tk" value="Ya">Ya</label>
                        <input type="radio" name="tk" value="Tidak">Tidak</label>
                        <span class="warning"><?php echo $error_tk; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="skhun" class="col-sm-2 col-form-label">No. Seri SKHUN</label>
                    <div class="col-sm-10">
                        <input type="text" name="skhun" id="skhun"
                            class="form-control <?php echo ($error_skhun !="" ? "is-invalid" : ""); ?>"
                            placeholder="SKHUN Sebelumnya" value="<?php echo $skhun; ?>"> <span
                            class="warning"><?php echo $error_skhun ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ijazah" class="col-sm-2 col-form-label">No. Seri Ijazah</label>
                    <div class="col-sm-10">
                        <input type="text" name="ijazah" id="ijazah"
                            class="form-control <?php echo ($error_ijazah !="" ? "is-invalid" : ""); ?>"
                            placeholder="Seri Ijazah Sebelumnya" value="<?php echo $ijazah; ?>"> <span
                            class="warning"><?php echo $error_ijazah ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="hobi">
                            <option value=""></option>
                            <option value="Olahraga"> Olahraga </option>
                            <option value="Kesenian"> Kesenian</option>
                            <option value="Membaca"> Membaca</option>
                            <option value="Menulis"> Menulis </option>
                            <option value="Traveling"> Traveling </option>
                            <option value="Lainnya"> Lainnya </option>
                        </select>
                        <span class="warning"><?php echo $error_hobi; ?></span>
                    </div>
                </div>

                <br>
                <div class="form-group row">
                    <label for="cita" class="col-sm-2 col-form-label "> Cita Cita </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="cita">
                            <option value=""></option>
                            <option value="PNS"> PNS </option>
                            <option value="TNI/POLRI"> TNI/POLRI</option>
                            <option value="Guru/Dosen"> Guru/Dosen</option>
                            <option value="Dokter"> Dokter </option>
                            <option value="Politikus"> Politikus </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                            <option value="Lainnya"> Lainnya </option>
                        </select>
                        <span class="warning"><?php echo $error_cita; ?></span>
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