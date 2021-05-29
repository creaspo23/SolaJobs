@include('global.header')
@yield('title')
<title>Home page</title>
@yield('body')

<body class="antialiased text-gray-800" class="antialiased ">
    @include('global.nav')
   
  @include('global.jobsform')
</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>
