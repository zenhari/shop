<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> <!-- اضافه کردن فونت آیکون -->
    <style>
        body {
            background-color: #f0f2f5; /* رنگ پس‌زمینه مانند فیسبوک */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Shopping Cart</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="product1.jpg" alt="Product 1" class="img-fluid" width="100"></td>
                    <td>Product 1</td>
                    <td>$10.00</td>
                    <td>
                        <button class="btn btn-secondary btn-sm">- <span class="sr-only">Minus</span></button>
                        <span class="mx-2">1</span>
                        <button class="btn btn-secondary btn-sm">+ <span class="sr-only">Plus</span></button>
                    </td>
                    <td>$10.00</td>
                    <td><button class="btn btn-danger btn-sm">Remove</button></td>
                </tr>
                <tr>
                    <td><img src="product2.jpg" alt="Product 2" class="img-fluid" width="100"></td>
                    <td>Product 2</td>
                    <td>$20.00</td>
                    <td>
                        <button class="btn btn-secondary btn-sm">- <span class="sr-only">Minus</span></button>
                        <span class="mx-2">1</span>
                        <button class="btn btn-secondary btn-sm">+ <span class="sr-only">Plus</span></button>
                    </td>
                    <td>$20.00</td>
                    <td><button class="btn btn-danger btn-sm">Remove</button></td>
                </tr>
            </tbody>
        </table>
        <div class="text-right">
            <h4>Total: $30.00</h4>
            <button class="btn btn-success btn-lg">Pay Now</button> <!-- دکمه پرداخت -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>