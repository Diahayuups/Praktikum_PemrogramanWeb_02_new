<?php
if (isset ($_POST["submit"])) {
    require_once "class.php";

    // Set nilai properti pada objek dari nilai yang diisi pada form
    $nama = $_POST["nama"];
    $berat = $_POST["berat"];
    $tinggi = $_POST["tinggi"];
    $umur = $_POST["umur"];
    $jk = $_POST["jk"];

    // Buat objek baru dari class bmiPasien
    $pasien = new bmiPasien($nama, $berat, $tinggi, $umur, $jk);

    echo "<h2>Hasil BMI Pasien</h2>";
    echo "<p>Nama: " . $pasien->nama . "</p>";
    echo "<p>Berat: " . $pasien->berat . " kg</p>";
    echo "<p>Tinggi: " . $pasien->tinggi . " cm</p>";
    echo "<p>Umur: " . $pasien->umur . " tahun</p>";
    echo "<p>Jenis Kelamin: " . $pasien->jk . "</p>";
    echo "<p>Hasil BMI: " . $pasien->hasilBMI() . "</p>";
    echo "<p>Status BMI: " . $pasien->statusBMI() . "</p>";
}

?>

<?php

class bmiPasien
{
    public $nama, $berat, $tinggi, $umur, $jk;

    function __construct($nama, $berat, $tinggi, $umur, $jk)
    {
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
    }

    public function hasilBMI()
    {
        $tinggi_m = $this->tinggi / 100;
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi, 2);
    }

    public function statusBMI()
    {
        $bmi = $this->hasilBMI();
        if ($bmi < 18.5) {
            return "Kekurangan berat badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Berat badan normal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan berat badan";
        } else {
            return "Obesitas";
        }
    }
}