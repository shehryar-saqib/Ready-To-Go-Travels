<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <!--
    <style type="text/css">
        body {
            margin-top: 20px;
            color: #6c7293;
        }
        
    </style>
-->
</head>

<body>

    <!-- ======= Header ======= -->
   <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <br><br>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center" style="background-image: url(assets/img/faqimg.jpg);">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Write a review, make someone's trip</h1><br>
                    <h2>Stories like yours are what helps travelers have better trips. Share your experience and help out a fellow traveler!</h2><br>
                    <form action="<?php echo e(route('faq')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group d-flex search-field">
                            <input type="text" class="form-control" id="description" name="description" placeholder="What are your views about us?">
                            <button type="submit" class="btn btn-primary ml-3" style="background-color: #3b5773">Post</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->
    <br><br>

    <main id="main">
      
            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                    <div class="p-6 flex space-x-2" style="border: 3px solid black; padding: 20px; border-radius: 5px; background-color: #c3c7c5;">
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex-1" style="border: 2px solid #3b5733; padding: 20px; border-radius: 10px; background-color: white;">
                            <div class="flex justify-between items-center">
                               
                                    <div>
                                        <span class="text-gray-800"><i class="bi bi-chat-dots">&nbsp;&nbsp;</i><?php echo e($rv->name); ?></span>
                                        <small class="ml-2 text-sm text-gray-600"><?php echo e($rv->date); ?></small>
                                    </div>
                               
                            </div>
                            <p class="mt-4 text-lg text-gray-900"><?php echo e($rv->description); ?></p>
                        </div>
                        <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                </div>
            </div>
        



    </main>

    <br><br>
    <!-- ======= Footer ======= -->
   <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
<?php /**PATH C:\Users\cw\new\resources\views/faq.blade.php ENDPATH**/ ?>