<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('template.head',['title'=>'Data Perusahaan'])

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        {{-- @include('template.sidebar') --}}

        <!-- Content Wrapper. Contains page content -->
        <div class="">
            <!-- Content Header (Page header) -->
            <section class="content-header">

            </section>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content" style="margin-top: 50px; margin-bottom: 50px">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Perusahaan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Perusahaan</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header ">
                                    <h3 class="card-title">Data Perusahaan</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Perusahaan</label>
                                                <input type="email" class="form-control" id=""
                                                    placeholder="Nama Perusahaan">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control" rows="3" placeholder="Alamat"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Pos</label>
                                                <input type="" class="form-control" id="" placeholder="Kode Pos">
                                            </div>
                                            <div class="form-group">
                                                <label>NPWP</label>
                                                <input type="" class="form-control" id="" placeholder="No NPWP">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Pimpinan</label>
                                                <input class="form-control" id="" placeholder="Nama Pimpinan">
                                            </div>
                                            <div class="form-group">
                                                <label>No Telepon</label>
                                                <input type="" class="form-control" id="" placeholder="No Telepon">
                                            </div>
                                            <div class="form-group">
                                                <label>No Fax</label>
                                                <input type="" class="form-control" id="" placeholder="No Fax">
                                            </div>
                                            <div class="form-group">
                                                <label for="1">Email</label>
                                                <input type="" class="form-control" id="" placeholder="Email">
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="col-md-6">
                                            <div>
                                                <label> Setup Person Sign Purchasing Order </label>
                                                <div class="form-group">
                                                    <label for="1">Pemesanan</label>
                                                    <input type="" class="form-control" id=""
                                                        placeholder="Chief Account">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Mengetahui</label>
                                                    <input type="" class="form-control" id=""
                                                        placeholder="Unit Mngr / General Mngr">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Menyetujui</label>
                                                    <input type="" class="form-control" id=""
                                                        placeholder="Direktur / Komisaris">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.form-group -->

                                        <div class="col-md-6">
                                            <div>
                                                <label> Setup Person Sign AR Invoice </label>
                                                <div class="form-group">
                                                    <label for="">Ttd Pembuat</label>
                                                    <input type="" class="form-control" id="" placeholder="Nama">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Jabatan</label>
                                                    <input type="" class="form-control" id="" placeholder="Jabatan">
                                                </div>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->

        @include('template.footer')

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('template.script')

</body>

</html>