<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('template.head',['title'=>'Struktur Perusahaan'])

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
                            <h1>Struktur</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Struktur</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Tambah Data Struktur Organisasi / Unit Departemen</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{route('struktursimpan')}}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="">Departemen ID</label>
                                            <input type="text" id="akun_no" required name="akun_no" autocomplete="off"
                                                class="form-control" placeholder="ID Departemen">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama departemen</label>
                                            <input type="text" id="dept_name" required name="dept_name"
                                                autocomplete="off" class="form-control" placeholder="Nama Departemen">
                                        </div>
                                        {{-- <div class="form-group">
                                            <input type="text" id="dept_head" name="dept_head" autocomplete="off"
                                                class="form-control" placeholder="Nama Kepala Departemen">
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="">Keterangan</label>
                                            <textarea id="deskripsi" name="deskripsi" required class="form-control"
                                                placeholder="Keterangan"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">ID Company</label>
                                            <input type="text" id="idcom" required name="idcom" autocomplete="off"
                                                class="form-control" placeholder="ID Company">
                                        </div>
                                        <!-- /.card-body -->
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                                </form>
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