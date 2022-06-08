<!DOCTYPE html>
<html lang="en" data-theme="emerald">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>OGG to MP3</title>

    <!-- Specific Metas -->

    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Anurag Deep | https://anuragdeep.com">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <input name="token_ad" content="<?php echo e(csrf_token()); ?>">
    <meta name="asd" content="<?php echo e(csrf_token()); ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(URL::asset('images/logo.png')); ?>" />

    <!-- Main Stylesheet -->
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />


    <!-- Javascripts -->
    <script src="<?php echo e(URL::asset('js/app.js')); ?>"></script>

</head>

<body class="min-h-screen">

    <!-- Header start  -->
    <div id="arya-fly-wrap">
        <div id="arya-fly-menu-top" class="left relative pt-3">
            <div class="arya-fly-top-out left relative">
                <div class="arya-fly-top-in">
                    <div id="arya-fly-logo" class="left relative logo">
                        <a href="/"><img src="<?php echo e(URL::asset('images/logo.png')); ?>" class="" alt="OGG to MP3" />
                            <h1 class="text-2xl font-bold ">OGG to MP3</h1>
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
                        <li class=""><a href="/about-site">About Site</a></li>
                        <li class=""><a href="/privacy-policy">Privacy Policy</a></li>
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
        <nav style="height: 50px;" class="fixed mx-auto top-0 left-0 right-0 z-[500] shadow-xl flex bg-[#0057F7] 2xl:px-[11%] xl:px-[11%] lg:px-[11%] md:px-[10rem] sm:px-10 px-5 ">
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
                    <a href="/"><img src="<?php echo e(URL::asset('images/logo.png')); ?>" class="w-16 md:w-18 lg:w-18 p-1 mt-1 md:mt-1 lg:mt-1 inline" alt="OGG to MP3" />
                        <h1 class="mt-2 md:mt-0 lg:mt-0  p-1 font-bold text-white text-xl md:text-3xl lg:text-3xl  self-center" style="float: right;">OGG to MP3</h1>
                    </a>

                </div>
            </div>
            <!-- Right Navigation -->
            <div class="flex-1 flex justify-center ml-auto">
                <a class=""></a>
            </div>
        </nav>
        <nav class="flex fixed w-screen">
        </nav>
    </header>
    <div id="overlay" class="arya-fly-fade"></div>
    <!-- Header end  -->


    <!-- ############################################  -->

    <div class="sm:container mx-auto lg:px-40 md:px-10 sm:px-10 px-5 ">
        <div class="pt-[10rem]"></div>

        <div class="flex flex-wrap ">

            <div class="w-full sm:w-1/1 md:w-1/1 flex flex-col ">
                <div class="bg-white rounded-3xl drop-shadow-xl overflow-hidden flex-1 flex flex-col">
                    <div class="p-4 flex-1 flex flex-col align-middle place-items-center bg-gradient-to-r from-[#153DF0] via-[#3173F6] to-[#3173F6]">

                        <div class="text-slate-100 text-3xl md:text-4xl lg:text-4xl font-bold m-5"><i class="fa-solid fa-server pr-3"></i>Choose file to convert</div>
                        <div id="fileInformation" class="flow-root card w-96 glass hide p-10 m-5">
                            <div class="">
                                <div class="float-left">
                                    <h2 id="fileName" class="card-title"></h2>
                                    <p id="fileSize"></p>
                                </div>
                                <div class="float-right">
                                    <button id="removeInputFile" class="btn btn-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <form id="audioUploadForm" method="POST" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div id="inputLabel">
                                <label class="uploadArea m-5 bg-slate-50 hover:bg-[#391189] hover:drop-shadow-xl hover:text-white flex justify-center md:w-96 lg:w-96 w-[80%] h-32 px-4 transition border-4 border-slate-100 border-solid rounded-md cursor-pointer hover:border-[#391189]">
                                    <span class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <span class="font-medium">
                                            Drop file to Attach, or
                                            <span class="">browse</span>
                                        </span>
                                    </span>
                                    <input type="file" name="audio" class="" id="file" onchange="fileExtensionCheck()" accept="audio/*" hidden>
                                </label>
                            </div>
                            <input type="submit" id="uploadButton" value="Upload & Convert file" class="btn m-5 hide">
                        </form>
                        <br>

                        <div id="messageBox" class="hide alert shadow-lg mb-5 bg-black">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-bold text-slate-200" id="message"></h3>
                                </div>
                            </div>
                        </div>

                        <!-- <progress id="progress" class="progress progress-success w-72" style="height:10px ;" value="0" max="100"></progress> -->

                    </div>


                </div>
            </div>

        </div>



        <div class="flex flex-wrap mt-5">

            <div class="w-full sm:w-1/1 md:w-1/1 flex flex-col ">
                <div class="bg-white rounded-xl drop-shadow-xl overflow-hidden flex-1 flex flex-col">
                    <div class="p-4 flex-1 flex flex-col align-middle place-items-center bg-gradient-to-r from-[#153DF0] via-[#3173F6] to-[#3173F6]">




                        <div class="mx-auto">
                            <center>
                                <div class="text-center">
                                    <div class="ml-1">
                                        <div class="overlay">
                                            <div class="atom-spinner hide">
                                                <div class="spinner-inner">
                                                    <div class="spinner-line"></div>
                                                    <div class="spinner-line"></div>
                                                    <div class="spinner-line"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>

                        <div class="flow-root m-10">
                            <div class="float-right">
                                <!-- <button class="btn btn-accent">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512">
                                        <path fill="#ffffff" fill-rule="nonzero" d="M256 512c70.69 0 134.69-28.66 181.01-74.99C483.34 390.69 512 326.69 512 256c0-70.68-28.66-134.69-74.99-181.01C390.69 28.66 326.69 0 256 0S121.31 28.66 74.99 74.99C28.66 121.31 0 185.32 0 256c0 70.69 28.66 134.69 74.99 181.01C121.31 483.34 185.31 512 256 512zm53.41-276.67v-60.37c0-4.74-3.97-8.72-8.71-8.72h-89.41c-4.74 0-8.71 3.92-8.71 8.72v60.37h-43.45c-4.5.01-9.01 1.57-12.66 4.74-8.02 6.99-8.86 19.17-1.88 27.19l99.37 114.07c.69.77 1.43 1.5 2.25 2.18 8.2 6.78 20.34 5.63 27.12-2.56l93.77-113.33c3.14-3.43 5.06-8 5.06-13.01 0-10.65-8.64-19.28-19.29-19.28h-43.46zm96.7 170.78c-38.41 38.41-91.49 62.18-150.11 62.18-58.62 0-111.7-23.77-150.11-62.18C67.48 367.7 43.71 314.62 43.71 256c0-58.62 23.77-111.7 62.18-150.11C144.3 67.48 197.38 43.71 256 43.71c58.62 0 111.7 23.77 150.11 62.18 38.41 38.41 62.18 91.49 62.18 150.11 0 58.62-23.77 111.7-62.18 150.11z" />
                                    </svg>
                                    Download All as ZIP
                                </button> -->
                            </div>
                        </div>

                        <!-- Output File Start 1 -->
                        <div id="outputFileArea1" class="flow-root card w-full glass p-5 m-5 hide">
                            <div class="float-left">
                                <h2 id="outputFileName1" class="card-title text-slate-50"></h2>
                                <p id="outputFileSize1" class="text-slate-200"></p>
                            </div>
                            <div class="float-right">
                                <a id="outputDownload1" class="btn" href="" download="">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512">
                                        <path fill="#ffffff" fill-rule="nonzero" d="M256 512c70.69 0 134.69-28.66 181.01-74.99C483.34 390.69 512 326.69 512 256c0-70.68-28.66-134.69-74.99-181.01C390.69 28.66 326.69 0 256 0S121.31 28.66 74.99 74.99C28.66 121.31 0 185.32 0 256c0 70.69 28.66 134.69 74.99 181.01C121.31 483.34 185.31 512 256 512zm53.41-276.67v-60.37c0-4.74-3.97-8.72-8.71-8.72h-89.41c-4.74 0-8.71 3.92-8.71 8.72v60.37h-43.45c-4.5.01-9.01 1.57-12.66 4.74-8.02 6.99-8.86 19.17-1.88 27.19l99.37 114.07c.69.77 1.43 1.5 2.25 2.18 8.2 6.78 20.34 5.63 27.12-2.56l93.77-113.33c3.14-3.43 5.06-8 5.06-13.01 0-10.65-8.64-19.28-19.29-19.28h-43.46zm96.7 170.78c-38.41 38.41-91.49 62.18-150.11 62.18-58.62 0-111.7-23.77-150.11-62.18C67.48 367.7 43.71 314.62 43.71 256c0-58.62 23.77-111.7 62.18-150.11C144.3 67.48 197.38 43.71 256 43.71c58.62 0 111.7 23.77 150.11 62.18 38.41 38.41 62.18 91.49 62.18 150.11 0 58.62-23.77 111.7-62.18 150.11z" />
                                    </svg>
                                    Download
                                </a>
                                <!-- <button id="removeoutputFile1" class="btn btn-circle ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button> -->
                            </div>
                        </div>
                        <!-- Output File End -->

                        <!-- Output File Start 2 -->
                        <div id="outputFileArea2" class="flow-root card w-full glass p-5 m-5 hide">
                            <div class="float-left">
                                <h2 id="outputFileName2" class="card-title text-slate-50"></h2>
                                <p id="outputFileSize2" class="text-slate-200"></p>
                            </div>
                            <div class="float-right">
                                <a id="outputDownload2" class="btn" href="" download="">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512">
                                        <path fill="#ffffff" fill-rule="nonzero" d="M256 512c70.69 0 134.69-28.66 181.01-74.99C483.34 390.69 512 326.69 512 256c0-70.68-28.66-134.69-74.99-181.01C390.69 28.66 326.69 0 256 0S121.31 28.66 74.99 74.99C28.66 121.31 0 185.32 0 256c0 70.69 28.66 134.69 74.99 181.01C121.31 483.34 185.31 512 256 512zm53.41-276.67v-60.37c0-4.74-3.97-8.72-8.71-8.72h-89.41c-4.74 0-8.71 3.92-8.71 8.72v60.37h-43.45c-4.5.01-9.01 1.57-12.66 4.74-8.02 6.99-8.86 19.17-1.88 27.19l99.37 114.07c.69.77 1.43 1.5 2.25 2.18 8.2 6.78 20.34 5.63 27.12-2.56l93.77-113.33c3.14-3.43 5.06-8 5.06-13.01 0-10.65-8.64-19.28-19.29-19.28h-43.46zm96.7 170.78c-38.41 38.41-91.49 62.18-150.11 62.18-58.62 0-111.7-23.77-150.11-62.18C67.48 367.7 43.71 314.62 43.71 256c0-58.62 23.77-111.7 62.18-150.11C144.3 67.48 197.38 43.71 256 43.71c58.62 0 111.7 23.77 150.11 62.18 38.41 38.41 62.18 91.49 62.18 150.11 0 58.62-23.77 111.7-62.18 150.11z" />
                                    </svg>
                                    Download
                                </a>
                                <!-- <button id="removeoutputFile1" class="btn btn-circle ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button> -->
                            </div>
                        </div>
                        <!-- Output File End -->



                        <!-- Output File Start 3 -->
                        <div id="outputFileArea3" class="flow-root card w-full glass p-5 m-5 hide">
                            <div class="float-left">
                                <h2 id="outputFileName3" class="card-title text-slate-50"></h2>
                                <p id="outputFileSize3" class="text-slate-200"></p>
                            </div>
                            <div class="float-right">
                                <a id="outputDownload3" class="btn" href="" download="">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512">
                                        <path fill="#ffffff" fill-rule="nonzero" d="M256 512c70.69 0 134.69-28.66 181.01-74.99C483.34 390.69 512 326.69 512 256c0-70.68-28.66-134.69-74.99-181.01C390.69 28.66 326.69 0 256 0S121.31 28.66 74.99 74.99C28.66 121.31 0 185.32 0 256c0 70.69 28.66 134.69 74.99 181.01C121.31 483.34 185.31 512 256 512zm53.41-276.67v-60.37c0-4.74-3.97-8.72-8.71-8.72h-89.41c-4.74 0-8.71 3.92-8.71 8.72v60.37h-43.45c-4.5.01-9.01 1.57-12.66 4.74-8.02 6.99-8.86 19.17-1.88 27.19l99.37 114.07c.69.77 1.43 1.5 2.25 2.18 8.2 6.78 20.34 5.63 27.12-2.56l93.77-113.33c3.14-3.43 5.06-8 5.06-13.01 0-10.65-8.64-19.28-19.29-19.28h-43.46zm96.7 170.78c-38.41 38.41-91.49 62.18-150.11 62.18-58.62 0-111.7-23.77-150.11-62.18C67.48 367.7 43.71 314.62 43.71 256c0-58.62 23.77-111.7 62.18-150.11C144.3 67.48 197.38 43.71 256 43.71c58.62 0 111.7 23.77 150.11 62.18 38.41 38.41 62.18 91.49 62.18 150.11 0 58.62-23.77 111.7-62.18 150.11z" />
                                    </svg>
                                    Download
                                </a>
                                <!-- <button id="removeoutputFile1" class="btn btn-circle ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button> -->
                            </div>
                        </div>
                        <!-- Output File End -->



                        <!-- Output File Start 4 -->
                        <div id="outputFileArea4" class="flow-root card w-full glass p-5 m-5 hide">
                            <div class="float-left">
                                <h2 id="outputFileName4" class="card-title text-slate-50"></h2>
                                <p id="outputFileSize4" class="text-slate-200"></p>
                            </div>
                            <div class="float-right">
                                <a id="outputDownload4" class="btn" href="" download="">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512">
                                        <path fill="#ffffff" fill-rule="nonzero" d="M256 512c70.69 0 134.69-28.66 181.01-74.99C483.34 390.69 512 326.69 512 256c0-70.68-28.66-134.69-74.99-181.01C390.69 28.66 326.69 0 256 0S121.31 28.66 74.99 74.99C28.66 121.31 0 185.32 0 256c0 70.69 28.66 134.69 74.99 181.01C121.31 483.34 185.31 512 256 512zm53.41-276.67v-60.37c0-4.74-3.97-8.72-8.71-8.72h-89.41c-4.74 0-8.71 3.92-8.71 8.72v60.37h-43.45c-4.5.01-9.01 1.57-12.66 4.74-8.02 6.99-8.86 19.17-1.88 27.19l99.37 114.07c.69.77 1.43 1.5 2.25 2.18 8.2 6.78 20.34 5.63 27.12-2.56l93.77-113.33c3.14-3.43 5.06-8 5.06-13.01 0-10.65-8.64-19.28-19.29-19.28h-43.46zm96.7 170.78c-38.41 38.41-91.49 62.18-150.11 62.18-58.62 0-111.7-23.77-150.11-62.18C67.48 367.7 43.71 314.62 43.71 256c0-58.62 23.77-111.7 62.18-150.11C144.3 67.48 197.38 43.71 256 43.71c58.62 0 111.7 23.77 150.11 62.18 38.41 38.41 62.18 91.49 62.18 150.11 0 58.62-23.77 111.7-62.18 150.11z" />
                                    </svg>
                                    Download
                                </a>
                                <!-- <button id="removeoutputFile1" class="btn btn-circle ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button> -->
                            </div>
                        </div>
                        <!-- Output File End -->



                        <!-- Output File Start 5 -->
                        <div id="outputFileArea5" class="flow-root card w-full glass p-5 m-5 hide">
                            <div class="float-left">
                                <h2 id="outputFileName5" class="card-title text-slate-50"></h2>
                                <p id="outputFileSize5" class="text-slate-200"></p>
                            </div>
                            <div class="float-right">
                                <a id="outputDownload5" class="btn" href="" download="">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512">
                                        <path fill="#ffffff" fill-rule="nonzero" d="M256 512c70.69 0 134.69-28.66 181.01-74.99C483.34 390.69 512 326.69 512 256c0-70.68-28.66-134.69-74.99-181.01C390.69 28.66 326.69 0 256 0S121.31 28.66 74.99 74.99C28.66 121.31 0 185.32 0 256c0 70.69 28.66 134.69 74.99 181.01C121.31 483.34 185.31 512 256 512zm53.41-276.67v-60.37c0-4.74-3.97-8.72-8.71-8.72h-89.41c-4.74 0-8.71 3.92-8.71 8.72v60.37h-43.45c-4.5.01-9.01 1.57-12.66 4.74-8.02 6.99-8.86 19.17-1.88 27.19l99.37 114.07c.69.77 1.43 1.5 2.25 2.18 8.2 6.78 20.34 5.63 27.12-2.56l93.77-113.33c3.14-3.43 5.06-8 5.06-13.01 0-10.65-8.64-19.28-19.29-19.28h-43.46zm96.7 170.78c-38.41 38.41-91.49 62.18-150.11 62.18-58.62 0-111.7-23.77-150.11-62.18C67.48 367.7 43.71 314.62 43.71 256c0-58.62 23.77-111.7 62.18-150.11C144.3 67.48 197.38 43.71 256 43.71c58.62 0 111.7 23.77 150.11 62.18 38.41 38.41 62.18 91.49 62.18 150.11 0 58.62-23.77 111.7-62.18 150.11z" />
                                    </svg>
                                    Download
                                </a>
                                <!-- <button id="removeoutputFile1" class="btn btn-circle ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button> -->
                            </div>
                        </div>
                        <!-- Output File End -->



                        <!-- Output File Start 6 -->
                        <div id="outputFileArea6" class="flow-root card w-full glass p-5 m-5 hide">
                            <div class="float-left">
                                <h2 id="outputFileName6" class="card-title text-slate-50"></h2>
                                <p id="outputFileSize6" class="text-slate-200"></p>
                            </div>
                            <div class="float-right">
                                <a id="outputDownload6" class="btn" href="" download="">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512">
                                        <path fill="#ffffff" fill-rule="nonzero" d="M256 512c70.69 0 134.69-28.66 181.01-74.99C483.34 390.69 512 326.69 512 256c0-70.68-28.66-134.69-74.99-181.01C390.69 28.66 326.69 0 256 0S121.31 28.66 74.99 74.99C28.66 121.31 0 185.32 0 256c0 70.69 28.66 134.69 74.99 181.01C121.31 483.34 185.31 512 256 512zm53.41-276.67v-60.37c0-4.74-3.97-8.72-8.71-8.72h-89.41c-4.74 0-8.71 3.92-8.71 8.72v60.37h-43.45c-4.5.01-9.01 1.57-12.66 4.74-8.02 6.99-8.86 19.17-1.88 27.19l99.37 114.07c.69.77 1.43 1.5 2.25 2.18 8.2 6.78 20.34 5.63 27.12-2.56l93.77-113.33c3.14-3.43 5.06-8 5.06-13.01 0-10.65-8.64-19.28-19.29-19.28h-43.46zm96.7 170.78c-38.41 38.41-91.49 62.18-150.11 62.18-58.62 0-111.7-23.77-150.11-62.18C67.48 367.7 43.71 314.62 43.71 256c0-58.62 23.77-111.7 62.18-150.11C144.3 67.48 197.38 43.71 256 43.71c58.62 0 111.7 23.77 150.11 62.18 38.41 38.41 62.18 91.49 62.18 150.11 0 58.62-23.77 111.7-62.18 150.11z" />
                                    </svg>
                                    Download
                                </a>
                                <!-- <button id="removeoutputFile1" class="btn btn-circle ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button> -->
                            </div>
                        </div>
                        <!-- Output File End -->


                        <!-- Output File Start 7 -->
                        <div id="outputFileArea7" class="flow-root card w-full glass p-5 m-5 hide">
                            <div class="float-left">
                                <h2 id="outputFileName7" class="card-title text-slate-50"></h2>
                                <p id="outputFileSize7" class="text-slate-200"></p>
                            </div>
                            <div class="float-right">
                                <a id="outputDownload7" class="btn" href="" download="">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512">
                                        <path fill="#ffffff" fill-rule="nonzero" d="M256 512c70.69 0 134.69-28.66 181.01-74.99C483.34 390.69 512 326.69 512 256c0-70.68-28.66-134.69-74.99-181.01C390.69 28.66 326.69 0 256 0S121.31 28.66 74.99 74.99C28.66 121.31 0 185.32 0 256c0 70.69 28.66 134.69 74.99 181.01C121.31 483.34 185.31 512 256 512zm53.41-276.67v-60.37c0-4.74-3.97-8.72-8.71-8.72h-89.41c-4.74 0-8.71 3.92-8.71 8.72v60.37h-43.45c-4.5.01-9.01 1.57-12.66 4.74-8.02 6.99-8.86 19.17-1.88 27.19l99.37 114.07c.69.77 1.43 1.5 2.25 2.18 8.2 6.78 20.34 5.63 27.12-2.56l93.77-113.33c3.14-3.43 5.06-8 5.06-13.01 0-10.65-8.64-19.28-19.29-19.28h-43.46zm96.7 170.78c-38.41 38.41-91.49 62.18-150.11 62.18-58.62 0-111.7-23.77-150.11-62.18C67.48 367.7 43.71 314.62 43.71 256c0-58.62 23.77-111.7 62.18-150.11C144.3 67.48 197.38 43.71 256 43.71c58.62 0 111.7 23.77 150.11 62.18 38.41 38.41 62.18 91.49 62.18 150.11 0 58.62-23.77 111.7-62.18 150.11z" />
                                    </svg>
                                    Download
                                </a>
                                <!-- <button id="removeoutputFile1" class="btn btn-circle ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button> -->
                            </div>
                        </div>
                        <!-- Output File End -->

                    </div>
                </div>
            </div>

        </div>

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name=asd]').attr('content')
                }
            });
        </script>


        <!-- Start Data Loading from Backend  -->
        <script>
            $(document).ready(function() {
                $('#removeInputFile').on('click', function(e) {
                    e.preventDefault()

                    $('#fileInformation').addClass('hide')
                    $('#fileInformation').removeClass('show')

                    $('#inputLabel').addClass('show')
                    $('#inputLabel').removeClass('hide')

                    $('#messageBox').addClass('hide')
                    $('#messageBox').removeClass('show')

                    $('#uploadButton').addClass('hide')
                    $('#uploadButton').removeClass('show')

                    $("input[type=file]").val(null);

                });
            });

            function fileExtensionCheck() {
                var file = $("input[type=file]").get(0).files[0];
                let fileType = file.type;

                $('#fileName').html(file.name);

                $('#fileInformation').addClass('show')
                $('#fileInformation').removeClass('hide')

                $('#inputLabel').addClass('hide')
                $('#inputLabel').removeClass('show')

                const size = Math.round((file.size / 1024).toFixed(2));
                if (size < 1024) {
                    $('#fileSize').html(size + 'KB');
                } else if (size > 1024) {
                    $('#fileSize').html(Math.round((size / 1024).toFixed(2)) + 'MB');
                }

                if (!(fileType == 'audio/ogg')) {
                    $('#message').html("Please Choose OGG File Only");
                    $('#messageBox').addClass('show')
                    $('#messageBox').removeClass('hide')

                    $('#inputLabel').addClass('hide')
                    $('#inputLabel').removeClass('show')

                    // throw new Error("File Format Error")
                } else {
                    $('#uploadButton').addClass('show')
                    $('#uploadButton').removeClass('hide')

                    $('#messageBox').addClass('hide')
                    $('#messageBox').removeClass('show')
                }
            }


            $(document).ready(function() {

                var fileConverted = 0;
                $('#audioUploadForm').on('submit', function(e) {
                    e.preventDefault()


                    if (true && (fileConverted < 7)) {

                        $('#uploadButton').addClass('hide')
                        $('#uploadButton').removeClass('show')

                        var file = $("input[type=file]").get(0).files[0];
                        let token = $('meta[name=asd]').attr('content');
                        var formData = new FormData(this);

                        $.ajax({
                            // xhr: function() {
                            //     var xhr = new window.XMLHttpRequest();
                            //     xhr.upload.addEventListener("progress", function(evt) {
                            //         if (evt.lengthComputable) {
                            //             var percentComplete = ((evt.loaded / evt.total) * 100);
                            //             $('#progress').attr("value", percentComplete)
                            //         }
                            //     }, false);
                            //     return xhr;
                            // },
                            type: "POST",
                            url: "<?php echo e(url('/audio-converter/audio')); ?>",
                            data: formData,
                            contentType: false,
                            processData: false,
                            cache: false,

                            beforeSend: function() {
                                $('.atom-spinner').addClass('show')
                                $('.atom-spinner').removeClass('hide')
                            },
                            success: function(result) {
                                var origin = window.location.origin;
                                let downloadUrl = origin + result.data.file_url;


                                fileConverted = fileConverted + 1;
                                console.log(fileConverted);

                                $('#outputDownload' + fileConverted).attr("href", downloadUrl)
                                $('#outputDownload' + fileConverted).attr("download", result.data.file_name)

                                $('.atom-spinner').addClass('hide')
                                $('.atom-spinner').removeClass('show')

                                $('#outputFileArea' + fileConverted).addClass('show');
                                $('#outputFileArea' + fileConverted).removeClass('hide');

                                var xhr = new XMLHttpRequest();
                                xhr.open("GET", downloadUrl, true);
                                xhr.responseType = "arraybuffer";
                                xhr.onreadystatechange = function() {
                                    if (this.readyState == this.DONE) {
                                        const outputSize = Math.round((this.response.byteLength / 1024).toFixed(2));
                                        if (outputSize < 1024) {
                                            $('#outputFileSize' + fileConverted).html(outputSize + 'KB');
                                        } else if (outputSize > 1024) {
                                            $('#outputFileSize' + fileConverted).html(Math.round((outputSize / 1024).toFixed(2)) + 'MB');
                                        }
                                        $('#outputFileName' + fileConverted).html(result.data.file_name);
                                    }
                                };
                                xhr.send(null);

                            },
                            error: function(data) {
                                console.log(data)
                                $('#message').html("Some error occurred, Try Again");
                                $('#message').addClass('show')
                                $('#message').removeClass('hide')
                            },
                            complete: function() {

                            },

                        }).done(function(result) {
                            if (result.success == true) {
                                // console.log(result)
                                $('#ip').html(result.data['IP']);
                            } else {
                                $('#tableData').html(result.message);
                                $('#message').addClass('show')
                                $('#message').removeClass('hide')
                            }
                        });
                    } else {
                        $('#message').html("7 File conversion at one time or Please refresh the page");
                        $('#messageBox').addClass('show')
                        $('#messageBox').removeClass('hide')
                    }
                });
            });
        </script>
        <!-- End Data Loading from Backend  -->


        <!-- Start Data Loading from Backend  -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("input[name=audio]").change(function(e) {
                    // $(this).closest("form").submit();
                });
            });
        </script>



        <div class="mb-9 sm:container mx-auto">
            <div class="pt-[3rem]">

                <div class="card bg-base-100 shadow-xl my-6">
                    <div class="card-body">
                        <h2 class="card-title">Hosting Detector: Detect Any Website’s Hosting Details</h2>
                        <p class="py-3 leading-normal text-slate-900 text-justify">This is a web hosting detector tool where you can website hosting details, blog hosting details, and more. this tool can give you details about the hosting provider name, hosting IP address, hosting nameserver details, hosted sites’ server location, and more information about the detected hosting server.
                        </p>
                    </div>
                </div>


                <div class="card bg-base-100 shadow-xl my-6">
                    <div class="card-body">
                        <h2 class="card-title">About this Hosting Detector?</h2>
                        <p class="py-3 leading-normal text-slate-900 text-justify"><a class="text-blue-900 font-bold" style="color: green !important;" href="http://OGG to MP3.in/">OGG to MP3.in</a> is the best hosting detector over the internet, OGG to MP3.in can detect any site’s hosting server's full details. it can detect the hosting provider name, hosting IP,nameverser details, and more secrets details about the hosted server.
                        </p>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl my-6">
                    <div class="card-body">
                        <h2 class="card-title">Is it Wp Hosting Detector?</h2>
                        <p class="py-3 leading-normal text-slate-900 text-justify">Yes, this is a hosting detector which is also a WP hosting detector means WordPress hosting detector. you can also detect hosting of any with just one click.
                        </p>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl my-6">
                    <div class="card-body">
                        <h2 class="card-title">How To Detect Hosting of a Site/Blog?</h2>
                        <p class="py-3 leading-normal text-slate-900 text-justify">We can't detect hosting details by just visiting the site. But here, in this tool, you can detect server details of any site. Just enter the domain name, after entering a domain name it will detect all details related to the hosting server, in easiest way</p>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl my-6">
                    <div class="card-body">
                        <h2 class="card-title">About Hosting Details Finder?</h2>
                        <p class="py-3 leading-normal text-slate-900 text-justify">A hosting detector or hosting details finder is also almost the same thing, a hosting finder can detect the hosting details of the hosting server. details like nameserver, hosted IP, hosted location, hosted owner name etc.
                        </p>
                    </div>
                </div>

            </div>
        </div>


        <!-- Frequently Asked Questions  -->
        <div class="mb-9 sm:container mx-auto">
            <div class="pt-[2rem] pb-[5rem]">
                <div class="pt-3">
                    <h5 class="py-3 leading-loose font-bold text-slate-900">Frequently Asked Questions</h5>
                </div>

                <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-6 shadow-2xl">
                    <input type="checkbox" class="peer">
                    <h5 class="collapse-title text-xl bg-[#3279F9] text-white pr-7 pl-7">
                        Is it a hosting provider detector?
                    </h5>
                    <div class="collapse-content bg-[#ffffff] ">
                        <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">Yes, this is also a hosting provider detector </p>
                    </div>
                </div>

                <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box  my-6 shadow-2xl">
                    <input type="checkbox" class="peer">
                    <h5 class="collapse-title text-xl bg-[#3279F9] text-white pr-7 pl-7">
                        Can I detect any hosted domain hosting server details?
                    </h5>
                    <div class="collapse-content bg-[#ffffff] ">
                        <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">Yes, by using this tool you can detect any hosted site’s hosting details.</p>
                    </div>
                </div>

                <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box  my-6 shadow-2xl">
                    <input type="checkbox" class="peer">
                    <h5 class="collapse-title text-xl bg-[#3279F9] text-white pr-7 pl-7">
                        Is This hosting location checker?
                    </h5>
                    <div class="collapse-content bg-[#ffffff] ">
                        <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">This is a hosting detector but you can detect or check to host location also.</p>
                    </div>
                </div>

                <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box  my-6 shadow-2xl">
                    <input type="checkbox" class="peer">
                    <h5 class="collapse-title text-xl bg-[#3279F9] text-white pr-7 pl-7">
                        Is this a ​​wordpress hosting detector?
                    </h5>
                    <div class="collapse-content bg-[#ffffff] ">
                        <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">Yes, this is also a WordPress hosting detector. if you want to detect WordPress themes and plugins then visit
                            <a class="text-blue-900 font-bold" style="color: green !important;" href="https://whatthemeis.com/">WhatThemeIs.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <!-- footer -->
        <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
            <div class="grid grid-flow-col gap-4">
                <a href="about-site" class="link link-hover text-black-500 font-bold">About Site</a>
                <a href="privacy-policy" class="link link-hover text-black-500 font-bold">Privacy Policy</a>
            </div>
            <div>
                <div class="grid grid-flow-col gap-4">
                    <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="inline-block fill-white">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                        </svg></a>
                    <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="inline-block fill-white">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                        </svg></a>
                    <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="inline-block fill-white">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                        </svg></a>
                </div>
            </div>
            <div>
                <p>Copyright &copy;<script>
                        var CurrentYear = new Date().getFullYear()
                        document.write(CurrentYear)
                    </script><a class="text-black-500 font-bold link link-hover" href="http://OGG to MP3.in/"> OGG to MP3.In</a> | Developed by <a class="text-black-500 font-bold link link-hover hover:text-white" href="https://anuragdeep.com">Anurag Deep</a></p>
            </div>
        </footer>
        <!-- /footer -->

        <style>
            .space-mt {
                margin-top: 100px !important;
            }

            .space-pt {
                padding-top: 100px !important;
            }
        </style>

        <style>
            /* Start Loader Style  */
            .show {
                display: block !important;
            }

            .hide {
                display: none !important;
            }


            .atom-spinner,
            .atom-spinner * {
                box-sizing: border-box;
            }

            .atom-spinner {
                height: 100px;
                width: 100px;
                overflow: hidden;
            }

            .atom-spinner .spinner-inner {
                position: relative;
                display: block;
                height: 100%;
                width: 100%;
            }

            .atom-spinner .spinner-circle {
                display: block;
                position: absolute;
                color: #ffffff;
                font-size: calc(60px * 0.24);
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .atom-spinner .spinner-line {
                position: absolute;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                animation-duration: 1s;
                border-left-width: calc(100px / 20);
                border-top-width: calc(100px / 20);
                border-left-color: #ffffff;
                border-left-style: solid;
                border-top-style: solid;
                border-top-color: transparent;
            }

            .atom-spinner .spinner-line:nth-child(1) {
                animation: atom-spinner-animation-1 1s linear infinite;
                transform: rotateZ(120deg) rotateX(66deg) rotateZ(0deg);
            }

            .atom-spinner .spinner-line:nth-child(2) {
                animation: atom-spinner-animation-2 1s linear infinite;
                transform: rotateZ(240deg) rotateX(66deg) rotateZ(0deg);
            }

            .atom-spinner .spinner-line:nth-child(3) {
                animation: atom-spinner-animation-3 1s linear infinite;
                transform: rotateZ(360deg) rotateX(66deg) rotateZ(0deg);
            }

            @keyframes  atom-spinner-animation-1 {
                100% {
                    transform: rotateZ(120deg) rotateX(66deg) rotateZ(360deg);
                }
            }

            @keyframes  atom-spinner-animation-2 {
                100% {
                    transform: rotateZ(240deg) rotateX(66deg) rotateZ(360deg);
                }
            }

            @keyframes  atom-spinner-animation-3 {
                100% {
                    transform: rotateZ(360deg) rotateX(66deg) rotateZ(360deg);
                }
            }

            /* End Loader Style  */
        </style>



</body>



</html><?php /**PATH /mnt/c/Users/AnuragDeep/OneDrive/Desktop/Freelancing/ogg-to-mp3-converter/resources/views/welcome.blade.php ENDPATH**/ ?>