<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Study Material: So-Coaching</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
<hr>

    

    <?php $__env->startSection('content'); ?>
        <center><h1>Study Material: So-Coaching</h1><br><br>
        <?php if(count($materials) >= 1): ?>
            <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <section class="contact-area">
                    <div class="container">
                        <div class="col-12 col-lg-6">
                            <div class="contact--info mt-50 mb-100">
                                <h4>Uploaded By:  <?php echo e($material->name); ?> </h4>
                                <br><h4> Target Audience: <?php echo e($material->target); ?></h4>
                                <p>
                                    <strong>Title:   </strong><?php echo e($material->title); ?><br>
                                    <strong>URL:   </strong><a href="<?php echo e($material->url); ?>"><?php echo e($material->url); ?></a>}<br>
                                    <strong>Full File:   </strong><a href="\storage\SM\<?php echo e($material->attachment); ?>"><?php echo e($material->attachment); ?></a><br>
                                    <small>Uploaded On:   <?php echo e($material->created_at); ?></small><br>
                                    <small>Last Modified At:   <?php echo e($material->updated_at); ?></small><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
                <p>No Study Material for you!! Ask your teacher to update new one</p>
              
        <?php endif; ?>
        </center>   
        <br><br><hr>
        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="/"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +91 8433466260</a>
                <a href="#"><span>Email:</span> admission@socoaching.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lsapp\resources\views/studyMaterial/index.blade.php ENDPATH**/ ?>