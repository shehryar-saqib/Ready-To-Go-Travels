<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

<?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>


<body>

<?php echo $__env->make('layouts.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <br/> <br/>
 <br/> <br/>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Add New Admin</h1>
         
        </div>
        <form class="row g-3" method="POST" action="<?php echo e(route('addnewadmins')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" >
            <?php if($errors->has('name')): ?>
            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
            <?php endif; ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" >
            <?php if($errors->has('email')): ?>
            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
            <?php if($errors->has('password')): ?>
            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
            <?php endif; ?>
            </div>
        </div>

    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Add Admin</button>
    </div>
  </form>
  
        
  
        
      </main>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br><br>
  <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\Users\cw\new\resources\views/auth/addadmin.blade.php ENDPATH**/ ?>