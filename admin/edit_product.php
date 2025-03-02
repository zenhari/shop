<?php
include("../conn.php");
$id = $_GET['id'];
$sql_current = "SELECT * FROM products WHERE id = '$id'";
$result_currect = mysqli_query($conn, $sql_current);
$row = mysqli_fetch_assoc($result_currect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <!-- استفاده از فونت Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">
  <div class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-lg">
      <!-- Card Header -->
      <div class="px-6 py-4 border-b border-gray-200">
        <h2 class="text-2xl font-bold text-gray-800 flex items-center">
          <i class="fa-solid fa-edit mr-2"></i> Edit Product
        </h2>
      </div>
      <!-- Card Body -->
      <div class="p-6">
        <form method="post" action="update_product.php" enctype="multipart/form-data">
          <div class="space-y-4">
            <!-- Product Name -->
            <div>
              <label for="title" class="block text-sm font-medium text-gray-700">Product Name</label>
              <input type="text" name="title" id="title" value="<?php echo $row['title']; ?>" placeholder="Product Name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
            </div>
            <!-- Description -->
            <div>
              <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
              <textarea name="description" id="description" rows="4" placeholder="Description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required><?php echo $row['description']; ?></textarea>
            </div>
            <!-- Price -->
            <div>
              <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
              <input type="number" name="price" id="price" value="<?php echo $row['price']; ?>" placeholder="Price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
            </div>
            <!-- Picture -->
            <div>
              <label for="picture" class="block text-sm font-medium text-gray-700">Product Image</label>
              <input type="file" name="picture" id="picture" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>
            <!-- Submit Button -->
            <div>
              <button type="submit" class="w-full inline-flex items-center justify-center rounded-md bg-blue-600 px-4 py-2 text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <i class="fa-solid fa-paper-plane mr-2"></i> Update Product
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
