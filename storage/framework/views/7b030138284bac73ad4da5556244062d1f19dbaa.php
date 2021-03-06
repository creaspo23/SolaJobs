<?php echo $__env->make('global.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('title'); ?>
<title>Reset Password </title>
<?php echo $__env->yieldContent('body'); ?>

<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white"
                    href="<?php echo e('/'); ?>">SolaJobs</a><button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                </ul>
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="absolute w-full h-full">
            <div class="absolute top-0 w-full h-full bg-gray-900"
                style="background-image: url(../assets/img/register_bg_2.png); background-size: 100%; background-repeat: no-repeat;">
            </div>
            <div class="flex items-center justify-center">
                <div
                    class="flex flex-col max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden md:flex-row md:h-48 mb-50">
                    <div class="md:flex md:items-center md:justify-center md:w-1/2 md:bg-gray-700">
                        <div class="py-6 px-6 md:px-8 md:py-0">
                            <h2 class="text-gray-700 text-lg font-bold md:text-gray-100">Sign Up For <span
                                    class="text-blue-600 md:text-blue-300">Project</span> Updates</h2>

                            <p class="mt-2 text-gray-600 text-sm md:text-gray-400">Lorem ipsum dolor sit, amet
                                consectetur
                                adipisicing elit. Consectetur obcaecati odio</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-center pb-6 md:py-0 md:w-1/2 md:border-b-8 border-gray-700">
                        <form>
                            <div class="flex flex-col rounded-lg border overflow-hidden lg:flex-row">
                                <input
                                    class="py-3 px-6 bg-white text-gray-700 outline-none placeholder-gray-500 focus:placeholder-transparent"
                                    type="text" name="email" placeholder="Enter your email"
                                    aria-label="Enter your email">

                                <button
                                    class="py-3 px-4 bg-gray-700 text-gray-100 text-sm font-semibold uppercase hover:bg-gray-600 focus:bg-gray-600 focus:outline-none">subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('global.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
    </main>
</body>

<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }

</script>
<?php /**PATH /home/creaspo/Desktop/SolaJobs-main/resources/views/reset.blade.php ENDPATH**/ ?>