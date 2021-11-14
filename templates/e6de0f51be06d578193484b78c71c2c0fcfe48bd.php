

<?php $__env->startSection('title',$category->name); ?>

<?php $__env->startSection('content'); ?>
    <?php if($category->posts->count() === 0): ?>
        <h2>No Post Found!</h2>
    <?php endif; ?>


    <?php if($category->limit==3): ?>
        <section class="p-4 bg-dark text-white mt-4">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <h6 class="text-decoration-underline text-uppercase">
                        <?php echo e($category->name); ?>

                    </h6>
                </div>

                <div class="row">
                    <?php $__currentLoopData = $category->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-4">
                            <div>
                                <a href="<?php echo e(route("post.show",['slug'=>$post->slug])); ?>"
                                   class="text-decoration-none text-white">
                                    <img class="w-100 py-2"
                                         src="<?php echo e(asset(\Illuminate\Support\Facades\Storage::url($post->avatar))); ?>"
                                         alt="<?php echo e($post->name); ?>"/>
                                    <p>
                                        <?php echo e($post->name); ?>

                                    </p>
                                </a>
                                <a href="<?php echo e(route("post.show",['slug'=>$post->slug])); ?>" type="button"
                                   class="btn btn-outline-light btn-sm">
                                    Read Post
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>

    <?php elseif($category->limit==4): ?>
        <section class="p-4 mt-4">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <h6 class="text-decoration-underline text-uppercase">
                        <?php echo e($category->name); ?>

                    </h6>
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
                                    <h6 class="fw-bold" style="font-size: 14px;"><?php echo e($post->name); ?></h6>

                                    <p style="font-size: 11px;">
                                        <?php echo e(substr(strip_tags($post->description),0, 120)); ?>

                                    </p>
                                </a>
                                <a href="<?php echo e(route("post.show",['slug'=>$post->slug])); ?>" type="button"
                                   class="btn btn-outline-secondary btn-sm">
                                    Read Post
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TEXON\Project\mehedishamim\resources\views/single-category.blade.php ENDPATH**/ ?>