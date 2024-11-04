<x-layout>
  <title>Tambah Surat Masuk</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Surat Masuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/suratmasuk">Surat Masuk</a></li>
              <li class="breadcrumb-item active">Tambah Surat Masuk</li>
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
                          <form action="{{ route('suratmasuk.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                            <div class="form-group">
                                <label>Nomor Agenda :</label>
                                <input type="text" class="form-control" placeholder="{{$newId}}" readonly>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Terima Surat : <b class="text-danger">*</b></label>
                                <input type="date" name="tanggal_terima" class="form-control"  required>
                            </div>
        
                            <div class="form-group">
                                <label>Alamat Pengirim Surat : <b class="text-danger">*</b></label>
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat Pengirim Surat" required>
                            </div>

                            <div class="form-group">
                              <label>Tanggal Surat : <b class="text-danger">*</b></label>
                              <input type="date" name="tanggal_surat" class="form-control" required>
                            </div>
        
                            <div class="form-group">
                                <label>Nomor Surat : <b class="text-danger">*</b></label>
                                <input type="text" name="nomor_surat" class="form-control" placeholder="Nomor Surat" required>
                            </div>
                            
                            <div class="form-group">
                              <label>Perihal : <b class="text-danger">*</b></label>
                              <textarea name="perihal" class="form-control" placeholder="Perihal" style="height: 200px;" required></textarea>
                            </div>

                            <div class="form-group">
                              <label>Surat: <small class="text text-muted">(Maksimal ukuran file 10MB)</small></label>
                              <input type="file" accept=".pdf" name="surat" class="form-control">
                          </div>

                            <div>
                              <i class="text-danger"><b>*</b> Menunjukkan form yang wajib diisi</i>
                              <div class="text-right">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
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