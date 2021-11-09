<?php
if (app()->environment() === 'production' && $_SERVER['HTTP_HOST'] != "mehedishamim.com")
    die("Contact with Shuvo | 01749076238");
?>


<html>
<head>
    <title><?php echo $__env->yieldContent('title', 'Welcome to My Profile'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset("assets/favicon/apple-touch-icon.png")); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset("assets/favicon/favicon-32x32.png")); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset("assets/favicon/favicon-16x16.png")); ?>">
    <link rel="manifest" href="<?php echo e(asset("/site.webmanifest")); ?>>

    <link href="<?php echo e(asset('css/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/owl/owl.carousel.min.css')); ?>" rel="stylesheet">

    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"/>

    <?php echo $__env->yieldContent('head'); ?>

</head>


<body>

<?php echo $__env->make('shared.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('shared.drawer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>

</body>

</html>
<?php /**PATH D:\TEXON\Project\mehedishamim\resources\views/layout/app.blade.php ENDPATH**/ ?>