<!DOCTYPE html>
<html lang="en">

<head>
 <?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <style>
    body{
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
footer{
    margin-top: auto;
}
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
 <?php echo $__env->make('layouts.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <main id="main">
    <!-- ======= Packages Section ======= -->
    <br><br>
    <section id="reservations" class="reservations">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Admin Dashboard</h2>
                <p>Overview of Customer Reservations.</p>
            </div>

            <?php if($errors->any()): ?>
            <div class="error" style="color:red"><h2>Packages within two days cannot be deleted.</h2></div>
               <?php endif; ?>

            <div class="row">
                

                
                
                <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
            
                <div class="col-lg-4 col-md-6  align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200" style="padding-bottom: 20px">
                    <div class="icon-box" style=" ;background-color: #c3c7c5; background-size:cover;"> 
                        <div style="background-color: #c3c7c5 ; border-radius: 10px ;">
                            <h4><a href=""><?php echo e($res->dest); ?> -> <?php echo e($res->firstname); ?> <?php echo e($res->lastname); ?> </a></h4>
                            <img src="data:image/jpg;base64,<?php echo e(chunk_split(base64_encode($res->image))); ?>" width="100" height="100">
                            <p> Departure-Date: <?php echo e($res->d_date); ?></p>
                            <p> Return-Date: <?php echo e($res->r_date); ?></p>
                            <p> Price: <?php echo e($res->price); ?> PKR</p>
                            <p> Number Of People: <?php echo e($res->adults); ?></p>

                           
                            <button class="btn btn-primary" style="background-color:red;border-color: red;"><a href="<?php echo e(route('destroy_adminres',['id'=>$res->id,'date'=>$res->d_date])); ?>">Delete</a></button>
                        </div> 
                    </div>
                </div>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                

        </div>
    </section><!-- End Packages Section -->
</main>

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
    
    </html><?php /**PATH C:\Users\cw\new\resources\views/admindashboard.blade.php ENDPATH**/ ?>