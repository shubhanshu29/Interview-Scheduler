<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>All interviews</title>


    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>



<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">All interviews</div>
                
                <div class="card-body">

                <?php $__currentLoopData = $interviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p>Interview Id: <?php echo e($interview->id); ?><br> 
                        Start Time: <?php echo e($interview->start_at); ?><br>
                        End Time: <?php echo e($interview->end_at); ?><br>
                        Participants(User ID): 
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($interview->$user==1): ?>
                                <?php echo e($user); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p><br><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><hr>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lsapp\resources\views/home.blade.php ENDPATH**/ ?>