<?php $__env->startSection('title',$post->name." | Post"); ?>

<?php $__env->startSection('content'); ?>
    <section class="py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div>
                        <h6 class="text-decoration-underline fw-bold text-uppercase"><?php echo e($post->category->name); ?></h6>
                        <h2 class="fw-bolder"
                            style="font-family: Source Serif Pro;font-size: 40px; font-weight: 600; color: black;">
                            <?php echo e($post->name); ?>

                        </h2>
                        <p style="font-size: 12px;">By <?php echo e($post->user->name); ?>

                            | <?php echo e($post->updated_at->format('d M, Y')); ?></p>
                    </div>
                    <div>
                        <?php if($post->type=='photo'): ?>
                            <img class="w-100"
                                 src="<?php echo e(asset(\Illuminate\Support\Facades\Storage::url($post->avatar))); ?>"
                                 alt="<?php echo e($post->name); ?>">
                        <?php else: ?>
                            <div class="embed-responsive embed-responsive-1by1 vid">
                                <iframe class="embed-responsive-item mw-100"
                                        src="<?php echo e($post->video); ?>"
                                            allowfullscreen></iframe>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="d-flex pt-2">
                        <a href="#" class="mx-2 bg-dark rounded-circle d-flex justify-content-center align-items-center"
                           style="height: 2rem; width: 2rem;">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#" class="mx-2 bg-dark rounded-circle d-flex justify-content-center align-items-center"
                           style="height: 2rem; width: 2rem;">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#" class="mx-2 bg-dark rounded-circle d-flex justify-content-center align-items-center"
                           style="height: 2rem; width: 2rem;">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>

                        <a href="#" class="mx-2 bg-dark rounded-circle d-flex justify-content-center align-items-center"
                           style="height: 2rem; width: 2rem;">
                            <i class="fas fa-envelope text-white" style="color:red"></i>
                        </a>
                    </div>
                    <div class="my-3">
                        <?php echo $post->description; ?>

                    </div>

                    <div class="row">
                        <h6 class="text-decoration-underline fw-bold">READ THIS NEXT</h6>

                        <?php $__currentLoopData = $relatedPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-4">
                                <div>
                                    <a href="<?php echo e(route('post.show',['slug'=>$item->slug])); ?>"
                                       class="text-decoration-none text-dark">
                                        <img class="w-100 py-2"
                                             src="<?php echo e(asset(\Illuminate\Support\Facades\Storage::url($item->avatar))); ?>"
                                             alt="<?php echo e($item->name); ?>"/>
                                        <h6 class="fw-bold" style="font-size: 14px;">
                                            <?php echo e($item->name); ?>

                                        </h6>
                                        <p style="font-size: 11px;">
                                            <?php echo e(substr(strip_tags($item->description), 0, 120)); ?>

                                        </p>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tailydcr/texon.mehedishamim.com_/resources/views/post.blade.php ENDPATH**/ ?>