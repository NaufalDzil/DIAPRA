<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <title>Edit Disposisi</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Disposisi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/suratmasuk">Surat Masuk</a></li>
              <li class="breadcrumb-item"><a href="javascript:history.back()">Disposisi</a></li>
              <li class="breadcrumb-item active">Edit Disposisi</li>
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
                          <form action="<?php echo e(route('disposisi.update', ['suratmasuk' => $suratmasuk->id, 'disposisi' => $disposisi->id])); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                            <div class="card-body">

                              <div class="form-group">
                                <label>Nomor Surat :</label>
                                <input type="text" name="no" class="form-control" value="<?php echo e($disposisi->no); ?>" readonly>
                              </div>

                              <div class="form-group">
                                <label>Tujuan Disposisi : <b class="text-danger">*</b></label>
                                <select name="tujuan" id="tujuan" class="form-control">
                                  <option value="<?php echo e($disposisi->tujuan); ?>"><?php echo e($disposisi->tujuan); ?></option>
                            <?php if( $disposisi->tujuan != 'Sekretaris'): ?>
                                <option value="Sekretaris">Sekretaris</option>
                            <?php endif; ?>
                            <?php if( $disposisi->tujuan != 'Kabid Keluarga Berencana'): ?>
                                <option value="Kabid Keluarga Berencana">Kabid Keluarga Berencana</option>
                            <?php endif; ?>
                            <?php if( $disposisi->tujuan != 'Kabid Keluarga Sejahtera'): ?>
                                <option value="Kabid Keluarga Sejahtera">Kabid Keluarga Sejahtera</option>
                            <?php endif; ?>
                            <?php if( $disposisi->tujuan != 'Kabid Pengendalian Penduduk dan Informasi Data'): ?>
                                <option value="Kabid Pengendalian Penduduk dan Informasi Data">Kabid Pengendalian Penduduk dan Informasi Data</option>
                            <?php endif; ?>
                            <?php if( $disposisi->tujuan != 'Kabid Pemberdayaan Masyarakat'): ?>
                                <option value="Kabid Pemberdayaan Masyarakat">Kabid Pemberdayaan Masyarakat</option>
                            <?php endif; ?>
                                </select>
                              </div>

                          <div class="form-group">
                            <label>Disposisi : <small class="text text-muted">(Maksimal ukuran file 10MB)</small></label>
                            <input type="file" accept=".pdf" name="disposisi" class="form-control">
                        </div>
        
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

  
  


   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH D:\Kuliah\Magang\Web\Web Fix\DIAPRA\resources\views\disposisi\edit.blade.php ENDPATH**/ ?>