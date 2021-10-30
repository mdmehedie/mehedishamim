<?php $__env->startSection('title',"Mehedi Shamim Personal Site"); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-6 position-relative">
                <div class="m-5">
                    <img src="<?php echo e(asset(storage_url($home->avatar))); ?>" alt="<?php echo e($home->site_name); ?>" class="profile"
                         style="z-index:4;"/>
                    <div class="profile-bg position-absolute">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 d-flex flex-column justify-content-center align-self-stretch flex-grow-1">
                <h1 class="fw-bolder">Unleash Your Creativity</h1>
                <p class="lead">Having a long time of voluntary working experience in INGOs, Mehedi has worked for
                    Media,
                    Startup, RMG Industry, Group of Companies, and eCommerce and owned a digital marketing agency in
                    Dhaka. </p>

                <div class="d-flex align-items-center">
                    <a href="<?php echo e(route('about')); ?>" class="btn btn-outline-dark w-25 mr-5">Find Out more</a>
                    <a href="https://www.facebook.com/mehedishamim" class="px-2"><i class="fab fa-facebook-square fa-2x"
                                                                                    style="color: #1877f2; "></i></a>
                    <a href="https://twitter.com/mehedishamim07" class="px-2"><i class="fab fa-twitter fa-2x"
                                                                                 style="color: #00acee; "></i></a>
                    <a href="https://www.linkedin.com/in/mehedishamim/" class="px-2"><i class="fab fa-linkedin-in fa-2x"
                                                                                        style="color: #0e76a8; "></i></a>
                    <a href="https://www.youtube.com/channel/UCRUAVXDzmP49bjvJoBn_llQ" class="px-2"><i
                            class="fab fa-youtube fa-2x" style="color: red; "></i></a>
                    <a href="#" class="px-2"><i class="fas fa-envelope fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>



    <?php $__currentLoopData = $homeCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $category= $item->category
        ?>



        <?php if($category->limit == 1): ?>

            <section class="py-5">
                <a href="#" class="text-decoration-none text-dark" style="background-color: <?php echo e($category->color); ?>">
                    <div class="container">
                        <div class="row">
                            <?php $__currentLoopData = $category->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div
                                    class="col-sm-6 d-flex p-4 flex-column justify-content-center align-self-stretch flex-grow-1">
                                    <h5 class="text-uppercase text-decoration-underline fw-bold">
                                        <?php echo e($category->name); ?>

                                    </h5>
                                    <h1 class="fw-bolder"
                                        style="font-family: Source Serif Pro;font-size: 40px; font-weight: 600; color: black;">
                                        <?php echo e($post->name); ?>

                                    </h1>
                                    <?php echo substr(strip_tags($post->description),0, 200); ?>

                                    <div class="d-flex text-dark" style="font-size: 12px;">
                                        <p> By <?php echo e($post->user->name); ?></p>
                                        <p class="px-2">|</p>
                                        <p class="px-1 "><?php echo e($post->updated_at->format("M d Y")); ?></p>
                                    </div>

                                </div>

                                <div class="col-sm-6 ">
                                    <div>
                                        <img class="w-100"
                                             src="<?php echo e(asset(\Illuminate\Support\Facades\Storage::url($post->avatar))); ?>"
                                             alt="<?php echo e($post->name); ?>"/>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </a>
            </section>

        <?php elseif($category->limit == 3): ?>

            <section class="p-4 mt-4" style="background-color: <?php echo e($category->color); ?>">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-decoration-underline text-uppercase">
                            <?php echo e($category->name); ?>

                        </h6>

                        <a class="text-decoration-none text-white"
                           href="<?php echo e(route('category.show',['slug'=>$category->slug])); ?>">
                            <p>See More <i class="fa fa-long-arrow-right"></i></p>
                        </a>
                    </div>

                    <div class="row">
                        <?php $__currentLoopData = $category->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-4">
                                <div>
                                    <a href="<?php echo e(route("post.show",['slug'=>$post->slug])); ?>"
                                       class="text-decoration-none text-dark">
                                        <img class="w-100 py-2"
                                             src="<?php echo e(asset(\Illuminate\Support\Facades\Storage::url($post->avatar))); ?>"
                                             alt="<?php echo e($post->name); ?>"/>
                                        <p>
                                            <?php echo e($post->name); ?>

                                        </p>
                                    </a>
                                    <a href="<?php echo e(route("post.show",['slug'=>$post->slug])); ?>" type="button"
                                       class="btn btn-outline-dark btn-sm">
                                        Read Post
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </section>

        <?php elseif($category->limit == 4): ?>

            <section class="p-4 mt-4" style="background-color: <?php echo e($category->color); ?>">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-decoration-underline text-uppercase">
                            <?php echo e($category->name); ?>

                        </h6>
                        <a class="text-decoration-none text-dark"
                           href="<?php echo e(route('category.show',['slug'=>$category->slug])); ?>">
                            <p>See More <i class="fa fa-long-arrow-right"></i></p>
                        </a>
                    </div>

                    <div class="row">
                        <?php $__currentLoopData = $category->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-3">
                                <div>
                                    <a href="<?php echo e(route("post.show",['slug'=>$post->slug])); ?>"
                                       class="text-decoration-none text-dark">
                                        <img class="w-100 py-2"
                                             src="<?php echo e(asset(\Illuminate\Support\Facades\Storage::url($post->avatar))); ?>"
                                             alt="<?php echo e($post->name); ?>"/>
                                        <h6 class="fw-bold" style="font-size: 14px;">
                                            <?php echo e($post->name); ?>

                                        </h6>

                                        <p style="font-size: 11px;">
                                            <?php echo substr(strip_tags($post->description),0, 200); ?>

                                        </p>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </section>

        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/shuvo./Documents/MehediSamimProfile/resources/views/home.blade.php ENDPATH**/ ?>