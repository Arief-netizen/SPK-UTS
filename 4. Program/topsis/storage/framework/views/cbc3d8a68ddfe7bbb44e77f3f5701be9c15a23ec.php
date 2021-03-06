<?php $__env->startSection('title'); ?>
    Linguistik Fuzzy
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="card-title">ANALISA LINGUISTIK FUZZY</h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-mahasiswa" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Fakultas</th>
                    <th>Prestasi (C1)</th>
                    <th>Karya Ilmiah (C2)</th>
                    <th>Bahasa Asing (C3)</th>
                    <th>IPK (C4)</th>
                    <th>Indeks SKS (C5)</th>
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
                    ajax: '<?php echo route('admin.topsis.linguistik'); ?>',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'nim',name :'nim'},
                        {data:'nama', name: 'nama'},
                        {data:'fakultas',name:'fakultas'},
                        {data:'l_prestasi',name:'l_prestasi'},
                        {data:'l_karya_ilmiah',name:'l_karya_ilmiah'},
                        {data:'l_bahasa_asing',name:'l_bahasa_asing'},
                        {data:'l_ipk',name:'l_ipk'},
                        {data:'l_indeks_sks',name:'l_indeks_sks'}                        
                    ]
                });
            } );

        </script>
        <?php echo $__env->make("admin.script.form-modal-ajax", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mahasiswaprestasi\resources\views/admin/topsis/linguistik.blade.php ENDPATH**/ ?>