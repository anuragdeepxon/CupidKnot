<div class="w-full sm:w-[46md] md:w-[100%] lg:w-[23%]  flx flex-col m-5 bg-gradient-to-r from-red-500 to-red-800 rounded-3xl">
    <div class="card glass rounded-3xl drop-shadow-xl overflow-hidden flex-1 flex flex-col">
        <div class="p-10 flex-1 flex flex-col align-middle place-items-center ">
            <div class="card w-full bg-base-100 shadow-xl image-full">
                <figure><img src="https://api.lorem.space/image/face?w=500&h=200" alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="stat-value text-white"><?php echo e($eventDaysTo); ?></div>
                    <h2 class="card-title"><?php echo e($eventTitle); ?></h2>
                    <p class="italic"><?php echo e($eventDate); ?></p>
                    <div class="card-actions justify-start mt-5">
                        <a href="<?php echo e(url('/'. $eventPageURL)); ?>" class="btn glass capitalize shadow-lg hover:shadow-lg shadow-black hover:shadow-black">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\AnuragDeep\OneDrive\Desktop\Freelancing\days-to\resources\views/components/event-card.blade.php ENDPATH**/ ?>