<?php $__env->startSection('page-header'); ?>
    <div class="page-title">
        <div class="container">
            <h2>Lessons</h2><!--Page Title -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <p align="center"  data-toggle="dropdown" data-value="rubberBand">
  <center>
    <table align="center" cellpadding="20px" cellpadding="20px" class="boxed-section">
        <tr>
            <td align="center">
                Welcome With Cource 1
            </td>
        </tr>
        <tr>
            <td align="center">
                <img src="assets/images/1.jpg" width="100%" height="100%"/>
            </td>
        </tr>
        <tr>
            <td>
                 In this course we aim to know everything about programing languages and digital world!
            </td>
        </tr>
        <tr>
            <td align="center">
                 Teacher is Khalid Muhammad
                 <br>
                 Computer Science Ph.d
            </td>
        </tr>
        <tr>
            <td align="center">
                <a href="#"><< Back</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#">Join >></a>
            </td>
        </tr>

    </table>
  </center>
</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>