<?php
require_once 'header.php';
require_once 'sidebar.php';

$nilai1 = ["id" => 1, "nim" => "01101", "nilai_uas" => 84, "nilai_uts" => 80, "nilai_tugas" => 78];
$nilai2 = ["id" => 2, "nim" => "01121", "nilai_uas" => 50, "nilai_uts" => 70, "nilai_tugas" => 68];
$nilai3 = ["id" => 3, "nim" => "01130", "nilai_uas" => 86, "nilai_uts" => 60, "nilai_tugas" => 70];
$nilai4 = ["id" => 4, "nim" => "01134", "nilai_uas" => 91, "nilai_uts" => 90, "nilai_tugas" => 82];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tugas Praktikum</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Praktikum 01</h3>

                            <!-- <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div> -->
                        </div>
                        <div class="card-body">
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
                                    $all_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
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
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Tugas Praktikum 04
                            <br>
                            Diah ayu puspasari
                            <br>
                            Teknik Informatika 2302
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>