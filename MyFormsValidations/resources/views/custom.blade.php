<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5" style="max-width: 520px;">
        <h3 class="mb-4">Add User</h3>

        <form action="{{ route('customValidation') }}" method="POST" class="border rounded p-4">
            @csrf

            {{-- input name must be 'username' not 'name' --}}
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" value="{{ old('username') }}" class="form-control" name="username" placeholder="Enter username (UPPERCASE)">
                @error('username') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" class="form-control" name="email" placeholder="Enter email">
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            {{-- you were missing this! --}}
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>

</html>