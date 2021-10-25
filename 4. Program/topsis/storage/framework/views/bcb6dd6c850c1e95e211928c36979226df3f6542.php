<?php $__env->startSection('title'); ?>
    Matriks Solusi Ideal Positif Negatif
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
        <h4 class="card-title">ANALISA MATRIKS SOLUSI IDEAL POSITIF NEGATIF</h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-mahasiswa" class="table table-bordered">
                <thead>
                <tr>
                    <th>Atribut</th>
                    <th>Prestasi (C1)</th>
                    <th>Karya Ilmiah (C2)</th>
                    <th>Bahasa Asing (C3)</th>
                    <th>IPK (C4)</th>
                    <th>Indeks SKS (C5)</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>Positif</b></td>
                        <td><?php echo e($solusi['c1']['positif']); ?> </td>
                        <td><?php echo e($solusi['c2']['positif']); ?></td>
                        <td><?php echo e($solusi['c3']['positif']); ?></td>
                        <td><?php echo e($solusi['c4']['positif']); ?></td>
                        <td><?php echo e($solusi['c5']['positif']); ?></td>
                    </tr>
                    <tr>
                        <td><b>Negatif</b></td>
                        <td><?php echo e($solusi['c1']['negatif']); ?></td>
                        <td><?php echo e($solusi['c2']['negatif']); ?></td>
                        <td><?php echo e($solusi['c3']['negatif']); ?></td>
                        <td><?php echo e($solusi['c4']['negatif']); ?></td>
                        <td><?php echo e($solusi['c5']['negatif']); ?></td>
                    </tr>
                </tbody>



                <tbody>
                </tbody>
            </table>

        </div>
    </div>
</div> <!-- end row -->
<!-- end row -->


<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
        <script type="text/javascript">
            


        </script>
        <?php echo $__env->make("admin.script.form-modal-ajax", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mahasiswaprestasi\resources\views/admin/topsis/matrix_solusi_ideal.blade.php ENDPATH**/ ?>