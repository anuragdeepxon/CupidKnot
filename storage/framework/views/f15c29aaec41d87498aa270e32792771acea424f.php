<div class="w-full flx flex-col bg-gradient-to-r from-red-500 to-red-800">
    <div class="card glass rounded-3xl drop-shadow-xl overflow-hidden flex-1 flex flex-col m-5 mt-10">
        <div class="p-10 flex-1 flex flex-col align-middle place-items-center ">
            <div class="card w-full bg-base-100 shadow-xl image-full">
                <figure><img src="https://api.lorem.space/image/face?w=500&h=200" alt="Shoes" /></figure>
                <div class="card-body">
                    <p class="">How many days untill</p>
                    <h2 class="text-9xl text-white"><?php echo e($eventTitle); ?></h2>
                    <!-- <div class="text-9xl text-white"><?php echo e($eventDaysTo); ?></div> -->
                    <p class="italic"><?php echo e($eventDate); ?></p>
                    <div class="card-actions justify-start mt-5">
                        <a href="<?php echo e(url('/'. $eventPageURL)); ?>" class="btn glass capitalize shadow-lg hover:shadow-lg shadow-black hover:shadow-black">View</a>
                    </div>

                    <br>


                    <div class="grid grid-flow-col gap-5 text-center auto-cols-max">
                        <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                            <span class="countdown font-mono text-5xl">
                                <span style="--value:15;"></span>
                            </span>
                            days
                        </div>
                        <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                            <span class="countdown font-mono text-5xl">
                                <span style="--value:10;"></span>
                            </span>
                            hours
                        </div>
                        <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                            <span class="countdown font-mono text-5xl">
                                <span style="--value:24;"></span>
                            </span>
                            min
                        </div>
                        <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                            <span class="countdown font-mono text-5xl">
                                <span style="--value:56;"></span>
                            </span>
                            sec
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\AnuragDeep\OneDrive\Desktop\Freelancing\days-to\resources\views/components/event-detail.blade.php ENDPATH**/ ?>