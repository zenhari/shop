<?php
include("conn.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    header("location: index.php");
}
$sql = "SELECT * FROM products WHERE id ='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shop Item</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <!-- استفاده از فونت Roboto برای ظاهر مدرن -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    .product-image {
      transition: transform 0.3s ease;
    }
    .product-image:hover {
      transform: scale(1.02);
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">
  <!-- Navigation -->
  <nav class="bg-gray-800 text-white px-6 py-4 shadow-md">
    <div class="container mx-auto flex items-center justify-between">
      <a href="index.php" class="flex items-center text-2xl font-bold">
        <i class="fa-solid fa-bag-shopping mr-2"></i>
        <span>Shop</span>
      </a>
      <div class="flex items-center space-x-4">
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
          $sql_category = "SELECT * FROM category";
          $result_category = mysqli_query($conn, $sql_category);
          while($row_category = mysqli_fetch_assoc($result_category)):
        ?>
        <li>
          <a href="category.php?cat_id=<?php echo $row_category['id']; ?>" class="block py-2 px-4 rounded hover:bg-gray-100 transition">
            <?php echo $row_category['name']; ?>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
    </aside>

    <!-- Product Details -->
    <main class="w-full lg:w-3/4">
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="flex flex-col lg:flex-row">
          <div class="lg:w-1/2">
            <img class="w-full h-96 object-cover product-image" src="images/<?php echo $row['picture']; ?>" alt="<?php echo $row['title']; ?>">
          </div>
          <div class="lg:w-1/2 p-6 flex flex-col justify-between">
            <div>
              <h3 class="text-3xl font-bold mb-4"><?php echo $row['title']; ?></h3>
              <p class="text-orange-600 text-2xl font-bold mb-4">$<?php echo $row['price']; ?></p>
              <p class="text-gray-600 mb-6"><?php echo $row['description']; ?></p>
            </div>
            <div class="flex space-x-4">
              <a href="#" class="btn btn-warning btn-sm flex items-center">
                <i class="fa-solid fa-cart-plus mr-2"></i>
                Add to Cart
              </a>
              <a href="index.php" class="btn btn-outline btn-sm flex items-center">
                <i class="fa-solid fa-arrow-left mr-2"></i>
                Back to Shop
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Additional Information -->
      <div class="bg-white shadow rounded-lg p-6 mt-8">
        <h4 class="text-xl font-bold mb-4">Information</h4>
        <p class="text-gray-600"><?php echo $row['information']; ?></p>
      </div>
    </main>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-4 mt-8">
    <div class="container mx-auto text-center">
      <p>&copy; Your Website 2025. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
