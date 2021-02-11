@include('global.header2')
@yield('title')
<title>detaills</title>
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
            <div class="card mb-3 position-absolute top-50 start-50 translate-middle" style="width: 50%;">
                <div class="row g-0">

                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">job title</h2>
                            <p class="card-text"><span class="fw-bolder fs-5">job description:</span> A job description
                                is an internal document that clearly
                                states the essential job requirements, job duties, job responsibilities, and skills
                                required
                                to perform a specific role. A more detailed job description will cover how success is
                                measured in the role so it can be used during performance evaluations.</p>
                            <p class="card-text"><span class="fw-bolder fs-5">Range of age:</span> 25 - 32</p>
                            <p class="card-text"><span class="fw-bolder fs-5">Gender:</span> any</p>
                            <p class="card-text"><span class="fw-bolder fs-5">Years of Experience:</span> years</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                            <a class="btn btn-primary btn-lg" href="{{ '/search' }}" role="button">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>
