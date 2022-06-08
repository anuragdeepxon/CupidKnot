<?php $__env->startSection('content'); ?>

<section class="pt-20 p-2 lg:p-20 md:p-10">
    <div class="glass rounded-3xl px-4 py-16 sm:mx-6 lg:mx-8">
        <div class="max-w-2xl mx-auto">

            <div class="text-center">
                <h4 class="text-3xl text-white font-semibold mt-1 mb-12 pb-1"><?php echo e(config('app.name')); ?> | Login</h4>
            </div>


            <div class="text-center">
                <h4 class="text-xl text-white font-semibold mt-12 mb-2 pb-1 italic">Login with Gmail</h4>
            </div>

            <div class="flex justify-center mb-5">
                <div class="avatar ">
                    <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <a href="<?php echo e(url('auth/google')); ?>">
                            <img src="<?php echo e(asset('images/gicon.png')); ?>" />
                        </a>
                    </div>
                </div>
            </div>


            <div class="text-center">
                <h4 class="text-xl text-white mt-12 mb-2 pb-1 ">or</h4>
            </div>

            <div class="text-center">
                <h4 class="text-xl text-white font-semibold mt-12 mb-2 pb-1 italic">Login with Credentials</h4>
            </div>

            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <label class="label">
                    <p class="label-text text-white text-xl mb-2">Email</p>
                    <p class="label-text-alt">Required</p>
                </label>
                <div class="mb-4">
                    <input placeholder="Enter Email" id="email" type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback text-white" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-4">
                    <label class="label">
                        <p class="label-text text-white text-xl mb-2">Password</p>
                        <p class="label-text-alt">Required</p>
                    </label>
                    <input placeholder="Enter Password" id="password" type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="password" required autocomplete="current-password">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback text-white" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <input class="" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                <label class="text-slate-300" for="remember">
                    <?php echo e(__('Remember Me')); ?>

                </label>

                <div class="text-center pt-1 mb-12 pb-1">
                    <button type="submit" class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3 bg-gradient-to-r from-gray-900 via-blue-800 to-blue-700" type="button" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <?php echo e(__('Login')); ?>

                    </button>

                    <?php if(Route::has('password.request')): ?>
                    <a style="color:white !important" class="text-white" href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Forgot Your Password?')); ?>

                    </a>
                    <?php endif; ?>

                </div>
                <div class="flex items-center justify-between pb-6">
                    <p class="mb-0 mr-2 text-white">Don't have an account?</p>
                    <a style="color:white !important" href="<?php echo e(route('register')); ?>" class="text-white inline-block px-6 py-2 border-2 border-blue-600  font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        Create Account
                    </a>
                </div>
            </form>





        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cupid\resources\views/auth/login.blade.php ENDPATH**/ ?>