<!-- Header start  -->
<div id="arya-fly-wrap">
    <div id="arya-fly-menu-top" class="left relative pt-3">
        <div class="arya-fly-top-out left relative">
            <div class="arya-fly-top-in">
                <div id="arya-fly-logo" class="left relative logo">
                    <a href="/"><img src="<?php echo e(URL::asset('images/logo.png')); ?>" class="" alt="<?php echo e(config('app.name')); ?>" />
                        <h1 class="text-2xl font-bold "><?php echo e(config('app.name')); ?></h1>
                    </a>
                </div>
            </div>
            <div class="arya-fly-but-wrap arya-fly-but-menu arya-fly-but-click">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div id="arya-fly-menu-wrap">
        <nav class="arya-fly-nav-menu pt-6 left relative">
            <div class="menu">
                <ul>
                    <li class=""><a href="/">Home</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div id="arya-fly-soc-wrap">
        <!-- <span class="arya-fly-soc-head">Connect with us</span> -->
        <ul class="arya-fly-soc-list left relative">
        </ul>
    </div>
</div>

<header>
    <nav style="height: 50px;" class="fixed mx-auto top-0 left-0 right-0 z-[500] shadow-xl flex bg-[#2A303C] 2xl:px-[11%] xl:px-[11%] lg:px-[11%] md:px-[10rem] sm:px-10 px-5 ">
        <!-- Left Navigation -->
        <div class="flex-1 flex justify-center mr-auto">
            <div id="" class="">
                <div id="arya-nav-bot-wrap" class="left">
                    <div class="arya-nav-bot-left left relative">
                        <div class="arya-fly-but-wrap arya-fly-but-click left relative">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Logo -->
        <div class="">
            <div class="">
                <a href="/"><img src="<?php echo e(URL::asset('images/logo.png')); ?>" class="w-16 md:w-18 lg:w-18 p-1 mt-1 md:mt-1 lg:mt-1 inline" alt="<?php echo e(config('app.name')); ?>" />
                    <h1 class="mt-2 md:mt-0 lg:mt-0  p-1 font-bold text-white text-xl md:text-3xl lg:text-3xl  self-center" style="float: right;"><?php echo e(config('app.name')); ?></h1>
                </a>

            </div>
        </div>
        <!-- Right Navigation -->
        <!-- Right Navigation -->
        <div class="flex-1 flex justify-center ml-auto">
            <!-- Authentication Links -->
            <ul class="menu menu-horizontal p-0">
                <?php if(auth()->guard()->guest()): ?>
                <?php if(Route::has('login')): ?>
                <li class="btn btn-sm mt-1"><a href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                <?php endif; ?>

                <?php if(Route::has('register')): ?>
                <li class="btn btn-sm mt-1"><a href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li>
                <?php endif; ?>
            </ul>

            <?php else: ?>
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-circle avatar ">
                    <div class="w-10 rounded-full ring ring-primary ring-offset-base-100">
                        <img src="https://api.lorem.space/image/face?hash=33791" />
                    </div>
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 shadow bg-base-100 rounded-box w-52">
                    <div class="card-body">
                        <span class="font-bold text-lg text-white"><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></span>
                        <div class="card-actions">
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hidden">
                                <?php echo csrf_field(); ?>
                            </form>
                            <a class="mt-3 btn btn-sm btn-primary text-white  btn-block" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                        </div>
                    </div>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </nav>
    <nav class="flex fixed w-screen">
    </nav>
</header>
<div id="overlay" class="arya-fly-fade"></div>
<!-- Header end  -->
<?php /**PATH C:\xampp\htdocs\cupid\resources\views/components/header.blade.php ENDPATH**/ ?>