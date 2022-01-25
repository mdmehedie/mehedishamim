<section class="drawer" id="drawer-name" data-drawer-target>
    <div class="drawer__overlay" data-drawer-close tabindex="-1">&times;</div>
    <div class="drawer__wrapper">
        <div class="drawer__header">
            <div class="drawer__title">
            </div>
            <button class="drawer__close" data-drawer-close aria-label="Close Drawer"></button>
        </div>

        <div class="drawer__content">
                <div class="drawer-header-img">
                    <img src="<?php echo e(asset('assets/Mehedi-shamim.png')); ?>" alt="">
                </div>
            <section class="mt-3">
                <div class="card" style="width: 23rem;">
                    <div class="card-body">
                        <a class="text-decoration-none" href="<?php echo e(route('home')); ?>" style="color: black">
                            THE THOUGHTS OF <br/>
                            MEHEDI SHAMIM
                        </a>
                    </div>
                  </div>
                
            </section>

            <ul class="list-group mt-4">
                <?php $__currentLoopData = \App\Models\Category::where('status',1)->orderBy('order')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('category.show',['slug'=>$item->slug])); ?>"
                       class="list-group-item border-none text-decoration-none"><?php echo e($item->name); ?></a>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</section>
<?php /**PATH /home/tailydcr/texon.mehedishamim.com_/resources/views/shared/drawer.blade.php ENDPATH**/ ?>