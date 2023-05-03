<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('template.head',['title'=>'Jurnal Umum'])

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
              <h1>Jurnal Umum</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Jurnal Umum</li>
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
                  <h3 class="card-title">Jurnal</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <form class="form-horizontal">
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Jurnal</label>
                            <div class="col-sm-8">
                              <input type="" class="form-control" id="" placeholder="Jurnal">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Date</label>
                            <div class="col-sm-8">
                              <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                  data-target="#reservationdate1" />
                                <div class="input-group-append" data-target="#reservationdate1"
                                  data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Document</label>
                            <div class="col-sm-8">
                              <input type="" class="form-control" id="" placeholder="Document">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Reference</label>
                            <div class="col-sm-8">
                              <input type="" class="form-control" id="" placeholder="Reference">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Description</label>
                            <div class="col-sm-8">
                              <input type="" class="form-control" id="" placeholder="Description">
                            </div>
                          </div>
                        </div>
                        <!-- 
                            <div class="card-footer">
                              <button type="submit" class="btn btn-info">Sign in</button>
                              <button type="submit" class="btn btn-default float-right">Cancel</button>
                            </div>
                            <!-- /.card-footer -->
                      </form>
                    </div>
                  </div>
                  <table id="tabel" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Coa</th>
                        <th>Nama Coa</th>
                        <th>Debit</th>
                        <th>Kredit</th>
                        <th>Departemen</th>
                        <th style="text-align: center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      {{-- <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <button type="button" class="btn btn-block bg-gradient-danger btn-xs" data-toggle="modal"
                            data-target="#modalHapus">
                            <i class="fas fa-trash"></i> Hapus</button>
                        </td>
                      </tr> --}}
                      </tfoot>
                  </table>
                  <!-- /.card-body -->
                </div>
                <!-- /button -->
                <div class="card-footer">
                  <button type="submit" id="tambah-baris" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah
                    Baris Baru</button>
                </div>
                <table id="tabel" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th colspan="3"> </th>
                      <th>Debit</th>
                      <th>Kredit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th colspan="3" style="text-align: center">Total</th>
                      <td id="total-debit"> </td>
                      <td id="total-kredit"> </td>
                    </tr>
                    <tr>
                      <th colspan="3" style="text-align: center">Selisih </th>
                      <td colspan="2" id="selisih" style="text-align: center"> </td>
                    </tr>
                    </tfoot>
                </table>
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
<script>
  document.addEventListener("click", function(event) {
if (event.target.classList.contains("hapus-baris")) {
var table = document.getElementById("tabel");
var row = event.target.parentNode.parentNode;
table.deleteRow(row.rowIndex);

var rows = table.rows;
for (var i = 1; i < rows.length; i++) { rows[i].cells[0].innerHTML=i; } updateSum(); updateSelisih(); } });

function sumDebit() {
    var table = document.getElementById("tabel");
    var rows = table.rows;
    var total = 0;
    for (var i = 1; i < rows.length; i++) {
      total += parseInt(rows[i].cells[3].getElementsByTagName("input")[0].value);
    }
    return total;
  }

  function sumKredit() {
    var table = document.getElementById("tabel");
    var rows = table.rows;
    var total = 0;
    for (var i = 1; i < rows.length; i++) {
      total += parseInt(rows[i].cells[4].getElementsByTagName("input")[0].value);
    }
    return total;
  }

  function updateSum() {
    var totalDebit = sumDebit();
    var totalKredit = sumKredit();
    document.getElementById("total-debit").innerHTML = totalDebit;
    document.getElementById("total-kredit").innerHTML = totalKredit;
  }

  function updateSelisih() {
  var sumDeb = sumDebit();
  var sumKre = sumKredit();
  var selisih = sumDeb - sumKre;
  document.getElementById("selisih").innerHTML = selisih;
}

  document.addEventListener("input", function(event) {
    if (event.target.name === "debit[]" || event.target.name === "kredit[]") {
      updateSum();
      updateSelisih();
    }
  });

  document.getElementById("tambah-baris").addEventListener("click", function() {
        var table = document.getElementById("tabel");
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        var cell7 = row.insertCell(6);
        var rowCount = table.rows.length;
        if (rowCount > 1) {
        cell1.innerHTML = rowCount - 1;
        } else {
        cell1.innerHTML = "";
        }
        cell2.innerHTML = "<select name='coa[]'> @foreach($dtCoa as $item) <option value='{{ $item->akun_coa }}'>{{ $item->akun_coa }} - {{$item->nama_coa}} </option>@endforeach</select>";
        cell3.innerHTML = "<input type='text' name='namacoa[]'>";
        cell4.innerHTML = "<input type='number' name='debit[]'>";
        cell5.innerHTML = "<input type='number' name='kredit[]'>";
        cell6.innerHTML = "<input type='text' name='alamat[]'>";
        cell7.innerHTML= "<button class='btn btn-block bg-gradient-danger btn-xs hapus-baris' data-toggle='modal' data-target='#modalHapus' ><i class='fas fa-trash'></i> Hapus</button>"
        updateSum();
        updateSelisih();
    });

    document.addEventListener("DOMContentLoaded", function() {
    updateSum();
    updateSelisih();
    });
    
</script>

</html>