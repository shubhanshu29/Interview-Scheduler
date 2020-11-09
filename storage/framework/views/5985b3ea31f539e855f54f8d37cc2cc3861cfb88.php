    
    <?php $__env->startSection('content'); ?>
        <center>
        <h1>Enter New Meeting Details</h1><hr>
        <?php echo Form::open(['action' => 'InterviewsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

            <div class="form-group" style="width:1000px">
                <?php echo e(Form::label('start_at', 'Start at')); ?>

                <?php echo e(Form::text('start_at', '', ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD HH:MM:SS'])); ?>

            </div>
            <div class="form-group" style="width:1000px">
                <?php echo e(Form::label('end_at', 'Ending Time')); ?>

                <?php echo e(Form::text('end_at', '', ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD HH:MM:SS'])); ?>

            </div>
            <br>
            Select Participants(Atleast 2): 
            <br><br><br>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($user->name); ?> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                    <input type="radio" name="<?php echo $user->id; ?>"  id="1st-choice-q<?php echo $user->id; ?>" value="1"/>Add to meeting
                    <input type="radio" name="<?php echo $user->id; ?>"  id="1st-choice-q<?php echo $user->id; ?>; ?>" value="0" checked/>Dont add to meeting
                </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <br>
            <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

            <a href= "/interviews/view"> <?php echo e(Form::button('View all interviews', ['class'=>'btn btn-primary'])); ?></a>
        <?php echo Form::close(); ?>

        </center>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lsapp\resources\views/front.blade.php ENDPATH**/ ?>