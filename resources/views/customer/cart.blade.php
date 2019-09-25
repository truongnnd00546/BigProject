<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Giỏ hàng</h1>
    <table>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Quantity</th>
            <th>Unit Price (vnd)</th>
            <th>Total Price (vnd)</th>
        </tr>
        @foreach($shopping_cart->items as $item)
            <tr>
                <td>{{$item->product->id}}</td>
                <td>{{$item->product->name}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->product->price}}</td>
                <td>{{$item->product->price * $item->quantity}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>