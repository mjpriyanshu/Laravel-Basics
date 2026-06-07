<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="card">
                    <div class="card-body p-4">
                        <h1 class="h4 mb-3">Login</h1>

                        <form method="post" action="{{route('loginMatch')}}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" id="password" name="password" type="password" required>
                            </div>

                            <button class="btn btn-primary w-100" type="submit">Login</button>
                        </form>

                        <div class="mt-3 d-flex justify-content-between">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('register')}}">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
