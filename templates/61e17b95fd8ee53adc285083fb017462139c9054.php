<?php $__env->startSection('title',$video->name??''); ?>

<?php $__env->startSection('content'); ?>
    <section class="py-3">
        <div class="container">
            <div class="row">

                <div class="col-sm-9">
                    <div class="embed-responsive embed-responsive-1by1 vid">
                        <iframe class="embed-responsive-item mw-100"
                                src="https://www.youtube.com/embed/<?php echo e(getYoutubeIdFromUrl($video->video_link)); ?>"
                                allowfullscreen></iframe>
                    </div>

                    <h4 class="fw-bold py-2 mt-2">
                        <?php echo e($video->name??''); ?>

                    </h4>

                    <?php echo $video->description??''; ?>

                </div>

                <div class="col-sm-3 justify-content-center d-flex" style="height: 40rem;">
                    <div class="align-self-stretch overflow-auto">
                        <?php $__currentLoopData = $relatedVideos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('specialVideo',['slug'=>$item->slug])); ?>"
                               class="mb-3 text-decoration-none">
                                <img
                                    src="https://img.youtube.com/vi/<?php echo e(getYoutubeIdFromUrl($item->video_link)); ?>/hqdefault.jpg"
                                    width="250" height="130"/>
                                <p style="font-size: 12px; font-weight: 700; "><?php echo e($item->name); ?></p>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="">
        <div class="container border-top py-5">

            <?php $__currentLoopData = $videoPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $category =$item[0]->category;
                ?>
                <div class="d-flex justify-content-between">
                    <h6 class="text-decoration-underline text-uppercase">
                        <?php echo e($category->name); ?>

                    </h6>
                    <a class="text-decoration-none text-dark"
                       href="<?php echo e(route('category.show',['slug'=>$category->slug??''])); ?>"
                    >
                        <p>See More <i class="fa fa-long-arrow-right"></i></p>
                    </a>
                </div>
                <div class="row my-4">
                    <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-4">
                            <div>
                                <a href="<?php echo e(route("post.show",['slug'=>$post->slug])); ?>"
                                   class="text-decoration-none text-dark fw-bold">
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

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tailydcr/texon.mehedishamim.com_/resources/views/video.blade.php ENDPATH**/ ?>