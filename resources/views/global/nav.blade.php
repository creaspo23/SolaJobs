
<nav class="absolute top-0 z-50 flex flex-wrap items-center justify-between w-full px-2 py-3 navbar-expand-lg">
    <div class="container flex flex-wrap items-center justify-between px-4 mx-auto">
        <div class="relative flex justify-between w-full lg:w-auto lg:static lg:block lg:justify-start">

            <div class="inline-block py-2 mr-4 font-sans text-sm font-bold leading-relaxed text-white whitespace-no-wrap text-md"
                href="{{ '/home' }}" style="font-style: italic; font-family:Roboto;">
                <img src="../assets/img/logo.svg" width="80" height="100" style="margin-bottom: -15px;">
                <span class="text-lg text-blue-500 uppercase">S</span>ola<span
                    class="text-lg text-blue-500 uppercase">J</span>obs
            </div>
            <button
                class="block px-3 py-1 text-xl leading-none bg-transparent border border-transparent border-solid rounded outline-none cursor-pointer lg:hidden focus:outline-none"
                type="button" onclick="toggleNavbar('example-collapse-navbar')">
                <i class="text-white fas fa-bars"></i>
            </button>
        </div>
        <div class="items-center flex-grow hidden bg-white lg:flex lg:bg-transparent lg:shadow-none"
            id="example-collapse-navbar">

            <ul class="flex flex-col list-none lg:flex-row lg:ml-auto">
                <li class="flex items-center">
                    <button
                        class="px-4 py-2 mb-3 ml-3 text-xs font-bold text-gray-800 uppercase bg-white rounded shadow outline-none active:bg-gray-100 hover:shadow-md focus:outline-none lg:mr-1 lg:mb-0"
                        type="button" style="transition: all 0.15s ease 0s;">
                        <i class="fas fa-arrow-alt-circle-down"></i><a href="{{ '/login' }}"> Login</a>
                    </button>
                </li>
                <li class="flex items-center">
                    <button
                        class="px-4 py-2 mb-3 ml-3 text-xs font-bold text-gray-800 uppercase bg-white rounded shadow outline-none active:bg-gray-100 hover:shadow-md focus:outline-none lg:mr-1 lg:mb-0"
                        type="button" style="transition: all 0.15s ease 0s;">
                        <i class="fas fa-arrow-alt-circle-down"></i> <a href="{{ '/signup' }}">Sign Up </a>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
