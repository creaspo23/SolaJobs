@include('global.header')
@yield('title')
<title>Show A jobs </title>
@yield('body')


<body class="text-gray-800 antialiased">

    <div id="root">
        @include('global.nav2')
        <!-- Header -->
        <div class="relative  md:pt-32 pb-32 pt-12" style="height: 100%;position: relative;top: 60%;">
            <div class="px-4 md:px-10 mx-auto w-full">
                <button
                    class="p-2 my-5 bg-green-500 text-white rounded-md focus:outline-none focus:ring-2 ring-green-300 ring-offset-2">
                    <a href="/dashbord/{{ $company->id }}/edit">Edit job</a>
                </button>
                <div>

                    <!-- Card stats -->
                    <div class="flex flex-wrap">

                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        </div>
                        <div class="w-full lg:w-6/12 ">


                            <div class=" max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">

                                <div class="flex items-center px-6 py-3 bg-gray-900 ">

                                    <h1 class="mx-3 text-white font-semibold text-lg">Company name :
                                        {{ $company->name }}
                                    </h1>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <form action="/dashbord/{{ $company->id }}" method="POST" class="ml-5">
                                        @method('DELETE')
                                        @csrf
                                        <button class="p-2 rounded-full bg-red-500 text-white ">
                                            X
                                        </button>
                                    </form>

                                </div>
                                <div class="py-4 px-6">
                                    <h1 class="text-2xl font-semibold text-gray-800"> job-field :
                                        {{ $company->jobTitle }}</h1>
                                    <p class="py-2 text-lg text-gray-700">description : {{ $company->jobDescription }}
                                    </p>
                                    <div class="flex items-center mt-4 text-gray-700">
                                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                                            <path
                                                d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z" />
                                            <g>
                                                <path
                                                    d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z" />
                                            </g>
                                        </svg>
                                        <h1 class="px-2 text-sm">{{ $company->gender }}</h1>
                                    </div>
                                    <div class="flex items-center mt-4 text-gray-700">
                                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                                            <path
                                                d="M256 32c-88.004 0-160 70.557-160 156.801C96 306.4 256 480 256 480s160-173.6 160-291.199C416 102.557 344.004 32 256 32zm0 212.801c-31.996 0-57.144-24.645-57.144-56 0-31.357 25.147-56 57.144-56s57.144 24.643 57.144 56c0 31.355-25.148 56-57.144 56z" />
                                        </svg>
                                        <h1 class="px-2 text-sm">{{ $company->state }}</h1>
                                    </div>
                                    <div class="flex items-center mt-4 text-gray-700">
                                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                                            <path
                                                d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z" />
                                        </svg>
                                        <h1 class="px-2 text-sm">{{ $company->email }}</h1>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
