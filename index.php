<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- استفاده از فونت Roboto برای ظاهر مدرن -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .btn i {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Navigation -->
    <nav class="bg-gray-800 text-white px-6 py-4 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <a href="#" class="flex items-center text-2xl font-bold">
                <i class="fa-solid fa-bag-shopping mr-2"></i>
                <span>Shop</span>
            </a>
            <div class="flex items-center space-x-4">
                <!-- نوار جستجو -->
                <div class="relative">
                    <input type="text" placeholder="Search products..." class="input input-bordered rounded-full pl-10 pr-4 py-2">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>
                <a href="#" class="btn btn-ghost btn-sm"><i class="fa-solid fa-user"></i></a>
                <a href="#" class="btn btn-ghost btn-sm"><i class="fa-solid fa-heart"></i></a>
                <a href="#" class="btn btn-ghost btn-sm"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto py-8 flex flex-col lg:flex-row gap-8">
        <!-- Sidebar for Categories -->
        <aside class="w-full lg:w-1/4 bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-bold mb-4">Categories</h2>
            <ul class="space-y-2">
                <?php
                include ("conn.php");
                $sql_category = "SELECT * FROM category";
                $result_category = mysqli_query($conn, $sql_category);
                while($row_category = mysqli_fetch_assoc($result_category)):
                ?>
                <li>
                    <a href="category.php?cat_id=<?php echo $row_category['id'] ?>" class="block py-2 px-4 rounded hover:bg-gray-100 transition">
                        <?php echo $row_category['name'] ?>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
        </aside>

        <!-- Product Listing -->
        <main class="w-full lg:w-3/4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            include ("conn.php");
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)):
            ?>
            <div class="product-card bg-white rounded-lg shadow overflow-hidden">
                <a href="#">
                    <img src="images/<?php echo $row['picture']; ?>" alt="<?php echo $row['title']; ?>" class="w-full h-56 object-cover">
                </a>
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">
                        <a href="#" class="hover:text-orange-500 transition"><?php echo $row['title']; ?></a>
                    </h3>
                    <p class="text-orange-600 font-bold mb-2">$<?php echo $row['price']; ?></p>
                    <p class="text-gray-600 text-sm mb-4"><?php echo $row['description']; ?></p>
                    <div class="flex justify-between">
                        <a href="#" class="btn btn-warning btn-sm">
                            <i class="fa-solid fa-cart-plus"></i>Add to Cart
                        </a>
                        <a href="single.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">
                            <i class="fa-solid fa-info-circle"></i>More Info
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </main>
    </div>

    <!-- Pagination -->
    <div class="container mx-auto my-8">
        <ul class="flex justify-center space-x-2">
            <li><a href="#" class="btn btn-sm btn-outline">1</a></li>
            <li><a href="#" class="btn btn-sm btn-outline">2</a></li>
            <li><a href="#" class="btn btn-sm btn-outline">3</a></li>
        </ul>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; Your Website 2025. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
