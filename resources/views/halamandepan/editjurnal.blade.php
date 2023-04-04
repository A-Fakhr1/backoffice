
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('template.head',['title'=>'Buku Bank'])

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
            <h1>Edit Jurnal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Jurnal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit Jurnal Umum</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <form class="form-horizontal">
                            <div class="card-body">
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">Periode</label>
                                <div class="col-sm-8">
                                  <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="reservation">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- 
                            <div class="card-footer">
                              <button type="submit" class="btn btn-info">Sign in</button>
                              <button type="submit" class="btn btn-default float-right">Cancel</button>
                            </div>
                            card-footer -->
                        </form>
                        </div>
                        
                    </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>No</th>
                    <th>No. Jurnal</th>
                    <th>Tanggal</th>
                    <th>No. Dok</th>
                    <th>Ket</th>
                    <th>Tipe</th>
                    <th>Debit</th>
                    <th>Kredit</th>
                    <th>Selisih</th>
                    <th>Posted</th>
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
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    </tr>
                    </tfoot>
                </table>
                <!-- /.card-body -->
            </div>
            <!-- /button -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
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
