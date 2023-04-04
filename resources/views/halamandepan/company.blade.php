<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('template.head',['title'=>'List Perusahaan'])

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

            {{-- modal Tambah Akun Company --}}
            <div class="modal fade" id="modalTambahcompany" tabindex="-1" aria-labelledby="modalTambahcompany"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="text-center">Tambah Data Akun COA</h5>
                        </div>
                        <form action="{{ route('tambahcompany') }}" method="post">
                            <div class="modal-body">

                                {{ csrf_field() }}
                                {{-- <div class="form-group">
                                    <label for="">ID Company</label>
                                    <input type="text" id="idcom" name="idcom" class="form-control" autocomplete="off"
                                        required placeholder="ID Company ">
                                </div> --}}
                                <div class="form-group">
                                    <label for="">Nama Company</label>
                                    <input type="text" id="namacom" name="namacom" autocomplete="off"
                                        class="form-control" required placeholder="Nama Company">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- end modal Tambah Company --}}

            {{-- modal Edit Company --}}
            @foreach($dtCom as $com)
            <div class="modal fade" id="modalEditcompany{{ $com->id }}" tabindex="-1" aria-labelledby="modalEditcompany"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="text-center">Edit Data Company</h5>
                        </div>

                        <form action="{{ route('updatecompany',$com->id) }}" method="post">
                            <div class="modal-body">

                                {{ csrf_field() }}
                                {{-- <div class="form-group">
                                    <label for="">ID Company</label>
                                    <input type="text" id="idcom" name="idcom" class="form-control" autocomplete="off"
                                        required placeholder="Tipe" value="{{ $com ->id_comp }}">
                                </div> --}}
                                <div class="form-group">
                                    <label for="">Nama Company</label>
                                    <input type="text" id="namacom" name="namacom" autocomplete="off"
                                        class="form-control" required placeholder="Nama Company"
                                        value="{{ $com->nama_company }}">
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- end modal Edit Coa --}}

            <!-- Main content -->
            <section class="content" style="margin-top: 50px; margin-bottom: 50px">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Daftar Perusahaan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Daftar Perusahaan (COMPANY)</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Perusahaan</h3>
                                </div>
                                <!-- /.card-header -->
                                @if(Session::has('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <ul>
                                        <li>
                                            <strong> {{Session::get('message')}}</strong>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Company</th>
                                                <th>Nama Company</th>
                                                <th colspan="2" style="text-align: center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dtCom as $com)

                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$com->id_comp}}</td>
                                                <td>{{$com->nama_company}}</td>
                                                <td>
                                                    {{-- <a href="{{ url($item->id,'editcoa') }}">
                                                        <button type="button"
                                                            class="btn btn-block bg-gradient-success btn-xs">Ubah</button>
                                                    </a> --}}
                                                    <button type="button"
                                                        class="btn btn-block bg-gradient-success btn-xs"
                                                        data-toggle="modal"
                                                        data-target="#modalEditcompany{{ $com->id }}">
                                                        <i class="fas fa-edit"></i> Ubah</button>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-block bg-gradient-danger btn-xs"
                                                        data-toggle="modal" data-target="#modalHapuscomp{{ $com->id }}">
                                                        <i class="fas fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                            {{-- modal delete --}}
                                            <div class="modal fade" id="modalHapuscomp{{ $com->id }}" tabindex="-1"
                                                aria-labelledby="modalHapus" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <h5 class="text-center">Apakah anda yakin ingin menghapus
                                                                data dengan ID Company <b>{{ $com->id_comp }}</b> ?
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="{{route('hapuscompany',$com->id)}}"
                                                                method="post">
                                                                @method('delete')
                                                                {{ csrf_field() }}
                                                                <button type="submit"
                                                                    class="btn btn-primary">Hapus</button>
                                                            </form>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modaldelete --}}
                                            @endforeach
                                            </tfoot>
                                    </table>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /button -->
                                <div class="card-footer">
                                    <button type="button" data-toggle="modal" data-target="#modalTambahcompany"
                                        class="btn btn-primary">Tambah</button>
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