<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Kereta Api</title>
    @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.left-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Halaman Data Penumpang Belom Jelas</h1>
            
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Penumpang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="form-grup">
        <center>
          <h1>Table Penumpang</h1>
          <table class="table table-striped">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>N0.Identitas</th>
                    <th>No.Telp</th>
                    <th>Email</th>
                </tr>
              </thead>
              <tbody>
              <?php $n=1; ?>
                  @foreach($penumpang as $p)
                    <tr>
                        
                        <td scope=><?php echo $n ?></td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->no_identitas }}</td>
                        <td>{{ $p->no_telp }}</td>
                        <td>{{ $p->email }}</td>
                    </tr>
                    <?php $n++ ?>
                  @endforeach
              </tbody>
          </table>
        </center>
    </div>

          <div class="col-lg-6">
            
            </div>

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
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
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
</body>
</html>