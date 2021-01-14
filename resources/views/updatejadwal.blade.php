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
            <h1 class="m-0 text-dark">Halaman Awal</h1>
            <p>Selamat Datang di halaman Admin Kereta Api Glenn Daniel</p>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Jadwal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
        <center>
          <h1 class="alert alert-primary text-center mt-3">Update Rute Stasiun</h1>
          <form method="post" action="/index/fixedit">
            {{ csrf_field() }}
            <div class="form-group">
            @foreach($jadwal as $j)
                <input type="hidden" name="id" value="{{$j->id}}" class="form-control">
                @endforeach
            </div>
            <div class="form-group">

            @foreach($jadwal as $j)
                <label>Nama Kereta</label>
                <input type="text" name="nama_kereta" value="{{$j->nama_kereta}}" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Stasiun Asal</label>
                <select name="asal" class="form-control">
                    <option value="3">BAGAN BATU</option>
                    <option value="4">BANDUNG</option>
                    <option value="5">MEDAN</option>
                    <option value="6">SEMARANG</option>
                    <option value="12">KULON PROGO</option>
                    <option value="13">SIANTAR</option>
                    <option value="15">SURABAYA</option>
                    <option value="16">TEGAL</option>
                    <option value="17">CIREBON</option>
                    <option value="18">MALANG</option>
                    <option value="19">JAKARTA BARAT</option>
                    <option value="20">JAKARTA SELETAN</option>
                    <option value="21">HOLYWINGS JAKSEL</option>
                    <option value="22">DUGEM SALATIGA</option>
                    <option value="23">BENGKULU</option>
                    <option value="24">BALI</option>
                    <option value="25">BLOTONGAN</option>
                    <option value="26">DIPONEGORO</option>
                    <option value="27">GROBOGAN</option>
                    <option value="28">JEPARA</option>
                    <option value="29">PURBALINGGA</option>
                    <option value="30">PURWOREJO</option>
                    <option value="31">SOLO</option>
                    <option value="32">YOGYAKARTA</option>
                </select>
            </div>

            <div class="form-group">
                <label>Stasiun Tujuan</label>
                <select name="tujuan" class="form-control">
                <option value="3">BAGAN BATU</option>
                    <option value="4">BANDUNG</option>
                    <option value="5">MEDAN</option>
                    <option value="6">SEMARANG</option>
                    <option value="12">KULON PROGO</option>
                    <option value="13">SIANTAR</option>
                    <option value="15">SURABAYA</option>
                    <option value="16">TEGAL</option>
                    <option value="17">CIREBON</option>
                    <option value="18">MALANG</option>
                    <option value="19">JAKARTA BARAT</option>
                    <option value="20">JAKARTA SELETAN</option>
                    <option value="21">HOLYWINGS JAKSEL</option>
                    <option value="22">DUGEM SALATIGA</option>
                    <option value="23">BENGKULU</option>
                    <option value="24">BALI</option>
                    <option value="25">BLOTONGAN</option>
                    <option value="26">DIPONEGORO</option>
                    <option value="27">GROBOGAN</option>
                    <option value="28">JEPARA</option>
                    <option value="29">PURBALINGGA</option>
                    <option value="30">PURWOREJO</option>
                    <option value="31">SOLO</option>
                    <option value="32">YOGYAKARTA</option>
                </select>
            </div>

            <div class="form-group">
            
                <label>Tanggal Berangkat</label>
                <input type="datetime-local" value="{{$j->tgl_berangkat}}" name="tgl_berangkat" min="{{ date('m-d-Y H:i:s') }}" class="form-control">
            
            </div>

            <div class="form-group">
            
                <label>Tanggal Sampai</label>
                <input type="datetime-local" value="{{$j->tgl_sampai}}" name="tgl_sampai" min="{{ date('m-d-Y H:i:s') }}" class="form-control">
            
            </div>

            <div class="form-group">
            
                <label>Kelas</label>
                <select name="kelas" class="form-control">
                    <option value="{{$j->kelas}}">EKONOMI</option>
                    <option value="EKSEKUTIF">EKSEKUTIF</option>
                    <option value="BISNIS">BISNIS</option>
                </select>
            
            </div>

            <div class="form-group">
           
                <label>Harga</label>
                <input type="text" name="harga" value="{{$j->harga}}"class="form-control">
            @endforeach
            </div>

            <div class="form-group">
            
                <label>Status</label>
                <input type="text" name="status" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary" value="Update Jadwal">
          </form>
        </center>
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