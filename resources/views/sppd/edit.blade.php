<x-layout>
  <title>Edit SPPD</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit SPPD</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('sppd.index')}}">SPPD</a></li>
              <li class="breadcrumb-item active">Edit SPPD</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

                        <!-- general form elements -->
                        <div class="card card-primary">
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form action="{{ route('sppd.update', $sppd->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                              <div class="form-group">
                                <label>Nama/NIP : <b class="text-danger">*</b></label>
                                <input type="text" name="nama" class="form-control" value="{{$sppd->nama}}" required>
                            </div>

                            <div class="form-group">
                              <label>Maksud Perjalanan Dinas : <b class="text-danger">*</b></label>
                              <input type="text" name="maksud" class="form-control" value="{{$sppd->maksud}}" required>
                          </div>

                          <div class="form-group">
                            <label>Tujuan : <b class="text-danger">*</b></label>
                            <input type="text" name="tujuan" class="form-control" value="{{$sppd->tujuan}}" required>
                        </div>

                            <div class="form-group">
                              <label>Tanggal Berangkat : <b class="text-danger">*</b></label>
                              <input type="date" name="tanggal_berangkat" class="form-control" value="{{$sppd->tanggal_berangkat}}" required>
                          </div>

                          <div class="form-group">
                            <label>Tanggal Kembali : <b class="text-danger">*</b></label>
                            <input type="date" name="tanggal_kembali" class="form-control" value="{{$sppd->tanggal_kembali}}" required>
                        </div>
                            
                            <div class="form-group">
                              <label>Keterangan :</label>
                              <input type="text" name="ket" class="form-control" value="{{$sppd->ket}}">
                          </div>

                          <div class="form-group">
                            <label>Surat : <small class="text text-muted">(Maksimal ukuran file 10MB)</small></label>
                            <input type="file" name="surat" accept=".pdf" class="form-control" value="{{$sppd->surat}}">
                        </div>

                        <i class="text-danger"><b>*</b> Menunjukkan form yang wajib diisi</i>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </div>
                        </form>
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

  
  


  </x-layout>