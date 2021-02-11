@include('global.header2')
@yield('title')
<title>search</title>
@yield('body')

<body style="background-image: url(../assets/img/bg1.jpg);
background-size: 160%;
background-repeat: no-repeat;">

    <nav class="navbar navbar-expand-lg  navbar-light " style="top: -20px;padding-top: 0px;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarTogglerDemo01" style="margin-top: -50px;">

                <a class="navbar-brand" href="{{ '/home' }}"><img src="../assets/img/logo.svg" alt="" width="60"
                        height="70"></a>

                <div class="btn-group avbar-nav me-auto mb-2 mb-lg-0">
                    <a href="{{ '/home' }}" class="btn btn-primary active">Home</a>
                    <a href="{{ '/login' }}" class="btn btn-primary">Login</a>
                    <a href="{{ '/signup' }}#" class="btn btn-primary active">SignUp</a>
                </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <main>


        <div class="container">
            <div class="row ng-scope">

                <div class="col-md-9 col-md-pull-3">
                    <p class="search-results-count">About 4 (0.39 sec.) results</p>
                    <section class="search-result-item">
                        <a class="image-link" href="{{ '/detaills' }}"><img class="image"
                                src="../assets/img/co1.jpeg">
                        </a>
                        <div class="search-result-item-body">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h4 class="search-result-item-heading"><a href="#">Zain SD</a></h4>
                                    <p class="info">Khartoum, st 20188</p>
                                    <p class="description">job description</p>
                                </div>

                            </div>
                        </div>
                    </section>
                    <section class="search-result-item">
                        <a class="image-link" href="#"><img class="image" src="../assets/img/co2.jpeg">
                        </a>
                        <div class="search-result-item-body">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h4 class="search-result-item-heading"><a href="#">MTN SD</a> </h4>
                                    <p class="info">north state, bb 20188</p>
                                    <p class="description">job description</p>
                                </div>

                            </div>
                        </div>
                    </section>
                    <section class="search-result-item">
                        <a class="image-link" href="#"><img class="image" src="../assets/img/co3.png">
                        </a>
                        <div class="search-result-item-body">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h4 class="search-result-item-heading"><a href="#">Sudani</a></h4>
                                    <p class="info">portsudan, bb 20188</p>
                                    <p class="description">job description</p>
                                </div>

                            </div>
                        </div>
                    </section>
                    <section class="search-result-item">
                        <a class="image-link" href="#"><img class="image" src="../assets/img/co4.jpeg">
                        </a>
                        <div class="search-result-item-body">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h4 class="search-result-item-heading"><a href="#">huawei SD</a></h4>
                                    <p class="info">khartoum,</p>
                                    <p class="description">job description</p>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    </main>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    </script>
</body>
