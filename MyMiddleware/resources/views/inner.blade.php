<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card">
            <div class="card-body p-4">
                <h1 class="h4 mb-2">Inner Page</h1>
                <p class="text-muted mb-4">This is a basic inner page.</p>

                <div class="d-flex gap-2">
                    <a class="btn btn-secondary" href="{{route('home')}}">Home</a>
                    <a class="btn btn-outline-secondary" href="{{route('dashboard')}}">Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
