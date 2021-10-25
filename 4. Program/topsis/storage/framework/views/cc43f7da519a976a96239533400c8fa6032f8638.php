<?php $__env->startSection('title'); ?>
  Dashboard | PEMABEMEMET
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#"></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">SELAMAT DATANG DI APLIKASI PEMABEMEMET !</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->


<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-box float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Ilmu Pendidikan</h6>
            <h4 class="mb-3" data-plugin="counterup"><?php echo e($fip); ?> </h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-tag float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Bahasa dan Seni</h6>
            <h4 class="mb-3"><?php echo e($fbs); ?> </h4>

        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-briefcase float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Teknik</h6>
            <h4 class="mb-3" data-plugin="counterup"><?php echo e($ft); ?> </h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-briefcase float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">FAKULTAS VOKASI</h6>
            <h4 class="mb-3" data-plugin="counterup"><?php echo e($vokasi); ?> </h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-briefcase float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Ilmu Olahraga</h6>
            <h4 class="mb-3" data-plugin="counterup"><?php echo e($fio); ?> </h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-layers float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Matematika dan Ilmu Pengetahuan Alam</h6>
            <h4 class="mb-3"><?php echo e($fmipa); ?> </span></h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-briefcase float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Ilmu Sosial dan Hukum</h6>
            <h4 class="mb-3" data-plugin="counterup"><?php echo e($fish); ?> </h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-briefcase float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Ekonomi</h6>
            <h4 class="mb-3" data-plugin="counterup"><?php echo e($fe); ?> </h4>
        </div>
    </div>
    <h4>Total: <?php echo e($mahasiswa); ?> Mahasiswa </h4>
</div>



<!-- end row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\topsis\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>