@include('global.header')
@yield('title')
<title>Home page</title>
@yield('body')

<body class="antialiased text-gray-800" class="antialiased ">
    @include('global.nav')
    <main>
        <div class="relative flex items-center content-center justify-center pt-16 pb-32" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("../assets/img/pro-bg6.jpeg");'>
                <span id="blackOverlay" class="absolute w-full h-full bg-black opacity-75"></span>
            </div>
            <div class="inline-block align-middle ">
                <div class="container relative mx-auto mb-5">
                    <div class="flex items-center flex-first">
                        <div class="w-full px-4 ml-auto mr-auto text-center">
                            <div class="">
                                <h1 class="text-4xl font-semibold text-white">
                                    Search for a Job
                                </h1>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="relative text-gray-600" style="margin-left: 30px;">
                    <input type="search" name="serch" placeholder="Search"
                        class="h-10 px-2 pr-10 text-sm bg-white rounded-full focus:outline-none"
                        style="margin-left: 10px; padding-right: 50px;">
                    <a href="{{ '/search' }}">
                        <button type="submit" class="absolute top-0 right-0 m-4 mt-3" style="left: 178px; ">
                            <svg class="w-8 fill-current h-7" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966; margin-left: 10px; 
                            xml:space=" preserve" width="30px" height="20px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </a>
                </div>

            </div>
        </div>



    </main>
    <footer class="relative pt-8 pb-6 bg-gray-300">
        <div class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none"
            style="height: 80px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-6/12">
                    <h4 class="text-3xl font-semibold">Lets keep in touch!</h4>
                    <h5 class="mt-0 mb-2 text-lg text-gray-700">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6">
                        <button
                            class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-blue-400 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none"
                            type="button">
                            <i class="flex fab fa-twitter"></i></button><button
                            class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-blue-600 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none"
                            type="button">
                            <i class="flex fab fa-facebook-square"></i></button><button
                            class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-pink-400 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none"
                            type="button">
                            <i class="flex fab fa-dribbble"></i></button><button
                            class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-gray-900 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none"
                            type="button">
                            <i class="flex fab fa-github"></i>
                        </button>
                    </div>
                </div>

            </div>
            <hr class="my-6 border-gray-400" />
            <div class="flex flex-wrap items-center justify-center md:justify-between">
                <div class="w-full px-4 mx-auto text-center md:w-4/12">
                    <div class="py-1 text-sm font-semibold text-gray-600">
                        Copyright © 2020 Tailwind Starter Kit by
                        <a href="# " class="text-gray-600 hover:text-gray-900">MrRobot</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }

</script>
