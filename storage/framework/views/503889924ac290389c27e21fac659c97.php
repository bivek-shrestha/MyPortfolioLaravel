<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo e(config('app.name', 'Bivek Shrestha')); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Favicon -->
    <link href="<?php echo e(asset('import/assets/img/favicon.ico')); ?>" rel="icon">
    <!-- pacifico font -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('import/assets/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('import/assets/lib/lightbox/css/lightbox.min.css')); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('import/assets/css/style.css')); ?>" rel="stylesheet">
    <style>
        /* Handwritten font style for logo */
        .logo-text {
            font-family: 'Pacifico', cursive;
            font-size: 48px;
            color: #0a0a0b;
            display: inline-block;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    
        .logo-text span.text-primary {
            color: #c4123e; /* Adjust primary color */
        }
    
        
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        
            <a href="<?php echo e(url('/')); ?>" class="brandnav">
                <h1 class="logo-text">
                    <span class="textlogo">Bivek</span> Shrestha
                </h1>
            </a>
            
            
            
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#qualification" class="nav-item nav-link">Quality</a>
                <a href="#skill" class="nav-item nav-link">Skill</a>
                <a href="#service" class="nav-item nav-link">Service</a>
                <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                <a href="#testimonial" class="nav-item nav-link">Review</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-outline-primary d-none d-lg-block">Hire Me</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <?php echo $__env->yieldContent('content'); ?>

       <!-- JavaScript Libraries -->
       <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
       <script src="<?php echo e(asset('import/assets/lib/typed/typed.min.js')); ?>"></script>
       <script src="<?php echo e(asset('import/assets/lib/easing/easing.min.js')); ?>"></script>
       <script src="<?php echo e(asset('import/assets/lib/waypoints/waypoints.min.js')); ?>"></script>
       <script src="<?php echo e(asset('import/assets/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
       <script src="<?php echo e(asset('import/assets/lib/isotope/isotope.pkgd.min.js')); ?>"></script>
       <script src="<?php echo e(asset('import/assets/lib/lightbox/js/lightbox.min.js')); ?>"></script>

       <!-- Contact Javascript File -->
       <script src="<?php echo e(asset('mail/jqBootstrapValidation.min.js')); ?>"></script>
       <script src="<?php echo e(asset('import/assets/mail/contact.js')); ?>"></script>

       <!-- Template Javascript -->
       <script src="<?php echo e(asset('import/assets/js/main.js')); ?>"></script>
   </body>

   </html>
<?php /**PATH C:\laragon\www\Portfolio\resources\views/layouts/app.blade.php ENDPATH**/ ?>