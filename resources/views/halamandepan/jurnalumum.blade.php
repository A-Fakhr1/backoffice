
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
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate1"/>
                                        <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
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
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>No</th>
                    <th>Account ID</th>
                    <th>Account</th>
                    <th>Debit</th>
                    <th>Kredit</th>
                    <th>Debt</th>
                    <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td ><button type="button" class="btn btn-block bg-gradient-danger btn-sm">Hapus</button>
                        <button type="button" class="btn btn-block bg-gradient-success btn-sm">Ubah</button>
                    </td>
                    </tr>
                    </tfoot>
                </table>
                <!-- /.card-body -->
            </div>
            <!-- /button -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
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
