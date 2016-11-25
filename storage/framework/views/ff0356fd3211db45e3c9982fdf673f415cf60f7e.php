<?php $__env->startSection('page-header'); ?>
    <div class="page-title">
        <div class="container">
            <h2>Lessons</h2><!--Page Title -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="main-content">
        <div class="fullwidth-block inner-content">
            <div class="container">
                <div class="fullwidth-content">
                    <h2 class="section-title"><i class="icon-calendar-lg"></i> Lessons</h2>
                    <?php foreach( $lessons as $lesson ): ?>
                    <div class="accordion">
                        <div class="accordion-toggle">
                            <h3><?php echo e($lesson->title); ?></h3>
                            <span class="date"><i class="icon-calendar"></i> 6 APR 2014</span>
                            <span class="location"><i class="icon-map-marker"></i>Yankee Stadium</span>
                        </div>
                        <div class="accordion-content">
                            <p><?php echo e($lesson->desc); ?></p>
                            <div >
                                <a href="makePass" class="button green">make pass</a>
                      <!--          <a href="#" class="button secondary">Ask about details</a> -->
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div> <!-- .fullwidth-block -->
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>