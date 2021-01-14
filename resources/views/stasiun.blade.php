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
            <h1 class="m-0 text-dark">Halaman Stasiun</h1>
            
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Stasiun</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="form-grup">
        <center>
          <h1>Table Stasiun</h1>
          <table class="table table-striped">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Stasiun</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                </tr>
              </thead>
              <tbody>
              <?php $n=1; ?>
                  @foreach($stasiun as $s)
                    <tr>
                        <td scope=><?php echo $n ?></td>
                        <td>{{ $s->nama_stasiun }}</td>
                        <td><a href="/index/hapus/{{ $s->id }}">Delete</a></td>
                        <td><a href="/index/perbaruist/{{ $s->id }}">Update</a></td>
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