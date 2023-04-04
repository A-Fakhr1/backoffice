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

                                    <h3 class="card-title">Struktur Organisasi</h3><br>
                                    <h6 class="">Struktur ini digunakan untuk membedakan unit / departemen head / proyek
                                        dari masing-masing unit dibawah perusahaan</h6>
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
                                                <th>No </th>
                                                <th>ID Departemen</th>
                                                <th>Nama Departemen</th>
                                                {{-- <th>Dept Head</th> --}}
                                                <th>Deskripsi</th>
                                                <th>ID Company</th>
                                                <th colspan="2" style="text-align: center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dtStruktur as $item)
                                            <tr>
                                                <td>{{$loop->index + 1}} </td>
                                                <td>{{$item->akun_no}}</td>
                                                <td>{{$item->dept_name}}</td>
                                                {{-- <td>{{$item->dept_head}}</td> --}}
                                                <td>{{$item->deskripsi}}</td>
                                                <td>{{$item->id_comp}}</td>
                                                <td>
                                                    <a href="#" data-target="#modalUbah{{ $item->id }}"
                                                        data-toggle="modal"
                                                        class="btn btn-block bg-gradient-success btn-xs"><i
                                                            class="fas fa-edit"></i> Ubah</a>
                                                </td>
                                                <td>
                                                    <a href="" data-target="#modalHapus{{ $item->id }}"
                                                        data-toggle="modal"
                                                        class="btn btn-block bg-gradient-danger btn-xs"><i
                                                            class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                            @include('template.modal')

                                            {{-- modal delete --}}
                                            <div class="modal fade" id="modalHapus{{ $item->id }}" tabindex="-1"
                                                aria-labelledby="modalHapus" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <h5 class="text-center">Apakah anda yakin ingin menghapus
                                                                data <b>{{ $item->dept_name}}</b> ? </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="{{route('strukturhapus',$item->id)}}"
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
                                <div class="card-footer">
                                    <a href="{{route('strukturcreate')}}" class="btn btn-success"> Tambah Data <i
                                            class="fas fa-plus-square"></i></a>
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