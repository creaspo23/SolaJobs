@include('global.header')
@yield('title')
<title>Sing Up</title>
@yield('body')

<body class="antialiased text-gray-800">
    <nav class="absolute top-0 z-50 flex flex-wrap items-center justify-between w-full px-2 py-3 navbar-expand-lg">
        <div class="container flex flex-wrap items-center justify-between px-4 mx-auto">
            <div class="relative flex justify-between w-full lg:w-auto lg:static lg:block lg:justify-start">
                <a class="inline-block py-2 mr-4 font-sans text-sm font-bold leading-relaxed text-white whitespace-no-wrap text-md"
                    href="{{ '/' }}" style="font-style: italic; font-family:Roboto;">
                    <img src="../assets/img/logo.svg" width="80" height="100">
                    <span class="text-lg text-blue-500 uppercase">S</span>ola<span
                        class="text-lg text-blue-500 uppercase">J</span>obs
                </a>
                <button
                    class="block px-3 py-1 text-xl leading-none bg-transparent border border-transparent border-solid rounded outline-none cursor-pointer lg:hidden focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="items-center flex-grow hidden bg-white lg:flex lg:bg-transparent lg:shadow-none"
                id="example-collapse-navbar">
                <ul class="flex flex-col mr-auto list-none lg:flex-row">

                </ul>

                <li class="flex items-center">
                    <button
                        class="px-4 py-2 mb-3 ml-3 text-xs font-bold text-purple-600 uppercase bg-white rounded shadow outline-none active:bg-gray-100 hover:shadow-md focus:outline-none lg:mr-1 lg:mb-0"
                        type="button" style="transition: all 0.15s ease 0s;">
                        <i class="fas fa-arrow-alt-circle-down"></i><a href="{{ '/login' }}"> Log in </a>
                    </button>
                </li>

                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="absolute w-full h-auto">
            <div class="container bg-purple-600">
                <div class="absolute top-0 w-full h-full bg-gray-900 "
                    style="background-image: url(../assets/img/.png); background-size:cover; background-repeat: no-repeat;">
                </div>
                <div class="container h-full px-4 mt-2  ">
                    <div class="flex items-center content-center justify-center ml-9 ">
                        <div class="w-full px-4 lg:w-4/12">
                            <div
                                class="relative flex-col w-full min-w-0 pb-1 mb-6 break-words bg-gray-300 border-0 rounded-lg shadow-lg">
                                <div class="px-6 py-6 mb-0 rounded-t">
                                    <div class="mb-3 text-center">

                                        <div class="inline-block px-4 py-2 mr-4 text-sm text-3xl font-bold leading-relaxed text-white whitespace-no-wrap bg-purple-600 rounded-full shadow-lg "
                                            style="font-style: italic; font-family:Roboto;  ">
                                            <span class="text-4xl uppercase ">S</span>ign<span
                                                class="text-4xl uppercase ">u</span>p
                                        </div>
                                    </div>

                                    <hr class="mt-6 border-gray-400 border-b-1" />
                                </div>
                                <div class="flex-auto px-4 py-10 pt-0 lg:px-10">
                                    <div class="mb-3 font-bold text-center text-gray-500">

                                    </div>

                                    <form>
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                for="grid-password">Name</label><input type="Name"
                                                class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                                placeholder="Name" style="transition: all 0.15s ease 0s;" />
                                        </div>


                                        <div class="relative w-full mb-3">
                                            <label
                                                class='block uppercase text-gray-700 text-xs font-bold mb-3'>Brithday</label>
                                            <div class="flex justify-between  ">
                                                <select
                                                    class=" justify-items-stretch block appearance-none text-gray-600 bg-white border border-gray-400 shadow-inner rounded ">
                                                    <option>day ...</option>
                                                </select>

                                                <select
                                                    class=" justify-items-stretch block appearance-none text-gray-600 bg-white border border-gray-400 shadow-inner rounded">
                                                    <option>month ...</option>
                                                </select>

                                                <select
                                                    class="block appearance-none text-gray-600 bg-white border border-gray-400 shadow-inner rounded">
                                                    <option>year ...</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                for="grid-password">Age</label><input type="Age"
                                                class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                                placeholder="Age" style="transition: all 0.15s ease 0s;" />
                                        </div>
                                        <div class="relative w-full mb-3">
                                            <label class='block uppercase text-gray-700 text-xs font-bold mb-3'>pick
                                                your
                                                State</label>
                                            <div class="flex-shrink w-full inline-block relative">
                                                <select
                                                    class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                                    <option>choose ...</option>
                                                    <option>Kh</option>
                                                    <option>Om</option>
                                                    <option>Gz</option>
                                                    <option>Ps</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                for="grid-password">Gender</label>
                                            <div class="flex justify-between">
                                                <div class="mb-2 ">
                                                    <div class="form-switch inline-block align-middle ml-2 text-xs ">
                                                        <input type="checkbox" name="1" id="1"
                                                            class="form-switch-checkbox" />
                                                        <label class="form-switch-label" for="1"></label>
                                                    </div>
                                                    <label class="text-xs text-grey-dark" for="1">Male</label>
                                                </div>

                                                <div class="mb-2">
                                                    <div class="form-switch inline-block align-middle text-xs">
                                                        <input type="checkbox" name="2" id="2"
                                                            class="form-switch-checkbox" />
                                                        <label class="form-switch-label" for="2"></label>
                                                    </div>
                                                    <label class="text-xs text-grey-dark" for="2">Female</label>
                                                </div>
                                            </div>

                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    for="grid-password">Experience</label><input type="Experience"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                                    placeholder="experience" style="transition: all 0.15s ease 0s;" />
                                            </div>

                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    for="grid-password">Phone</label><input type="phone"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                                    placeholder="+249" style="transition: all 0.15s ease 0s;" />
                                            </div>
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    for="grid-password">Email</label><input type="email"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                                    placeholder="you@example.com"
                                                    style="transition: all 0.15s ease 0s;" />
                                            </div>

                                            <div
                                                class="relative w-full mb-3 items-center justify-center bg-grey-lighter">
                                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    for="bio">Bio:</label>
                                                <textarea name="bio" id="bio" cols="30" rows="6"
                                                    placeholder="talk a bout your self"></textarea>
                                            </div>


                                            <div class="mt-6 text-center">
                                                <button
                                                    class="w-full px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase bg-purple-600 rounded shadow outline-none active:bg-gray-700 hover:shadow-lg focus:outline-none"
                                                    type="button" style="transition: all 0.15s ease 0s;">
                                                    Sign Up
                                                </button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }

</script>
