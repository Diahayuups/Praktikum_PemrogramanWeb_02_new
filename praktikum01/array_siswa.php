<?php
// nilai dengan array asosiatif 
$nilai1 = ["id" => 1, "nim" => "01101", "nilai_uas" => 84, "nilai_uts" => 80, "nilai_tugas" => 78];
$nilai2 = ["id" => 2, "nim" => "01121", "nilai_uas" => 50, "nilai_uts" => 70, "nilai_tugas" => 68];
$nilai3 = ["id" => 3, "nim" => "01130", "nilai_uas" => 86, "nilai_uts" => 60, "nilai_tugas" => 70];
$nilai4 = ["id" => 4, "nim" => "01134", "nilai_uas" => 91, "nilai_uts" => 90, "nilai_tugas" => 82];

// array multidimensi
$all_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>


<body class="hm-gradient">

    <main>

        <!--MDB Tables-->
        <div class="container mt-4">

            <div class="card mb-4">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">
                            <h2 class="pt-3 pb-4 text-center font-bold font-up danger-text">Daftar Nilai Mahasiswa</h2>
                            <h5 class="pb-4 text-center font-bold font-up danger-text">Tugas Praktikum 01 <br>
                                Pemrograman
                                Web 2 <br>
                                Diah ayu puspasari || Teknik Informatika 2302</h5>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <table class="table table-bordered red-border text-center">
                        <thead>
                            <tr class="table-active">
                                <th>No.</th>
                                <th>NIM</th>
                                <th>Nilai UAS</th>
                                <th>Nilai UTS</th>
                                <th>Nilai Tugas</th>
                                <th>Nilai Akhir</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($all_nilai as $nilai): ?>

                                <tr class="table-primary">
                                    <!-- menghitung rata rata dari nilai uas, uts, tugas, kemudian menjadi nilai akhir -->
                                    <?php $nilai_akhir = ($nilai["nilai_uas"] + $nilai["nilai_uts"] + $nilai["nilai_tugas"]) / 3; ?>
                                    <td>
                                        <?= $nilai["id"] ?>
                                    </td>
                                    <td>
                                        <?= $nilai["nim"] ?>
                                    </td>
                                    <td>
                                        <?= $nilai["nilai_uas"] ?>
                                    </td>
                                    <td>
                                        <?= $nilai["nilai_uts"] ?>
                                    </td>
                                    <td>
                                        <?= $nilai["nilai_tugas"] ?>
                                    </td>
                                    <td>
                                        <?= number_format($nilai_akhir, 2, ",", ".") ?>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>


</html>