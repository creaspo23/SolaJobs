<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Search users page result - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


    <style type="text/css">
        body {
            margin-top: 20px;
            /* background-color: #eee; */
            background-image: url(../assets/img/bg1.jpg);
            background-size: 160%;
            background-repeat: no-repeat;
        }


        .search-result-categories>li>a {
            color: #b6b6b6;
            font-weight: 400
        }

        .search-result-categories>li>a:hover {
            background-color: #ddd;
            color: #555
        }

        .search-result-categories>li>a>.glyphicon {
            margin-right: 5px
        }

        .search-result-categories>li>a>.badge {
            float: right
        }

        .search-results-count {
            margin-top: 10px
        }

        .search-result-item {
            padding: 20px;
            background-color: #fff;
            border-radius: 4px
        }

        .search-result-item:after,
        .search-result-item:before {
            content: " ";
            display: table
        }

        .search-result-item:after {
            clear: both
        }

        .search-result-item .image-link {
            display: block;
            overflow: hidden;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px
        }

        @media (min-width:768px) {
            .search-result-item .image-link {
                display: inline-block;
                margin: -20px 0 -20px -20px;
                float: left;
                width: 200px
            }
        }

        @media (max-width:767px) {
            .search-result-item .image-link {
                max-height: 200px
            }
        }

        .search-result-item .image {
            max-width: 100%
        }

        .search-result-item .info {
            margin-top: 2px;
            font-size: 12px;
            color: #999
        }

        .search-result-item .description {
            font-size: 13px
        }

        .search-result-item+.search-result-item {
            margin-top: 20px
        }

        @media (min-width:768px) {
            .search-result-item-body {
                margin-left: 200px
            }
        }

        .search-result-item-heading {
            font-weight: 400
        }

        .search-result-item-heading>a {
            color: #555
        }

        @media (min-width:768px) {
            .search-result-item-heading {
                margin: 0
            }
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg " >
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#"><img src="../assets/img/logo.svg" alt="" width="80" height="100"></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ '/home' }}">Home</a>
              </li>
              @if (Auth::check())
              @else
              <li class="nav-item">
                <a class="nav-link" href="{{ '/auth/login' }}">login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ '/auth/register' }}" >signup</a>
              </li>
              @endif
            </ul>
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
                    @foreach ($jobs as $job)
                        <section class="search-result-item">
                            <a class="image-link" href="#"><img class="image"
                                src="{{$job->company->logo}}">
                            </a>
                            <div class="search-result-item-body">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 class="search-result-item-heading"><a href="#">{{$job->company->name}}</a></h4>
                                        <h4 class="search-result-item-heading"><a href="#">{{$job->jobTitle}}</a></h4>
                                        <p class="info">{{$job->gender}}</p>
                                        <p class="description">{{$job->jobDescription}}</p>
                                    </div>
                                    <div class="col-sm-3 text-align-center">
                                        <p class="value3 mt-sm">$9, 700</p>
                                        <p class="fs-mini text-muted">PER WEEK</p>php<a class="btn btn-danger btn-info btn-sm"
                                            href="{{route('apply', $job->id)}}">Request this job</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endforeach

                </div>
            </div>

        </div>
    </main>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    </script>
</body>
