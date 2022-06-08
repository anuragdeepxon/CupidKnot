<section class="p-2 md:p-2 text-center md:text-left shadow-lg bg-gradient-to-l from-sky-400 to-blue-500 rounded-3xl">
    <div class="flex justify-center">
        <div class="w-full">
            <div class="block p-6 rounded-lg shadow-lg bg-white m-4">
                <div class="md:flex md:flex-row">
                    <div class="md:w-96 w-36 flex justify-center items-center mb-6 lg:mb-0 mx-auto md:mx-0">
                        <div class="avatar">
                            <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                <img src="https://api.lorem.space/image/face?hash=3174" />
                            </div>
                        </div>
                    </div>
                    <div class="md:ml-6">
                        <p id="first_name" class="font-semibold text-xl mb-2 text-gray-800"><?php echo e($userFirstName); ?></p>
                        <p id="income" class="font-semibold text-gray-500 mb-0"> <?php echo e($userOccupation); ?> </p>
                        <p class="text-gray-500 font-light mb-6">
                            <?php echo e($userAnnualIncome); ?>

                        </p>
                    </div>
                    <div class="md:ml-6 justify-end">
                        <div class="stats shadow bg-slate-200">
                            <div class="stat">
                                <div class="stat-title text-slate-800">Match to Your Profile</div>
                                <div id="match" class="stat-value text-slate-800"><?php echo e($userMatch); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\cupid\resources\views/components/profile-card.blade.php ENDPATH**/ ?>