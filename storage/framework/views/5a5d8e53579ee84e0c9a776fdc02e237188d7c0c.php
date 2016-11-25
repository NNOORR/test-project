<?php $__env->startSection('page-header'); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/Examcss/style.css" />
    <script type="text/javascript">
        $(document).ready(function() {
            $('label').click(function() {
                $('label').removeClass('worngans');
                $(this).addClass('worngans');
            });
        });
    </script>

    <div class="page-title">
        <div class="container">
            <h2>Exam</h2><!--Page Title -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="main-content">
        <div class="fullwidth-block inner-content">
            <div class="container">
                <div class="row">
                    <form action="storeLesson" class="contact-form" method="post">
                        <?php echo e(csrf_field()); ?>

                        <!-- question -->
                        <p>
                            <label for="Question">Question</label>
                            <span class="control"><input type="text" id="Question" name="Question" placeholder="Question..."></span>
                        </p>
                            <div class="actions" style="border-bottom: 0px solid #d8ddd6;margin-bottom: 0px;">
                            </div>
                        <!-- answers -->
                            <p>
                               <label for="answer1">Answer 1</label>
                               <span class="control"><input id="Answer" name="Answer" placeholder="Answer..."></span>
                             </p>
                            <p>
                                <label for="answer2">Answer 2</label>
                                <span class="control"><input id="Answer" name="Answer" placeholder="Answer..."></span>
                            </p>
                            <p>
                                <label for="answer3">Answer 3</label>
                                <span class="control"><input id="Answer" name="Answer" placeholder="Answer..."></span>
                            </p>
                            <p>
                                <label for="answer4">Answer 4</label>
                                <span class="control"><input id="Answer" name="Answer" placeholder="Answer..."></span>
                            </p>
                            <p>
                                <label for="answer">Right Answer</label>
                                <select id="browsers">
                                    <option value="default">-
                                    <option value="first">1
                                    <option value="second">2
                                    <option value="third">3
                                    <option value="fourth">4
                                </select>
                            </p>
                            <div class="actions">
                                <a href="#" class="button green">Add More</a>
                                <a href="#" class="button secondary">Submit</a>
                            </div>
                    </form>
                    <!-- YA 2016.11.06   ****** I have to make a from to add questions  ***** this code show exam ^_^
                    <div class="scp-quizzes-main">
                        <div class="scp-quizzes-data">
                            <h3>1. What is the output of the below c code?</h3>
                            <pre>#include&lt;stdio.h>
main()
{
   int x = 5;

   if(x=5)
   {
      if(x=5) printf("Fast");
   }
   printf("learning");
}</pre>
                            <br/>
                            <input type="radio" id="Fastlearning" name="question1">
                            <label for="Fastlearning">1. Fastlearning</label><br/>
                            <input type="radio"  name="question1">
                            <label>2. learning</label><br/>
                            <input type="radio" name="question1">
                            <label>3. learningFast</label> <br/>
                            <input type="radio" name="question1">
                            <label>4. Fast</label>
                        </div>
                        <div class="scp-quizzes-data">
                            <h3>2. How would you insert pre-written code into a current program ?</h3>
                            <pre>#include&lt;stdio.h>
main()
{
   int x = 5;

   if(x=5)
   {
      if(x=5) printf("Fast");
   }
   printf("learning");
}</pre>
                            <br/>
                            <input type="radio" name="question2">
                            <label>1. #read&lt;file></label><br/>
                            <input type="radio"  name="question2">
                            <label>2. #get &lt;file></label><br/>
                            <input type="radio" name="question2" id="inculdefile">
                            <label for="inculdefile">3. #include &lt;file></label> <br/>
                            <input type="radio" name="question2">
                            <label>4. #pre &lt;file></label>
                        </div>
                    </div>-->
                </div>
            </div>
        </div> <!-- .fullwidth-block -->
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>