<?php $img_pading = 10; ?>



<?php $__env->startSection('page-header'); ?>
    <div class="page-title">
        <div class="container">
            <h2>Courses</h2><!--Page Title -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--NB 12-11-2016-->

    <div class="div-selector-courses" >
        Choose the Subject:
        <select style="	height: 46px; line-height: 46px; width:500px; background-color: transparent;">
            <option>Programing Languages</option>
            <option>Mathmatics Stufs</option>
            <option>Phisics</option>

        </select>
    </div>

    <div class="wrapper">
        <div class="row">
            <div class="box">
               <div class="first-inner-box">
                   <img src="assets/images/1.jpg" title="Course">
               </div>
               <div class="second-inner-box">

                   <div class="inner-box-title">C# Course </div>
                   <div class="inner-box-date">2016-11-12</div>
                   <div class="inner-box-description"> In this course we aim to know everything about programing languages and digital world!
                       In this course we aim to know everything about programing languages and digital world!
                       In this course we aim to know everything about programing languages and digital world!
                       In this course we aim to know everything about programing languages and digital world!
                       In this course we aim to know everything about programing languages and digital world!
                       In this course we aim to know everything about programing languages and digital world!
                   </div>
                   <div class="inner-box-details"><a href="#"><< Join >></a></div>


               </div>
            </div>
        </div><!--End of Row-->
        <div class="row">
            <div class="box">
                <div class="first-inner-box">
                    <img src="assets/images/2.jpg" title="Course">
                </div>
                <div class="second-inner-box">

                    <div class="inner-box-title">Collection of amazing programming languages </div>
                    <div class="inner-box-date">2016-11-12</div>
                    <div class="inner-box-description"> In this course we aim to know everything about programing languages and digital world!
                        In this course we aim to know everything about programing languages and digital world!
                        In this course we aim to know everything about programing languages and digital world!
                        In this course we aim to know everything about programing languages and digital world!
                        In this course we aim to know everything about programing languages and digital world!
                        In this course we aim to know everything about programing languages and digital world!
                    </div>
                    <div class="inner-box-details"><a href="#"><< Join >></a></div>


                </div>
            </div>
        </div><!--End of Row-->
        <div class="row">
            <div class="box">
                <div class="first-inner-box">
                    <img src="assets/images/3.jpg" title="Course">
                </div>
                <div class="second-inner-box">

                    <div class="inner-box-title">Machine Language</div>
                    <div class="inner-box-date">2016-11-12</div>
                    <div class="inner-box-description"> In this course we aim to know everything about programing languages and digital world!
                        In this course we aim to know everything about programing languages and digital world!
                        In this course we aim to know everything about programing languages and digital world!
                        In this course we aim to know everything about programing languages and digital world!
                        In this course we aim to know everything about programing languages and digital world!
                        In this course we aim to know everything about programing languages and digital world!
                    </div>
                    <div class="inner-box-details"><a href="#"><< Join >></a></div>


                </div>
            </div>
        </div><!--End of Row-->
     </div><!--End of Wrapper-->


        <div class="next-previous-bar">
            <a href="#"><< Previous</a>
            <?php for($i=0; $i<10; $i++): ?>
                &nbsp;
            <?php endfor; ?>
            <a href="#">Next >></a>
        </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>