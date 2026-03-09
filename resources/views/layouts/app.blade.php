<!DOCTYPE html>
<html>
<head>
    <title>Lorenzo Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="{{ url('/') }}">CreaCali</a>
            <div class="d-flex gap-4">
                <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
                <a class="nav-link text-white" href="{{ url('/skills') }}">Skills</a>
                <a class="nav-link text-white" href="{{ url('/projects') }}">Projects</a>
                <a class="nav-link text-white" href="{{ url('/experience') }}">Experience</a>
                <a class="nav-link text-white" href="{{ url('/contact') }}">Contact</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

</body>
</html>