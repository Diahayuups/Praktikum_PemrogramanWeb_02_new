@include('pegawai.header')
@include('admin.sidebar')
<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tugas Praktikum 10</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pegawai</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pegawai</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="assets/img/photo_url.jpg" alt="" class="img-thumbnail"
                            style="width: 150px; height: 150px;">
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td>Diah Ayu Puspasari</td>
                                </tr>
                                <tr>
                                    <th>NIM</th>
                                    <td>0110223052</td>
                                </tr>
                                <tr>
                                    <th>Tempat Tanggal Lahir</th>
                                    <td>Jakarta, 22 Februari 2005</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>Perempuan</td>
                                </tr>
                                <tr>
                                    <th>Divisi</th>
                                    <td>IT</td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td>Manager</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Tugas Praktikum 10 || Diah Ayu Puspasari || Teknik Informatika 2302 || 0110223052 ||
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('pegawai.footer')
