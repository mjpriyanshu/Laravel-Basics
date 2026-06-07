<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$Subject}}</title>
</head>
<body>
    <h3>{{$Subject}}</h3>
    <p>{{$mailMessage}}</p>
    <h4>Details:</h4>
    <ul>
        <li>Name: {{$details['name']}}</li>
        <li>Product: {{$details['product']}}</li>
        <li>Price: {{$details['price']}}</li>
    </ul>
</body>
</html>

