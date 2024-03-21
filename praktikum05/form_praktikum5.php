<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* CSS untuk Fieldset dan Legend */
        fieldset {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        legend {
            padding: 5px 10px;
            font-weight: bold;
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
            border-radius: 5px;
        }

        .form-group label {
            font-weight: bold;
            /* Menambahkan jarak di sisi kanan label */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <form method="POST" action="form_praktikum5.php">
                    <fieldset>
                        <legend>Form Hasil Ujian</legend>
                        <div class="form-group row">
                            <label for="nim" class="col-4 col-form-label">NIM</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div>
                                    <input id="nim" name="nim" placeholder="Masukan NIM anda" type="text"
                                        class="form-control" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matkul" class="col-4 col-form-label">Pilih Mata kuliah</label>
                            <div class="col-8">
                                <select id="matkul" name="matkul" class="custom-select" required="required">
                                    <option value="Statistika Probalitas">Statistika Probalitas</option>
                                    <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                                    <option value="Basis Data">Basis Data</option>
                                    <option value="Data Werehouse">Data Werehouse</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilai" class="col-4 col-form-label">Nilai</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-sort-numeric-asc"></i>
                                        </div>
                                    </div>
                                    <input id="nilai" name="nilai" placeholder="Masukan Nilai" type="number"
                                        class="form-control" required="required" min="0" max="100">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <hr>
                        <?php
                        if (isset ($_POST["submit"])) {
                            require_once "class_mahasiswa.php";

                            // Set nilai properti pada objek dari nilai yang diisi pada form
                            $nim = $_POST["nim"];
                            $matkul = $_POST["matkul"];
                            $nilai = $_POST["nilai"];

                            // Buat objek baru dari class nilai_mahasiswa
                            $ending = new nilai_mahasiswa($matkul, $nilai, $nim);

                            echo "<h3>Hasil Ujian Anda</h3>";
                            echo "<p>NIM : " . $ending->nim . "</p>";
                            echo "<p>Nama Mata Kuliah : " . $ending->matakuliah . "</p>";
                            echo "<p>Nilai : " . $ending->nilai . "</p>";
                            echo "<p>GRADE : " . $ending->hasilGrade() . "</p>";
                            echo "<p>Hasil Ujian : " . $ending->hasilAkhir() . "</p>";
                        }

                        ?>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>