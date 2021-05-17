<div class="relative md:ml-64 bg-gray-100"
    style="background-image: url({{ asset('assets/img/dashboard-img.webp') }}); background-repeat: no-repeat;">
    <nav
        class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
        <div
            class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
            <button
                class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                <i class="fas fa-bars"></i></button>
            <a class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                href="javascript:void(0)">
                SolaJobs Admin
            </a>
            <ul class="md:hidden items-center flex flex-wrap list-none">
                <li class="inline-block relative">
                    <a class="text-gray-600 block py-1 px-3" href="#pablo"
                        onclick="openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
                    <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                        style="min-width: 12rem;" id="notification-dropdown">
                        <a href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">LogOut</a>
                    </div>
                </li>
                <li class="inline-block relative">
                    <a class="text-gray-600 block" href="#pablo"
                        onclick="openDropdown(event,'user-responsive-dropdown')">
                        <div class="items-center flex">
                            <span
                                class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"><img
                                    alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                    src="./assets/img/team-1-800x800.jpg" /></span>
                        </div>
                    </a>
                    <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                        style="min-width: 12rem;" id="user-responsive-dropdown">
                        <a href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">LogOut</a>

                    </div>
                </li>
            </ul>
            <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
                id="example-collapse-sidebar">
                <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-300">
                    <div class="flex flex-wrap">
                        <div class="w-6/12">
                            <a class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                                href="javascript:void(0)">
                                SolaJobs Admin
                            </a>
                        </div>
                        <div class="w-6/12 flex justify-end">
                            <button type="button"
                                class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                                onclick="toggleNavbar('example-collapse-sidebar')">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <form class="mt-6 mb-4 md:hidden">
                    <div class="mb-3 pt-0">
                        <input type="text" placeholder="Search"
                            class="px-3 py-2 h-12 border border-solid  border-gray-600 placeholder-gray-400 text-gray-700 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
                    </div>
                </form>
                <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                    <li class="items-center">
                        <a class="text-pink-500 hover:text-pink-600 text-xs uppercase py-3 font-bold block"
                            href="{{ route('pages.master') }}"><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                            Home</a>
                    </li>
                    <li class="items-center">
                        <a class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                            href="{{ route('pages.dashbord.index') }}"><i
                                class="fas fa-newspaper text-gray-500 mr-2 text-sm"></i>
                            Jobs</a>
                    </li>
                    <li class="items-center">
                        <a class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                            href="/home"><i class="fas fa- fa-bars text-gray-500 mr-2 text-sm"></i>
                            Visit Website</a>
                    </li>
                    @if (Auth::check())
                        <li class="nav-item dropdown">
                            <a class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                                href=""><i class="fas fa-user-circle  text-gray-500 mr-2 text-sm"></i>
                                {{ Auth::user()->name }}</a>
                    @endif

                    <li class="nav-item dropdown">
                        <a class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                            href="/logout"><i class="fas fa-fingerprint text-gray-500 mr-2 text-sm"></i>
                            Logout</a>

                    </li>

                </ul>
                <hr class="my-4 md:min-w-full" />

            </div>
        </div>
    </nav>
    <nav
        class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4">
        <div class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4">
            <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="./index.html">Home</a>
            <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
                <div class="relative flex w-full flex-wrap items-stretch">
                    <span
                        class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i
                            class="fas fa-search"></i></span>
                    <input type="text" placeholder="Search here..."
                        class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                </div>
            </form>

        </div>
    </nav>
