<html>

<head>
    <title>FORMULIR PESERTA DIDIK</title>
</head>

<body>
    <h1>Report Data Berhasil</h1>
    <?php
include('koneksi.php');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Nomor Pendaftaran');
$sheet->setCellValue('B1', 'Jenis Pendaftaran');
$sheet->setCellValue('C1', 'Tanggal Masuk Sekolah');
$sheet->setCellValue('D1', 'NIS');
$sheet->setCellValue('E1', 'Nomor Peserta Ujian');
$sheet->setCellValue('F1', 'Apakah Pernah PAUD');
$sheet->setCellValue('G1', 'Apakah Pernah TK');
$sheet->setCellValue('H1', 'No. Seri SKHUN Sebelumnya');
$sheet->setCellValue('I1', 'No. Seri Ijazah Sebelumnya');
$sheet->setCellValue('J1', 'Hobi');
$sheet->setCellValue('K1', 'Cita-cita');


$query = mysqli_query($conn, "SELECT * FROM registrasi");
$i = 2;
$id = 1;

while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A'.$i, $id++);
    $sheet->setCellValue('B'.$i, $row['jenispendaftaran']);
    $sheet->setCellValue('C'.$i, $row['tanggalmasuk']);
    $sheet->setCellValue('D'.$i, $row['nis']);
    $sheet->setCellValue('E'.$i, $row['nomerps']);
    $sheet->setCellValue('F'.$i, $row['paud']);
    $sheet->setCellValue('G'.$i, $row['tk']);
    $sheet->setCellValue('H'.$i, $row['skhun']);
    $sheet->setCellValue('I'.$i, $row['ijazah']);
    $sheet->setCellValue('J'.$i, $row['hobi']);
    $sheet->setCellValue('K'.$i, $row['cita']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$i = $i-1;
$sheet->getStyle('A1:K'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Registrasi.xlsx');
?>

    <?php

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Nomor Pendaftaran');
$sheet->setCellValue('B1', 'Nama Lengkap');
$sheet->setCellValue('C1', 'Jenis Kelamin');
$sheet->setCellValue('D1', 'NISN');
$sheet->setCellValue('E1', 'NIK');
$sheet->setCellValue('F1', 'Tempat Lahir');
$sheet->setCellValue('G1', 'Tanggal Lahir');
$sheet->setCellValue('H1', 'Agama');
$sheet->setCellValue('I1', 'Berkebutuhan Khusus');
$sheet->setCellValue('J1', 'Alamat Jalan');
$sheet->setCellValue('K1', 'RT');
$sheet->setCellValue('L1', 'RW');
$sheet->setCellValue('M1', 'Nama Dusun');
$sheet->setCellValue('N1', 'Nama Kelurahan/Desa');
$sheet->setCellValue('O1', 'Kecamatan');
$sheet->setCellValue('P1', 'Kode Pos');
$sheet->setCellValue('Q1', 'Tempat Tinggal');
$sheet->setCellValue('R1', 'Moda Transportasi');
$sheet->setCellValue('S1', 'Nomor HP');
$sheet->setCellValue('T1', 'Nomor Telepon');
$sheet->setCellValue('U1', 'E-mail Pribadi');
$sheet->setCellValue('V1', 'Penerima KPS/PKH/KIP');
$sheet->setCellValue('W1', 'No.KPS/KK/PKH/KIP');
$sheet->setCellValue('X1', 'Kewarganegaraan');
$sheet->setCellValue('Y1', 'Nama Negara');

$query = mysqli_query($conn, "SELECT * FROM datapribadi");
$i = 2;
$id = 1;

while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A'.$i, $id++);
    $sheet->setCellValue('B'.$i, $row['nama_lengkap']);
    $sheet->setCellValue('C'.$i, $row['jenis_kelamin']);
    $sheet->setCellValue('D'.$i, $row['nisn']);
    $sheet->setCellValue('E'.$i, $row['nik']);
    $sheet->setCellValue('F'.$i, $row['tempat_lahir']);
    $sheet->setCellValue('G'.$i, $row['tanggal_lahir']);
    $sheet->setCellValue('H'.$i, $row['agama']);
    $sheet->setCellValue('I'.$i, $row['berkebutuhan_khusus']);
    $sheet->setCellValue('J'.$i, $row['alamat_jalan']);
    $sheet->setCellValue('K'.$i, $row['rt']);
    $sheet->setCellValue('L'.$i, $row['rw']);
    $sheet->setCellValue('M'.$i, $row['nama_dusun']);
    $sheet->setCellValue('N'.$i, $row['kelurahan_desa']);
    $sheet->setCellValue('O'.$i, $row['kecamatan']);
    $sheet->setCellValue('P'.$i, $row['kode_pos']);
    $sheet->setCellValue('Q'.$i, $row['tempat_tinggal']);
    $sheet->setCellValue('R'.$i, $row['transportasi']);
    $sheet->setCellValue('S'.$i, $row['hp']);
    $sheet->setCellValue('T'.$i, $row['telepon']);
    $sheet->setCellValue('U'.$i, $row['email']);
    $sheet->setCellValue('V'.$i, $row['penerima_kps']);
    $sheet->setCellValue('W'.$i, $row['no_kps']);
    $sheet->setCellValue('X'.$i, $row['kewarganegaraan']);
    $sheet->setCellValue('Y'.$i, $row['namaneg']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$i = $i-1;
$sheet->getStyle('A1:Y'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Pribadi Siswa.xlsx');
?>

    <?php

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Nama Ayah Kandung');
$sheet->setCellValue('C1', 'Tahun Lahir');
$sheet->setCellValue('D1', 'Pendidikan');
$sheet->setCellValue('E1', 'Pekerjaan');
$sheet->setCellValue('F1', 'Penghasilan Bulanan');
$sheet->setCellValue('G1', 'Berkebutuhan Khusus');

$query = mysqli_query($conn, "SELECT * FROM ayahkandung");
$i = 2;
$id = 1;

while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A'.$i, $id++);
    $sheet->setCellValue('B'.$i, $row['namaayah']);
    $sheet->setCellValue('C'.$i, $row['tahunlahir']);
    $sheet->setCellValue('D'.$i, $row['pendidikan']);
    $sheet->setCellValue('E'.$i, $row['pekerjaan']);
    $sheet->setCellValue('F'.$i, $row['penghasilan']);
    $sheet->setCellValue('G'.$i, $row['berkebutuhan']);

    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$i = $i-1;
$sheet->getStyle('A1:G'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Ayah Kandung.xlsx');
?>
    <?php

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Nama Ibu Kandung');
$sheet->setCellValue('C1', 'Tahun Lahir');
$sheet->setCellValue('D1', 'Pendidikan');
$sheet->setCellValue('E1', 'Pekerjaan');
$sheet->setCellValue('F1', 'Penghasilan Bulanan');
$sheet->setCellValue('G1', 'Berkebutuhan Khusus');

$query = mysqli_query($conn, "SELECT * FROM ibukandung");
$i = 2;
$id = 1;

while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A'.$i, $id++);
    $sheet->setCellValue('B'.$i, $row['namaibu']);
    $sheet->setCellValue('C'.$i, $row['tahunlahir']);
    $sheet->setCellValue('D'.$i, $row['pendidikan']);
    $sheet->setCellValue('E'.$i, $row['pekerjaan']);
    $sheet->setCellValue('F'.$i, $row['penghasilan']);
    $sheet->setCellValue('G'.$i, $row['berkebutuhan']);

    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$i = $i-1;
$sheet->getStyle('A1:G'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Ibu Kandung.xlsx');
?>
</body>

</html>