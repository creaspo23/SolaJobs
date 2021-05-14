@include('global.header')
@yield('title')
<title>Login </title>
@yield('body')

<body class="antialiased text-gray-800">
    <nav class="absolute top-0 z-50 flex flex-wrap items-center justify-between w-full px-2 py-3 navbar-expand-lg">
        <div class="container flex flex-wrap items-center justify-between px-4 mx-auto">
            <div class="relative flex justify-between w-full lg:w-auto lg:static lg:block lg:justify-start">
                <a class="inline-block py-2 mr-4 font-sans text-sm font-bold leading-relaxed text-white whitespace-no-wrap text-md"
                    href="{{ '/home' }}" style="font-style: italic; font-family:Roboto;">
                    <img src="../assets/img/logo.svg" width="80" height="100" style="margin-bottom: -15px;">
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
                <ul class="flex flex-col list-none lg:flex-row lg:ml-auto">
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="absolute w-full h-full">
            <div class="absolute top-0 w-full h-full bg-gray-900"
                style="background-image: url(../assets/img/bg1.jpg); background-size: 100%; background-repeat: no-repeat;">
            </div>
            <div class="container h-full px-4 mx-auto">
                <div class="flex items-center content-center justify-center h-full">
                    <div class="w-full px-4 lg:w-4/12">
                        <div
                            class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-gray-300 border-0 rounded-lg shadow-lg">
                            <div class="px-6 py-6 mb-0 rounded-t">
                                <div class="mb-3 text-center">



                                    <div class="inline-block px-4 py-2 mr-4 text-sm text-3xl font-bold leading-relaxed text-white whitespace-no-wrap bg-purple-600 rounded-full shadow-lg"
                                        style="font-style: italic; font-family:Roboto; margin-bottom:20px ">

                                        <span class="text-4xl uppercase ">l</span>og<span
                                            class="text-4xl uppercase ">i</span>n
                                    </div>

                                    <!-- <h6 class="text-sm font-bold text-gray-600 " style="margin-right: 15px;">
                                        Log In
                                    </h6> -->
                                </div>


                                <hr class="mt-6 border-gray-400 border-b-1" />
                            </div>
                            <div class="flex-auto px-4 py-10 pt-0 shadow-xl lg:px-10">
                                <div class="mb-3 font-bold text-center text-gray-500">

                                </div>
                                <form method="POST" action="/login">
                                    @csrf
                                    <div class="relative w-full mb-3">
                                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                                            for="email">{{ __('E-Mail Address') }}</label>
                                        <input type="email" id="email" name="email"
                                            class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white rounded shadow focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="email" style="transition: all 0.15s ease 0s;" required />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert" style="color: red">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="relative w-full mb-3">
                                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                                            for="password">{{ __('Password') }}
                                        </label>
                                        <input type="password" name="password" id="password"
                                            class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white rounded shadow focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror"
                                            required autocomplete="current-password" placeholder="Password"
                                            style="transition: all 0.15s ease 0s;" required />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert" style="color: red">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="mt-6 text-center">
                                        <button
                                            class="w-full px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase bg-purple-600 rounded shadow outline-none active:bg-gray-700 hover:shadow-lg focus:outline-none"
                                            type="submit" style="transition: all 0.15s ease 0s;">
                                            login
                                        </button>
                                    </div>

                                </form>

                                @include('global.errors')
                                <div class="flex flex-wrap mt-6">

                                    <div class="w-1/2 mb-2 font-bold text-center gray-700 text- text-s ">
                                        <a href="/auth/register" class="text-gray-900"><small>Create new
                                                account</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </main>
</body>
