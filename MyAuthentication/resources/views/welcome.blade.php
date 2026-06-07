<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-body p-4">
                        <h1 class="h4 mb-2">Welcome Guest</h1>
                        <p class="text-muted mb-4">Please login or register.</p>

                        <div class="d-flex gap-2">
                            <a class="btn btn-primary" href="{{route('login')}}">Login</a>
                            <a class="btn btn-outline-primary" href="{{route('register')}}">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
