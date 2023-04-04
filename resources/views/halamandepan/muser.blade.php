<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('template.head',['title'=>'Data Pengguna'])

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        {{-- @include('template.sidebar') --}}

        <!-- Content Wrapper. Contains page content //content-wrapper -->
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
                            <h1>Data Pengguna</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Pengguna</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Akun Pengguna</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Level</th>
                                                <th>Company ID</th>
                                                <th colspan="2" style="text-align: center">Aksi</th>
                                            </tr>
                                        </thead>
                                        @foreach ($dtUser as $user)
                                        <tbody>
                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$user->username}}</td>
                                                <td>{{$user->level}}</td>
                                                <td>{{$user->id_comp}}</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-block bg-gradient-success btn-xs"><i
                                                            class="fas fa-edit"></i> Ubah</button>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-block bg-gradient-danger btn-xs"><i
                                                            class="fas fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>

                                            </tr>
                                            </tfoot>
                                            @endforeach
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="button" data-toggle="modal" data-target="#modalTambahuser"
                                        class="btn btn-primary">Tambah <i class="fas fa-plus-square"></i></button>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                {{-- modal Tambah User --}}
                <div class="modal fade" id="modalTambahuser" tabindex="-1" aria-labelledby="modalTambahuser"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="text-center">Tambah Data Pengguna / Akun </h5>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">

                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" id="username" name="username" autocomplete="off"
                                            class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Departemen</label>
                                        <input type="text" id="level" name="level" autocomplete="off"
                                            class="form-control" placeholder="Nama Departemen">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Company ID</label>
                                        <input type="text" id="idcomp" name="idcomp" autocomplete="off"
                                            class="form-control" placeholder="ID Company">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{--end modal Tambah User --}}

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