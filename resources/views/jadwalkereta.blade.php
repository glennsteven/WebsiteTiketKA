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
              <li class="breadcrumb-item active">Jadwal Kereta</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="form-grup">
        <center>
          <h1>Table Jadwal</h1>
          <table class="table table-striped">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kereta</th>
                    <th>Asal</th>
                    <th>Tujuan</th>
                    <th>Tanggal Berangkat</th>
                    <th>Tanggal Sampai</th>
                    <th>Kelas</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php  $n=1;?>
                  @foreach($jadwal as $j)
                    <tr>
                        <td><?php echo $n ?></td>
                        <td>{{ $j->nama_kereta }}</td>
                        <td>{{ $j->tujuan }}</td>
                        <td>{{ $j->nama_stasiun }}</td>
                        <td>{{ date('m-d-Y H:i:s', strtotime($j->tgl_berangkat))}}</td>
                        <td>{{ date('m-d-Y H:i:s', strtotime($j->tgl_sampai))}}</td>
                        <td>{{ $j->kelas }}</td>
                        <td>Rp.{{ number_format($j->harga, 0, ',', '.')}}</td>
                        <td><a href="/index/edit/{{ $j->id }}">Update</a>
                        <a href="/index/hilang/{{ $j->id }}">Delete</a></td>
                    </tr>
                    <?php  $n++?>
                  @endforeach
              </tbody>
          </table>
        </center>
    </div>

    <div class="container">
        <center>
          <h1 class="alert alert-primary text-center mt-3">Menambah Rute Stasiun</h1>
          <form method="post" action="/index/tambahjadwal">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nama Kereta</label>
                <input type="text" name="nama_kereta" placeholder="Nama Kereta" class="form-control">
            </div>

            <div class="form-group">
                <label>Stasiun Asal</label>
                <select name="asal" class="form-control">
                @foreach($stasiun as $st)
                    <option value="{{ $st->nama_stasiun }}">{{ $st->nama_stasiun }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Stasiun Tujuan</label>
                <select name="tujuan" class="form-control">
                @foreach($stasiun as $st)
                  <option value="{{ $st->nama_stasiun }}">{{ $st->nama_stasiun }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal Berangkat</label>
                <input type="datetime-local" name="tgl_berangkat" min="{{ date('m-d-Y H:i:s') }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Tanggal Sampai</label>
                <input type="datetime-local" name="tgl_sampai" min="{{ date('m-d-Y H:i:s') }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Kelas</label>
                <select name="kelas" class="form-control">
                    <option value="EKONOMI">EKONOMI</option>
                    <option value="EKSEKUTIF">EKSEKUTIF</option>
                    <option value="BISNIS">BISNIS</option>
                </select>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>

            <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary" value="Tambah Jadwal">
          </form>
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