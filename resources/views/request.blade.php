@include('global.header')
@yield('title')
<title>Request for a Job </title>
@yield('body')

<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
        @include('global.nav')
        </div>

    </nav>
    <main>
        <section class="absolute w-full h-auto">
            <div class="absolute top-5 w-full h-full bg-gray-900">
            </div>

            <div class="container mx-auto px-4 h-full mt-8">
                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-4/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0 pb-1">
                            <div class="rounded-t mb-0 px-6 py-6">
                                <div class="text-center mb-3">
                                    <h6 class="text-gray-600 text-sm font-bold">
                                        Personal Info
                                    </h6>
                                </div>

                                <hr class="mt-6 border-b-1 border-gray-400" />
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <div class="text-gray-500 text-center mb-3 font-bold">

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
                                                placeholder="you@example.com" style="transition: all 0.15s ease 0s;" />
                                        </div>

                                        <div class="relative w-full mb-3 items-center justify-center bg-grey-lighter">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password">CV</label>
                                            <label
                                                class="w-50 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-s shadow-s tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                                                <svg class="w-8 h-8" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path
                                                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                                </svg>
                                                <span class="mt-2 text-base leading-normal">Select a file</span>
                                                <input type='file' class="hidden" />
                                            </label>
                                        </div>
                                        <div class="text-center mt-6">
                                            <button
                                                class="bg-gray-900 text-white active:bg-green-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                                type="button" style="transition: all 0.15s ease 0s;">
                                                Submit
                                            </button>
                                        </div>
                                </form>
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
