@include('global.header')
@yield('title')
<title>Show A company </title>
@yield('body')


<body class="text-gray-800 antialiased">

    <div id="root">
        @include('global.nav2')
        <!-- Header -->
        <div class="relative  md:pt-32 pb-32 pt-12" style="height: 100%;position: relative;top: 60%;">
            <div class="px-4 md:px-10 mx-auto w-full">
                <button
                    class="p-2 my-5 bg-green-500 text-white rounded-md focus:outline-none focus:ring-2 ring-green-300 ring-offset-2">
                    <a href="/dashbord/{{ $company->id }}/edit">Edit company</a>
                </button>

                <div>
                    <button
                        class="p-2 my-5 bg-blue-500 text-white rounded-md focus:outline-none focus:ring-2 ring-green-300 ring-offset-2">
                        <a href="/invoice/{{ $company->id }}">Invoice</a>
                    </button>
                </div>

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
                                    <h1 class="text-2xl font-semibold text-gray-800"> Company-Details

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
                    <div class="w-full ">
                      
                        <!-- component -->
                        <div class="grid min-h-screen place-items-center">
                            
                            <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
                                <h1>Add jobs</h1>
                                <h1 class="text-xl font-semibold">Hello there 👋, <span class="font-normal">please
                                        fill in your information to continue</span></h1>
                                <form class="mt-6" method="POST" action="/dashbord/{{$company->id}}/jobs">
                                   @include('global.jobsform')
                                    <button type="submit"
                                        class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                                        add jobs
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
