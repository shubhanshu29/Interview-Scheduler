    

    <?php $__env->startSection('content'); ?>
        <center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Error in adding</div>
                
                <div class="card-body">
                    <?php echo e($message); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<br><br><hr>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lsapp\resources\views/error.blade.php ENDPATH**/ ?>