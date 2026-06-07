<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-body p-4">
                        <h1 class="h4 mb-3">Register</h1>

                        <form method="post" action="/registerSave">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" id="name" name="name" type="text" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" id="password" name="password" type="password" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password_confirmation">Confirm Password</label>
                                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="age">Age</label>
                                <input class="form-control" id="age" name="age" type="number" min="1" max="150" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="role">Role</label>
                                <input class="form-control" id="role" name="role" type="text" required>
                            </div>

                            <button class="btn btn-success w-100" type="submit">Create Account</button>
                        </form>

                        <div class="mt-3 d-flex justify-content-between">
                            <a href="/">Home</a>
                            <a href="/login">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
