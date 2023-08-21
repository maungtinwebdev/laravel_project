<?php $__env->startSection('content'); ?>

    <div class="container">
        
        <h1 class="text-white">Match: <span class="badge badge-primary"><?php echo e($matches->count()); ?></span></h1>

        <div class="row">
            <div class="col-8">Left
                <table class="table table-dark table-striped table-borderd">

                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        
                        <th class="text-center">To Do</th>
                    </tr>
                    <?php $__currentLoopData = $matches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $match): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($match->hometeam); ?></td>
                        <td><?php echo e($match->awayteam); ?></td>
                        <td><?php echo e($match->matchdate); ?></td>
                        <td><a href="<?php echo e(route('matchedit')); ?>"><button class="btn btn-warning mx-2">Edit</button></a>
                            <a href="<?php echo e(url('/matchdelete/'.$match->id.'/destroy/')); ?>"><button class="btn btn-danger">Delete</button></a></td>
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
            <div class="col-4">Right
                <form action="<?php echo e(route('matchcreate')); ?>" method="post" class="m-auto">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="hometeam" placeholder="Home Team" required class="fomrm-group">
                    <input type="text" name="awayteam" placeholder="away Team" required class="fomrm-group">
                    <input type="text" name="matchdate" placeholder="Match Date" required class="fomrm-group">
                    <input type="text" name="matchtime" placeholder="Match Time" required class="fomrm-group">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>


                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Desktop\A Onlineproject\MY_CRUD API\blog\resources\views/match.blade.php ENDPATH**/ ?>