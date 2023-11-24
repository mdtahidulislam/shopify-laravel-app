
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Store FAQ')</title>
    <link rel="shortcut icon" href="./images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Dashboard</h1>
 <div class="container">
    <div class="row">
        <div class="col-md-2">
            @include('partials.sidebar')
        </div>
        <div class="col-md-10">
            <div class="main-panel">
                <div class="content-wrapper row">
                    @yield('contents', 'Welcome to our Groups')
                </div>
            </div>
        </div>
    </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
