<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('template.head',['title'=>'Saldo Awal COA'])
<style>
    td.saldo-awal {
        text-align: right;
    }

    td.saldo-awal:before {
        content: "Rp. ";
        float: left;
    }

    th.total-saldo {
        text-align: right;
    }

    th.total-saldo:before {
        content: "Rp. ";
        float: left;
    }
</style>

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
                            <h1>Saldo Awal COA</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Saldo Awal COA</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Saldo Awal COA</h3>
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
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-form-label">Tanggal</label>
                                                <div class="col-sm-9">
                                                    <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                                        <option>Value 1</option>
                                                        <option>Value 2</option>
                                                        <option>Value 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-form-label">Struktur</label>
                                                <div class="col-sm-9">
                                                    <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                                        <option>Value 1</option>
                                                        <option>Value 2</option>
                                                        <option>Value 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-form-label">Jenis</label>
                                                <div class="col-sm-9">
                                                    <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                                        <option>Value 1</option>
                                                        <option>Value 2</option>
                                                        <option>Value 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="saldoawall" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode COA</th>
                                                <th>Nama COA</th>
                                                <th>Saldo Awal</th>
                                                {{-- <th>Tanggal</th> --}}
                                                {{-- <th>Target</th>
                                                <th>Normal</th> --}}
                                                <th colspan="2" style="text-align: center">Aksi</th>
                                            </tr>
                                        </thead>
                                        @foreach ( $Coaa as $coa )
                                        {{-- modal Edit SaldoAwal --}}
                                        <div class="modal fade" id="modalSaldoawal{{ $coa->id }}" tabindex="-1"
                                            aria-labelledby="modalSaldocoa" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="text-center">Edit Data Saldo Awal</h5>
                                                    </div>
                                                    <form action="{{ route('updatesaldocoa',$coa->akun_coa) }}"
                                                        method="post">
                                                        <div class="modal-body">

                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <label for="">Saldo Awal</label>
                                                                <input type="text" id="saldoawl" name="saldoawl"
                                                                    autocomplete="off" class="form-control" required
                                                                    placeholder="Saldo Awal"
                                                                    value="{{ $coa->saldoCoa == null ? 'null' : $coa->saldoCoa->saldo_awal}}"
                                                                    onfocus="removeZero(this)" onblur="addZero(this)">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Tanggal</label>
                                                                <input type="date" id="tanggl" name="tanggl"
                                                                    class="form-control" autocomplete="off"
                                                                    placeholder="Tanggal">
                                                            </div>


                                                            <button type="submit"
                                                                class="btn btn-primary">Simpan</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            function removeZero(input) {
                                            if (input.value === '0') {
                                            input.value = '';
                                            }
                                            }

                                            function addZero(input) {
                                            if (input.value === '') {
                                            input.value = '0';
                                            }
                                            }
                                        </script>
                                        {{--end modal Edit Saldo awal --}}
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $coa->akun_coa }}</td>
                                                <td>{{ $coa->nama_coa }}</td>
                                                <td class="saldo-awal "> @if ($coa->saldoCoa &&
                                                    $coa->saldoCoa->saldo_awal < 0) ({{ number_format(abs($coa->
                                                        saldoCoa->saldo_awal),0,',','.') }})
                                                        @else
                                                        {{ $coa->saldoCoa ?
                                                        number_format($coa->saldoCoa->saldo_awal,0,',','.') : '' }}
                                                        @endif
                                                </td>
                                                {{-- <td>{{ $coa->saldoCoa->tanggal }}</td> --}}
                                                {{-- <td>-</td>
                                                <td>-</td> --}}
                                                <td>
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#modalSaldoawal{{ $coa->id }}"
                                                        class="btn btn-block bg-gradient-success btn-xs">Ubah</button>
                                                </td>
                                                {{-- <td>
                                                    <button type="button"
                                                        class="btn btn-block bg-gradient-danger btn-xs">Hapus</button>
                                                </td> --}}
                                            </tr>
                                            </tfoot>
                                            @endforeach
                                            <tr>
                                                <th colspan="3" style="text-align: center"> Saldo </th>
                                                <th id="total-saldo" class="total-saldo"> </th>
                                            </tr>
                                    </table>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /button -->
                                {{-- <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div> --}}
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
<script>
    // // mengambil semua elemen td dengan kelas saldo-awal
    // const saldoAwalElements = document.querySelectorAll('td.saldo-awal');
    // let totalSaldo = 0;
    
    // // menjumlahkan nilai dari setiap elemen td saldo-awal
    // saldoAwalElements.forEach((saldoAwalElement) => {
    // const saldoAwal = saldoAwalElement.textContent.replace(/\D/g, ''); // menghapus karakter selain angka
    // totalSaldo += parseInt(saldoAwal);
    // });
    
    // // menampilkan hasil penjumlahan pada elemen th dengan id total-saldo
    // document.getElementById('total-saldo').textContent = `Rp. ${totalSaldo.toLocaleString('id-ID')}`;

    // cara 2 untuk menghitung tabel jika - akan dikurangi
// const saldoAwalElements = document.querySelectorAll('td.saldo-awal');
// let positiveTotal = 0;
// let negativeTotal = 0;

// // menjumlahkan nilai dari setiap elemen td saldo-awal
// saldoAwalElements.forEach((saldoAwalElement) => {
// const saldoAwal = saldoAwalElement.textContent.replace(/\D/g, ''); // menghapus karakter selain angka
// if (saldoAwalElement.textContent.includes('-')) {
// negativeTotal += parseInt(saldoAwal); // menambahkan nilai yang bertanda "-" ke negativeTotal
// } else {
// positiveTotal += parseInt(saldoAwal); // menambahkan nilai ke positiveTotal
// }
// });

// // menghitung total saldo dengan memperhitungkan tanda "-"
// const totalSaldo = positiveTotal - negativeTotal;

// // menampilkan hasil penjumlahan pada elemen th dengan id total-saldo
// document.getElementById('total-saldo').textContent = `Rp. ${totalSaldo.toLocaleString('id-ID')}`;
// cara 3
const saldoAwalElements = document.querySelectorAll('td.saldo-awal');
let totalSaldo = 0;

// menjumlahkan nilai dari setiap elemen td saldo-awal
saldoAwalElements.forEach((saldoAwalElement) => {
const saldoAwal = saldoAwalElement.textContent.replace(/\D/g, ''); // menghapus karakter selain angka
if (saldoAwalElement.textContent.includes('(') && saldoAwalElement.textContent.includes(')')) {
totalSaldo -= parseInt(saldoAwal); // menggunakan operator pengurangan
} else {
totalSaldo += parseInt(saldoAwal); // menggunakan operator penjumlahan
}
});

// menampilkan hasil penjumlahan pada elemen th dengan id total-saldo
document.getElementById('total-saldo').textContent = ` ${totalSaldo.toLocaleString('id-ID')}`;
</script>