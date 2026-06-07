<!-- resources/views/product.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Product List</h1>
    <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; min-width: 400px;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>₹{{ $product['price'] }}</td>
                    <td>
                        @if ($product['price'] > 500)
                            <span style="color: red; font-weight: bold;">Expensive</span>
                        @else
                            <span style="color: green; font-weight: bold;">Affordable</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
