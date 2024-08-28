<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>IvoryStreets - Products</title>
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

    <?php include 'header2.php'; ?>

    <!-- Products Table -->
    <div class="mt-6">
      <h3 class="text-2xl font-bold mb-4">Products</h3>
      <!-- Add Product Button -->
      <button id="openAddModalBtn" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4 mb-4">Add Product</button>

      <!-- Add Product Modal -->
      <div id="addProductModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <form>
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
              <label class="block text-gray-700 font-medium mb-1">Product Image</label>
              <input type="file" name="image" accept="image/*" required class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Category ID</label>
              <select name="category_id" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Select Category</option>
                <option value="1">Category 1</option>
                <option value="2">Category 2</option>
                <option value="3">Category 3</option>
                <option value="4">Category 4</option>
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
                <th class="py-2 px-4 border-b text-left text-gray-600">Product Name</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Product Size</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Description</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Price</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Image</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Category ID</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Updated At</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Edit/Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-2 px-4 border-b">Sample Product</td>
                <td class="py-2 px-4 border-b">M</td>
                <td class="py-2 px-4 border-b">This is a sample product description.</td>
                <td class="py-2 px-4 border-b">$19.99</td>
                <td class="py-2 px-4 border-b">image.jpg</td>
                <td class="py-2 px-4 border-b">1</td>
                <td class="py-2 px-4 border-b">2023-08-01</td>
                <td class="py-2 px-2 border-b">
                  <button class="openEditModalBtn px-2 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-slate-500 rounded-lg hover:bg-slate-600 focus:ring-4 focus:outline-none focus:ring-slate-300">Edit</button>
                  <button class="openDeleteModalBtn px-2 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-red-500 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300">Delete</button>
                </td>
              </tr>
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
        <form>
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
            <textarea name="product_desc" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Product Price</label>
            <input type="text" name="product_price" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Product Image</label>
            <input type="file" name="image" accept="image/*" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Category ID</label>
            <select name="category_id" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option value="1">Category 1</option>
              <option value="2">Category 2</option>
              <option value="3">Category 3</option>
              <option value="4">Category 4</option>
            </select>
          </div>
          <div>
            <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Save</button>
            <button type="reset" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Clear</button>
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
        <div class="mt-4">
          <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Delete</button>

        </div>
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
      openEditModalBtns.forEach(button => {
        button.onclick = function () {
          editProductModal.style.display = "block";
        };
      });

      // Open Delete Confirmation Modal
      openDeleteModalBtns.forEach(button => {
        button.onclick = function () {
          deleteProductModal.style.display = "block";
        };
      });

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
    </script>

  </div>
</body>

</html>
