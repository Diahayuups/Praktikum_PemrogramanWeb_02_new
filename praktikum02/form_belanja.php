<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
</head>
<!-- <style>
    .content-wrapper {
        margin: 10px;
        /* Sesuaikan nilai padding sesuai kebutuhan */
    }
</style> -->

<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-8 py-3">
                <!-- <div class="content-wrapper"> -->
                <h3>Belanja Online</h3>
                <hr>
                <?php
                // Proses formulir ketika disubmit
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $costumer = $_POST["costumer"];
                    $produk = $_POST["produk"];
                    $jumlah = (int) $_POST["jumlah"];

                    // Menghitung harga berdasarkan pilihan produk
                    $hargaPerProduk = 0;
                    switch ($produk) {
                        case 'TV':
                            $hargaPerProduk = 4200000;
                            break;
                        case 'Kulkas':
                            $hargaPerProduk = 3100000;
                            break;
                        case 'Mesin Cuci':
                            $hargaPerProduk = 3800000;
                            break;
                    }

                    // Menghitung total harga
                    $totalHarga = $jumlah * $hargaPerProduk;
                }
                ?>

                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="text1" class="col-4 col-form-label">Costumer</label>
                        <div class="col-6">
                            <input name="costumer" placeholder="Nama Costumer" type="text" class="form-control"
                                required="required">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"
                                    required="required">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input"
                                    value="Kulkas" required="required">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input"
                                    value="Mesin Cuci" required="required">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-6">
                            <input name="jumlah" type="number" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-6">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                <!-- </div> -->
            </div>

            <div class="col-md-4 py-3">
                <!-- <div class="content-wrapper"> -->
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Daftar Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TV : 4.200.000</td>
                        </tr>
                        <tr>
                            <td>Kulkas : 3.100.000</td>
                        </tr>
                        <tr>
                            <td>Mesin Cuci : 3.800.000</td>
                        </tr>
                        <tr class="table-danger">
                            <td>Harga Dapat Berubah Setiap Saat</td>
                        </tr>
                    </tbody>
                </table>
                <!-- </div> -->
            </div>
        </div>
        <hr>

        <?php

        // $pilihan = ["tv" => 4200000, "kulkas" => 3100000, "mesin_cuci" => 3800000];
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Tangani data formulir yang dikirim
            $nama_costumer = $_POST["costumer"];
            $produk_pilihan = $_POST["produk"];
            $jumlah_beli = $_POST["jumlah"];

            // menampilkan hasil di bawah formulir
            echo "<h3>Pesanan Anda adalah :</h3>";
            echo "<p>Nama Costumer : $nama_costumer</p>";
            echo "<p>Produk : $produk_pilihan </p>";
            echo "<p>Jumlah : $jumlah_beli </p>";
            // menghitung total belanja
            if (isset($totalHarga)) {
                echo '<div id="total_harga">Total Belanja = Rp. ' . number_format($totalHarga) . '</div>';
            }
        }
        ?>
    </div>
</body>

</html>