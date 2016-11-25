<?php $__env->startSection('page-header'); ?>
    <div class="page-title">
        <div class="container">
            <h2>New Lesson</h2><!--Page Title -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="main-content">
        <div class="fullwidth-block inner-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="storeLesson" class="contact-form" method="post">
                            <?php echo e(csrf_field()); ?>

                            <p>
                                <label for="title">Title</label>
                                <span class="control"><input type="text" id="title" name="title" placeholder="Lesson Title"></span>
                            </p>

                            <p>
                                <label for="Lesson">Lesson</label>
                                <span class="control"><textarea id="Lesson" name="desc" placeholder="Lesson..."></textarea></span>
                            </p>
                            <p >
                                <label for="File">File...</label>
                                <span class="control"><input type="file" name="somename" size="chars"></span>
                            </p>
                            <p class="text-center">
                                <input type="submit" value="Save">
                            </p>
                        </form>
                    </div>

                </div>
            </div>
        </div> <!-- .fullwidth-block -->
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>