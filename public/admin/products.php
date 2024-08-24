<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IvoryStreets - Products</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Styles for the modal */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      z-index: 50;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
      /* Black with opacity */
      backdrop-filter: blur(10px);
      /* Blur the background */
    }

    /* Modal Content */
    .modal-content {
      background-color: white;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      max-width: 500px;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    /* Close Button */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>

<body class="bg-gray-100 font-sans antialiased">

  <?php include 'side-bar.php'; ?>

  <div class="flex-1 lg:ml-64 p-6 bg-gray-100 overflow-y-auto h-screen pt-16 lg:pt-6">

    <?php include 'header.php'; 
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "ivorystreetsdb";
  
      $conn = mysqli_connect($servername, $username, $password, $dbname);
  
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
  
      $sql = "SELECT p.product_id, p.product_name, p.product_size, p.product_desc, p.product_price, c.category_name FROM product p JOIN 
      category c ON p.category_id = c.category_id";
      $result = mysqli_query($conn, $sql);
  
      $sql_category = "SELECT category_id, category_name FROM category";
      $result_category = mysqli_query($conn, $sql_category);
      $result_categoryEdit = mysqli_query($conn, $sql_category);

      //$productId = isset($_GET['edit_product_id']);
      $sql_editSelect = "SELECT product_name, product_size, product_desc, product_price, product_qty, category_id, product_image FROM product where product_id = 1";
      $result_editSelect = mysqli_query($conn, $sql_editSelect);

      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_product_id'])) {
        $productId = intval($_POST['delete_product_id']);
        
        $sql = "DELETE FROM product WHERE product_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $productId);
    
        if ($stmt->execute()) {
            echo "Product deleted successfully!";
        } else {
            echo '<script>alert("Error deleting product: ' . $conn->error . '");</script>';
        }
    
        $stmt->close();
      }
      else if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_product_id'])) {
        // Check which form is being submitted, if you have multiple forms
        
            $edit_product_id = intval($_POST['edit_product_id']);
            $editproduct_name = htmlspecialchars($_POST['editproduct_name'], ENT_QUOTES, 'UTF-8');
            $editproduct_size = htmlspecialchars($_POST['editproduct_size'], ENT_QUOTES, 'UTF-8');
            $editproduct_desc = htmlspecialchars($_POST['editproduct_desc'], ENT_QUOTES, 'UTF-8');
            $editproduct_price = floatval($_POST['editproduct_price']);
            $editproduct_quantity = intval($_POST['editproduct_quantity']);
            $editproduct_image = htmlspecialchars($_POST['editproduct_image'], ENT_QUOTES, 'UTF-8');
            $category_id = intval($_POST['editcategory_id']);
    
            // Check if required fields are not empty
            if ($edit_product_id && $editproduct_name && $editproduct_size && $editproduct_price && $category_id) {
                
                // Construct the update query
                $sql_update = "UPDATE product 
                               SET product_name = ?, product_size = ?, product_desc = ?, product_price = ?, product_qty = ?, product_image = ?, category_id = ? 
                               WHERE product_id = ?";
                
                // Prepare and execute the query
                if ($stmt = $conn->prepare($sql_update)) {
                    $stmt->bind_param('sssdisii', $editproduct_name, $editproduct_size, $editproduct_desc, $editproduct_price, $editproduct_quantity, $editproduct_image, $category_id, $edit_product_id);
                    
                    if ($stmt->execute()) {
                        echo "Product updated successfully.";
                    } else {
                        echo "Error updating product: " . $stmt->error;
                    }
    
                    $stmt->close();
                } else {
                    echo "Error preparing statement: " . $conn->error;
                }
            
          }
      }

      elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get product details
        $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
        $product_size = mysqli_real_escape_string($conn, $_POST['product_size']);
        $product_desc = mysqli_real_escape_string($conn, $_POST['product_desc']);
        $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
        $product_qty = mysqli_real_escape_string($conn, $_POST['product_quantity']);
        $picture = mysqli_real_escape_string($conn, $_POST['product_image']);
        $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);
        $update_time = $update_time = date('Y-m-d');
        $admin_id = 1;

          // Prepare SQL query to insert product and image blob
          $sql = "INSERT INTO product (product_name, product_size, product_desc, product_price, product_qty, category_id, updated_at, admin_id, product_image) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
  
          // Prepare the statement
          $stmt = mysqli_prepare($conn, $sql);
          if ($stmt) {
              // Bind the parameters
              mysqli_stmt_bind_param($stmt, "sssdiisis", 
                  $product_name, 
                  $product_size, 
                  $product_desc, 
                  $product_price, 
                  $product_qty,
                  $category_id,
                  $update_time,
                  $admin_id,
                  $picture
            
                );
    
                // Execute the query
                if (mysqli_stmt_execute($stmt)) {
                    echo "Product added successfully!";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
    
                // Close the statement
                mysqli_stmt_close($stmt);
            } else {
                echo "Error preparing statement: " . mysqli_error($conn);
            }
        }
      
  ?>
    <div class="mt-6">
      <h3 class="text-2xl font-bold mb-4">Products</h3>
      <!-- Add Product Button -->
      <button id="openAddModalBtn" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4 mb-4">Add Product</button>

      <!-- Add Product Modal -->
      <div id="addProductModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <form method="POST" enctype="multipart/form-data">
            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Product Name</label>
              <input type="text" name="product_name" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Product Size</label>
              <input type="text" name="product_size" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Product Description</label>
              <textarea name="product_desc" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Product Price</label>
              <input type="text" name="product_price" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Product Quantity</label>
              <input type="text" name="product_quantity" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Product Image URL</label>
              <input type="text" name="product_image" id="imageURL" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
              <img id="imagePreview" class="mt-4 w-full h-72 object-cover rounded-lg" style="display:none;" />
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Category ID</label>
              <select name="category_id" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <?php
                      if ($result_category->num_rows > 0) {
                        echo "<option value=''>Select Product</option>";
                        while ($row = $result_category->fetch_assoc()) {
                          echo "<option value='" . htmlspecialchars($row['category_id']) . "'>" . htmlspecialchars($row['category_name']) . "</option>";
                        }
                      } else {
                        echo "<option value=''>No products available</option>";
                      }
                  ?>
              </select>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Updated At</label>
              <div type="date"  id="productDate" name="update_time" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required></div>
            </div>

            <div>
              <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Save</button>
              <button type="reset" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Clear</button>
            </div>
          </form>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow h-[36rem]">
        <div class="overflow-x-auto overflow-y-auto h-full">
          <table class="min-w-full bg-white">
            <thead class="sticky top-0 z-10 bg-white">
              <tr>
                <th class="py-2 px-4 border-b text-left text-gray-600 hidden">Product ID</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Product Name</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Product Size</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Description</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Price</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Category Name</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Edit/Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
            if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td class='py-2 px-4 border-b hidden'>" . htmlspecialchars($row['product_id']) . "</td>";
                        echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['product_name']) . "</td>";
                        echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['product_size']) . "</td>";
                        echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['product_desc']) . "</td>";
                        echo "<td class='py-2 px-4 border-b'>$" . htmlspecialchars($row['product_price']) . "</td>";
                        echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['category_name']) . "</td>";
                        echo "<td><button class='openEditModalBtn px-2 py-2 text-xs font-medium text-center inline-flex items-center text-white 
                        bg-slate-500 rounded-lg hover:bg-slate-600 focus:ring-4 focus:outline-none focus:ring-slate-300'
                         data-id='" . htmlspecialchars($row['product_id']) . "'>Edit</button>";
                        echo "<button class='openDeleteModalBtn px-2 py-2 text-xs font-medium text-center inline-flex items-center text-white 
                        bg-red-500 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300' 
                        data-id='" . htmlspecialchars($row['product_id']) . "'>Delete</button></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='py-2 px-4 border-b text-center'>No products available</td></tr>";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
              <!-- Add more product rows as needed -->
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Edit Product Modal -->
    <div id="editProductModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Edit Product</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="edit_product_id" id="edit_product_id">
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Product Name</label>
                <input type="text" name="editproduct_name" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" 
                  <?php 
                      // Ensure $result_editSelect is not null and has rows
                      if ($result_editSelect && $result_editSelect->num_rows > 0) {
                          // Fetch the first row
                          $row = $result_editSelect->fetch_assoc();
                          // Set the value attribute if 'product_name' exists in the row
                          if (isset($row['product_name'])) {
                              echo "value='" . htmlspecialchars($row['product_name'], ENT_QUOTES, 'UTF-8') . "'";
                          }
                      }
                      ?>  
                  required>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Product Size</label>
              <input type="text" name="editproduct_size" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" 
              <?php 
                       if ($result_editSelect && $result_editSelect->num_rows > 0 && isset($row['product_size'])) {
                        echo "value='" . htmlspecialchars($row['product_size'], ENT_QUOTES, 'UTF-8') . "'";
                    }
                      ?> 
               required>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Product Description</label>
              <textarea name="editproduct_desc" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <?php 
                      if ($result_editSelect && $result_editSelect->num_rows > 0 && isset($row['product_desc'])) {
                        echo "" . htmlspecialchars($row['product_desc'], ENT_QUOTES, 'UTF-8') . "";
                    }
                ?> 
              </textarea>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Product Price</label>
              <input type="text" name="editproduct_price" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" 
              <?php 
                      if ($result_editSelect && $result_editSelect->num_rows > 0 && isset($row['product_price'])) {
                              echo "value='" . htmlspecialchars($row['product_price'], ENT_QUOTES, 'UTF-8') . "'";
                      }
              ?>  
              required>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Product Quantity</label>
              <input type="text" name="editproduct_quantity" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" 
              <?php 
                      if ($result_editSelect && $result_editSelect->num_rows > 0 && isset($row['product_qty'])) {
                              echo "value='" . htmlspecialchars($row['product_qty'], ENT_QUOTES, 'UTF-8') . "'";
                      }
              ?>  
              required>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Product Image URL</label>
              <input type="text" name="editproduct_image" id="EditimageURL" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" 
              <?php 
                      if ($result_editSelect && $result_editSelect->num_rows > 0 && isset($row['product_image'])) {
                        echo "value='" . htmlspecialchars($row['product_image'], ENT_QUOTES, 'UTF-8') . "'";
                }
                  ?> 
                >
              <img id="EditimagePreview" class="mt-4 w-full h-72 object-cover rounded-lg" 
              <?php 
                      if ($result_editSelect && $result_editSelect->num_rows > 0 && isset($row['product_image'])) {
                        echo "src='" . htmlspecialchars($row['product_image'], ENT_QUOTES, 'UTF-8') . "'";
                }
                  ?> />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Category ID</label>
                <select name="editcategory_id" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <?php
                  if ($result_categoryEdit->num_rows > 0) {
                      echo "<option value=''>Select Category</option>";

                      // Assuming $row is already fetched earlier and contains the product details
                      $selected_category_id = null;
                      if (isset($row['category_id'])) {
                          $selected_category_id = $row['category_id'];
                      }

                      // Loop through all categories and create options
                      while ($categoryRow = $result_categoryEdit->fetch_assoc()) {
                          $category_id = htmlspecialchars($categoryRow['category_id'], ENT_QUOTES, 'UTF-8');
                          $category_name = htmlspecialchars($categoryRow['category_name'], ENT_QUOTES, 'UTF-8');
                          
                          // Check if this category_id is the one selected for the product
                          $selected = ($category_id == $selected_category_id) ? "selected" : "";

                          echo "<option value='$category_id' $selected>$category_name</option>";
                      }
                  } else {
                      echo "<option value=''>No categories available</option>";
                  }
        ?>
                </select>
            </div>
           
            <div>
                <button type="submit" id="EditBtn" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Save</button>
                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Clear</button>
            </div>
        </form>
    </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteProductModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Delete Product</h2>
        <p>Are you sure you want to delete this product?</p>
        <form method="POST">
          <input type="hidden" id="deleteProductId" name="delete_product_id">
          <div class="mt-4">
            <button type="submit" id="confirmDeleteBtn" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Delete</button>
          </div>
        </form>
      </div>
    </div>

    <script>
      // Get modal elements
      const addProductModal = document.getElementById("addProductModal");
      const editProductModal = document.getElementById("editProductModal");
      const deleteProductModal = document.getElementById("deleteProductModal");

      // Get open modal buttons
      const openAddModalBtn = document.getElementById("openAddModalBtn");
      const openEditModalBtns = document.querySelectorAll(".openEditModalBtn");
      const openDeleteModalBtns = document.querySelectorAll(".openDeleteModalBtn");

      // Get close buttons
      const closeButtons = document.getElementsByClassName("close");

      // Open Add Product Modal
      openAddModalBtn.onclick = function () {
        addProductModal.style.display = "block";
      };

      // Open Edit Product Modal
      const editProductIdInput = document.getElementById('edit_product_id');
      const confirmUpdateBtn = document.getElementById('EditBtn');

      openEditModalBtns.forEach(button => {
        button.onclick = function () {
          const editproductId = this.getAttribute('data-id');
          document.getElementById('edit_product_id').value = editproductId;
          editProductModal.style.display = "block";
        };
      });

      // Open Delete Confirmation Modal
      const deleteProductIdInput = document.getElementById('deleteProductId');
      const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');

      openDeleteModalBtns.forEach(button => {
        button.onclick = function () {
          const productId = this.getAttribute('data-id');
          document.getElementById('deleteProductId').value = productId;
          deleteProductModal.style.display = "block";
        };
      });

      confirmDeleteBtn.onclick = function () {
        deleteProductModal.style.display = "none";
      };

      // Close modals when clicking on the close button
      Array.from(closeButtons).forEach(button => {
        button.onclick = function () {
          addProductModal.style.display = "none";
          editProductModal.style.display = "none";
          deleteProductModal.style.display = "none";
        };
      });

      // Close modals when clicking outside the modal content
      window.onclick = function (event) {
        if (event.target == addProductModal) {
          addProductModal.style.display = "none";
        } else if (event.target == editProductModal) {
          editProductModal.style.display = "none";
        } else if (event.target == deleteProductModal) {
          deleteProductModal.style.display = "none";
        }
      };
//date
      document.getElementById('productDate').textContent = new Date().toLocaleDateString();

//Previewing Image
      document.getElementById('imageURL').addEventListener('input', function() {
          const url = this.value;
          const imagePreview = document.getElementById('imagePreview');
          
          if (url) {
              imagePreview.src = url;
              imagePreview.style.display = 'block';
          } else {
              imagePreview.style.display = 'none';
          }
      });

//Edit Previewing Image
document.getElementById('EditimageURL').addEventListener('input', function() {
          const url = this.value;
          const imagePreview = document.getElementById('EditimagePreview');
          
          if (url) {
              imagePreview.src = url;
              imagePreview.style.display = 'block';
          } else {
              imagePreview.style.display = 'none';
          }
      });


  </script>

  </div>
</body>

</html>