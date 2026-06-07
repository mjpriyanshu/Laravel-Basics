<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

    <h1>Product List</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>