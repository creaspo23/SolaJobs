<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
</head>

<body>
    @if ($company->jobs->count())
        <div>
            <h1> Bio about company and its jobs</h1>
            <ul>
                Name
                <li>
                    {{ $company->name }}
                </li>
                @foreach ($company->jobs as $job)
                    <ul>
                        <ul>
                            JobTitle
                            <li>
                                {{ $job->jobTitle }}
                            </li>
                        </ul>
                        <ul>
                            jobDescription

                            <li>
                                {{ $job->jobDescription }}
                            </li>
                        </ul>

                        <ul>
                            Gender
                            <li>
                                {{ $job->gender }}
                            </li>
                        </ul>

                    </ul>
            </ul>
    @endforeach

    </div>
    @endif




</body>

</html>
