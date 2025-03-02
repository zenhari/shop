<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <!-- استفاده از فونت Roboto برای ظاهر مدرن -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    a:hover {
      text-decoration: none;
    }
  </style>
</head>
<body class="bg-gray-100">
  <!-- Top Navigation Bar -->
  <nav class="bg-white shadow px-4 py-3">
    <div class="flex justify-between items-center">
      <div class="flex items-center">
        <a href="index.php" class="text-2xl font-bold text-gray-800 flex items-center">
          <i class="fa-solid fa-gear mr-2"></i> Admin Panel
        </a>
      </div>
      <div>
        <a href="#" class="text-gray-800 hover:text-gray-600 flex items-center">
          <i class="fa-solid fa-sign-out-alt mr-2"></i> Sign Out
        </a>
      </div>
    </div>
  </nav>

  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-gray-100 shadow-lg">
      <div class="p-4">
        <ul class="space-y-4">
          <li>
            <a href="../" class="flex items-center px-4 py-2 hover:bg-gray-700 rounded transition">
              <i class="fa-solid fa-house mr-3"></i> Shop
            </a>
          </li>
          <li>
            <a href="index.php?new" class="flex items-center px-4 py-2 hover:bg-gray-700 rounded transition">
              <i class="fa-solid fa-plus mr-3"></i> New Product
            </a>
          </li>
          <li>
            <a href="index.php?order" class="flex items-center px-4 py-2 hover:bg-gray-700 rounded transition">
              <i class="fa-solid fa-box mr-3"></i> Orders
            </a>
          </li>
          <li>
            <a href="index.php?product_list" class="flex items-center px-4 py-2 hover:bg-gray-700 rounded transition">
              <i class="fa-solid fa-list mr-3"></i> Product List
            </a>
          </li>
          <li>
            <a href="index.php?comment" class="flex items-center px-4 py-2 hover:bg-gray-700 rounded transition">
              <i class="fa-solid fa-comments mr-3"></i> Comments
            </a>
          </li>
        </ul>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-50 p-6 overflow-auto">
      <div class="bg-white p-6 shadow-lg rounded-lg">
        <?php
          if(isset($_GET['new'])){
              include ('add_product.php');
          }elseif(isset($_GET['order'])){
              include ('order.php'); 
          }elseif(isset($_GET['comment'])){
              include ('comment.php'); 
          }elseif(isset($_GET['product_list'])){
              include ('product_list.php'); 
          }elseif(isset($_GET['edit_product'])){
              include ('edit_product.php'); 
          }
        ?>
      </div>
    </main>
  </div>
</body>
</html>
