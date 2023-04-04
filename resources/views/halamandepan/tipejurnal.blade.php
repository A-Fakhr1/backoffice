<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('template.head',['title'=>'Tipe Jurnal'])

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

            {{-- modal Tambah tipe jurnal--}}
            <div class="modal fade" id="modalTambahjurnal" tabindex="-1" aria-labelledby="modalTambahjurnal"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="text-center">Tambah Data Tipe Jurnal</h5>
                        </div>
                        <form action="{{ route('tambahtipejurnal') }}" method="post">
                            <div class="modal-body">

                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Tipe Jurnal</label>
                                    <input type="text" id="tipejurn" name="tipejurn" class="form-control"
                                        autocomplete="off" required placeholder="Tipe Jurnal">
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <input type="text" id="deskrip" name="deskrip" autocomplete="off"
                                        class="form-control" required placeholder="Deskripsi">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{--end modal Tambah tipe jurnal --}}

            <!-- Main content -->
            <section class="content" style="margin-top: 50px; margin-bottom: 50px">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Tipe Jurnal</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Tipe Jurnal</li>
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
                                    <h3 class="card-title">Tipe Jurnal</h3>
                                </div>
                                {{-- notife info --}}
                                @if(Session::has('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <ul>
                                        <li>
                                            <strong> {{Session::get('message')}}</strong>
                                        </li>
                                    </ul>
                                </div>
                                @endif

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tipe Jurnal</th>
                                                <th>Deskripsi</th>
                                                <th style="text-align: center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dtJurnal as $item )
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->tipe_jurnal}}</td>
                                                <td>{{$item->deskripsi}}</td>
                                                {{-- <td>
                                                    <button type="button"
                                                        class="btn btn-block bg-gradient-success btn-xs">
                                                        <i class="fas fa-edit"></i> Ubah</button>
                                                </td> --}}
                                                <td>
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#modalHapus{{ $item->id }}"
                                                        class="btn btn-block bg-gradient-danger btn-xs">
                                                        <i class="fas fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                            {{-- modal delete --}}
                                            <div class="modal fade" id="modalHapus{{ $item->id }}" tabindex="-1"
                                                aria-labelledby="modalHapus" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <h5 class="text-center">Apakah anda yakin ingin menghapus
                                                                data <b>{{ $item->tipe_jurnal }}</b> ini ? </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="{{route('hapustipejurnal',$item->id)}}"
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
                                    <button type="submit" data-toggle="modal" data-target="#modalTambahjurnal"
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