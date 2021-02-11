<head>
    <meta charset="utf-8">

    @section('title')

    @endsection
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>


    <style type="text/css">
        body {
            margin-top: 20px;
            padding-top: 60px;
            /* background-color: #eee; */

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

        nav {
            .navbar-brand {
                font-size: 30px;
            }

            a {
                font-size: 18px;
                padding-bottom: 20px !important;
                padding-top: 20px !important;
                transition: all 0.3s ease;
            }


            .navbar-toggle {
                margin: 13px 15px 13px 0;
            }


            nav.navbar.shrink {
                min-height: 35px;

                .navbar-brand {
                    font-size: 25px;
                }

                a {
                    font-size: 15px;
                    padding-bottom: 10px !important;
                    padding-top: 10px !important;
                }

                .navbar-toggle {
                    margin: 8px 15px 8px 0;
                    padding: 4px 5px;
                }

    </style>
</head>
