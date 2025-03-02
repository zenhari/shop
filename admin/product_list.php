<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>لیست نمایش</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" />
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
  <div class="container mx-auto py-8">
    <div class="bg-white shadow-lg rounded-lg">
      <!-- Card Header -->
      <div class="px-6 py-4 border-b border-gray-200">
        <h2 class="text-xl font-bold text-gray-800">لیست نمایش</h2>
      </div>
      <!-- Card Body -->
      <div class="p-6">
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200" style="direction: rtl;">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Picture</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Price</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">View</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Delete</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Edit</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <?php
                include("../conn.php");
                $sql_product = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql_product);
                while($products = mysqli_fetch_assoc($result)):
              ?>
              <tr>
                <td class="px-4 py-2">
                  <img src="../images/<?php echo $products['picture']; ?>" alt="<?php echo $products['title']; ?>" class="w-24 h-16 object-cover rounded">
                </td>
                <td class="px-4 py-2"><?php echo $products['title']; ?></td>
                <td class="px-4 py-2">
                  <?php 
                    $cat = $products['cat_id'];
                    $find_category = "SELECT * FROM category WHERE id = '$cat'";
                    $result_category = mysqli_query($conn, $find_category);
                    $row_category = mysqli_fetch_assoc($result_category);
                    if($row_category){
                        echo $row_category['name'];
                    } else {
                        echo "<span class='text-red-500'>No Category Selected Yet!</span>";
                    }
                  ?>
                </td>
                <td class="px-4 py-2">$<?php echo $products['price']; ?></td>
                <td class="px-4 py-2">
                  <a href="../single.php?id=<?php echo $products['id']; ?>" class="btn btn-primary btn-sm flex items-center">
                    <i class="fa-solid fa-eye mr-1"></i> View
                  </a>
                </td>
                <td class="px-4 py-2">
                  <a href="delete_product.php?id=<?php echo $products['id']; ?>" class="btn btn-danger btn-sm flex items-center">
                    <i class="fa-solid fa-trash mr-1"></i> Delete
                  </a>
                </td>
                <td class="px-4 py-2">
                  <a href="index.php?edit_product&id=<?php echo $products['id']; ?>" class="btn btn-warning btn-sm flex items-center">
                    <i class="fa-solid fa-edit mr-1"></i> Edit
                  </a>
                </td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
