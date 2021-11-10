<?php $__env->startSection('title',"Mehedi Shamim Personal Site"); ?>

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item->posts->count() === 0): ?>
            <?php continue; ?>
        <?php endif; ?>

        <?php if($item->limit==3): ?>
            <section class="p-4 bg-dark text-white mt-4">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-decoration-underline text-uppercase">
                            <?php echo e($item->name); ?>

                        </h6>

                        <a class="text-decoration-none text-white"
                           href="<?php echo e(route('category.show',['slug'=>$item->slug])); ?>">
                            <p>See More <i class="fa fa-long-arrow-right"></i></p>
                        </a>
                    </div>

                    <div class="row">
                        <?php $__currentLoopData = $item->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

        <?php elseif($item->limit==4): ?>
            <section class="p-4 mt-4">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-decoration-underline text-uppercase">
                            <?php echo e($item->name); ?>

                        </h6>
                        <a class="text-decoration-none text-dark"
                           href="<?php echo e(route('category.show',['slug'=>$item->slug])); ?>">
                            <p>See More <i class="fa fa-long-arrow-right"></i></p>
                        </a>
                    </div>

                    <div class="row">
                        <?php $__currentLoopData = $item->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-3">
                                <div>
                                    <a href="<?php echo e(route("post.show",['slug'=>$post->slug])); ?>"
                                       class="text-decoration-none text-dark">
                                        <img class="w-100 py-2"
                                             src="<?php echo e(asset(\Illuminate\Support\Facades\Storage::url($post->avatar))); ?>"
                                             alt="<?php echo e($post->name); ?>"/>
                                        <h6 class="fw-bold" style="font-size: 14px;"><?php echo e($post->name); ?></h6>
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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tailydcr/texon.mehedishamim.com_/resources/views/category.blade.php ENDPATH**/ ?>