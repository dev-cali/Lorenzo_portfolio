<!DOCTYPE html>
<html>
<head>
    <title>Lorenzo Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="/">CreaCali</a>
            <div class="d-flex gap-5">
                <a class="nav-link text-white" href="/">Home</a>
                <a class="nav-link text-white" href="/about">About</a>
                <a class="nav-link text-white" href="/contact">Contact</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

</body>
</html>