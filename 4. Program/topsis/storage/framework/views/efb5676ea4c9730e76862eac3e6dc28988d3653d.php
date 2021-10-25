<?php $__env->startSection('title'); ?>
    Setting Data Kriteria
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">SETTING DATA KRITERIA</h4>
                <form action="<?php echo e(route('admin.setting.bobot')); ?>" method="POST" data-no-reset="true">
                <?php if(isset($c1)): ?>
                <?php
                    $c11 = json_decode($c1);
                ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Bobot Prestasi (C1)  </label>
                              <input type="text" name="w_c1" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($c11->weight); ?>">
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c1" id="" class="form-control">
                              <option value="0" <?php if(!$c11->is_cost): ?>
                                  selected
                              <?php endif; ?>>Benefit</option>
                              <option value="1" <?php if($c11->is_cost): ?>
                                    selected
                                <?php endif; ?>>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(isset($c2)): ?>
                <?php
                    $c22 = json_decode($c2);
                ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Bobot Karya Tulis Ilmiah (C2)  </label>
                              <input type="text" name="w_c2" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($c22->weight); ?>">
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c2" id="" class="form-control">
                              <option value="0" <?php if(!$c22->is_cost): ?>
                                  selected
                              <?php endif; ?>>Benefit</option>
                              <option value="1" <?php if($c22->is_cost): ?>
                                    selected
                                <?php endif; ?>>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(isset($c3)): ?>
                <?php
                    $c33 = json_decode($c3);
                ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Bobot Bahasa Asing (C3)  </label>
                              <input type="text" name="w_c3" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($c33->weight); ?>">
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c3" id="" class="form-control">
                              <option value="0" <?php if(!$c33->is_cost): ?>
                                  selected
                              <?php endif; ?>>Benefit</option>
                              <option value="1" <?php if($c33->is_cost): ?>
                                    selected
                                <?php endif; ?>>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(isset($c4)): ?>
                <?php
                    $c44 = json_decode($c4);
                ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Bobot IPK (C4)  </label>
                              <input type="text" name="w_c4" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($c44->weight); ?>">
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c4" id="" class="form-control">
                              <option value="0" <?php if(!$c44->is_cost): ?>
                                  selected
                              <?php endif; ?>>Benefit</option>
                              <option value="1" <?php if($c44->is_cost): ?>
                                    selected
                                <?php endif; ?>>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(isset($c5)): ?>
                <?php
                    $c55 = json_decode($c5);
                ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Bobot Indeks SKS (C5)  </label>
                              <input type="text" name="w_c5" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($c55->weight); ?>">
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c5" id="" class="form-control">
                              <option value="0" <?php if(!$c55->is_cost): ?>
                                  selected
                              <?php endif; ?>>Benefit</option>
                              <option value="1" <?php if($c55->is_cost): ?>
                                    selected
                                <?php endif; ?>>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Simpan</button>
                 </form>
            </div>
        </div>
    </div>
</div>
<br><br>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make("admin.script.form-modal-ajax", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mahasiswaprestasi\resources\views/admin/setting.blade.php ENDPATH**/ ?>