<?php $__env->startSection('title'); ?>
    Jarak Solusi Negatif
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="card-title">ANALISA JARAK SOLUSI NEGATIF</h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-mahasiswa" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Prestasi (C1)</th>
                    <th>Karya Ilmiah (C2)</th>
                    <th>Bahasa Asing (C3)</th>
                    <th>IPK (C4)</th>
                    <th>Indeks SKS (C5)</th>
                    <th>Total</th>
                </tr>
                </thead>


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
            
            $(document).ready(function() {
                $("#table-mahasiswa").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '<?php echo route('admin.topsis.jarak_solusi_negatif'); ?>',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'nama', name: 'nama'},
                        {data:'b_prestasi',name:'b_prestasi'},
                        {data:'b_karya_ilmiah',name:'b_karya_ilmiah'},
                        {data:'b_bahasa_asing',name:'b_bahasa_asing'},
                        {data:'b_ipk',name:'b_ipk'},
                        {data:'b_indeks_sks',name:'b_indeks_sks'},
                        {data:'b_total',name:'b_total'}                        
                    ]
                });
            } );

        </script>
        <?php echo $__env->make("admin.script.form-modal-ajax", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mahasiswaprestasi\resources\views/admin/topsis/jarak_solusi_negatif.blade.php ENDPATH**/ ?>