<?php
class nilai_mahasiswa
{
    var $matakuliah;
    var $nilai;
    var $nim;

    function __construct($matkul, $nilai, $nim)
    {
        $this->matakuliah = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }
    public function hasilGrade()
    {
        if ($this->nilai <= 35)
            return "E";
        elseif ($this->nilai <= 55)
            return "D";
        elseif ($this->nilai <= 69)
            return "C";
        elseif ($this->nilai <= 84)
            return "B";
        elseif ($this->nilai <= 100)
            return "A";
    }

    public function hasilAkhir()
    {
        if ($this->nilai <= 56)
            return "Tidak Lulus, Tetap semangat dan terus belajar!";
        elseif ($this->nilai >= 57)
            return "Selamat Anda Lulus!";
    }
}
?>