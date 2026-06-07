<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single User</title>
</head>
<body>
    @foreach ($data as $id => $user)
        <h3>Name:  {{ $user->name }} </h3>
        <p>Email: {{ $user->email }} </p>
        <p>Age: {{ $user->age }} </p>   
        <p>City: {{ $user->city }} </p>
    @endforeach
</body>
</html>