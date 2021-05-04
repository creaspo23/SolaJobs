@include('global.header')
@yield('title')
<title>Home </title>
@yield('body')


<body class="text-gray-800 antialiased">

    <div id="root">
        @include('global.nav2')

        @include('global.index-body')
    </div>

</body>
