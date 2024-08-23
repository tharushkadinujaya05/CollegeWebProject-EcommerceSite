
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>IvoryStreets - Categories</title>

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
    <?php include 'header.php'; ?>

    <!-- Categories Table -->
    <div class="mt-6">
      <h3 class="text-2xl font-bold mb-4">Categories</h3>
      <!-- Add Category Button -->
      <button id="openAddModalBtn" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4 mb-4">Add Category</button>

      <!-- Add Category Modal -->
      <div id="addModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <form>
            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Category Name</label>
              <input type="text" name="category_name" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Category Description</label>
              <textarea name="category_desc" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Updated At</label>
              <div type="date" id="date" name="update_time" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></div>
            </div>
            <div>
              <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Save</button>
              <button type="reset" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Clear</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Edit Category Modal -->
      <div id="editModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <form>
            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Category Name</label>
              <input type="text" name="category_name" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Category Description</label>
              <textarea name="category_desc" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
             <div>
              <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Save</button>
              <button type="reset" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Clear</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Delete Category Modal -->
      <div id="deleteModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <p class="text-gray-700 font-medium mb-4">Are you sure you want to delete this category?</p>
          <div>
            <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Delete</button>
           </div>
        </div>
      </div>

      <!-- Categories Table -->
      <div class="bg-white p-6 rounded-lg shadow h-[36rem]">
        <div class="overflow-x-auto overflow-y-auto h-full">
          <table class="min-w-full bg-white">
            <thead class="sticky top-0 z-10 bg-white">
              <tr>
                <th class="py-2 px-4 border-b text-left text-gray-600 hidden">Category ID</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Category Name</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Description</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Updated At</th>
                <th class="py-2 px-4 border-b text-left text-gray-600">Edit/Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-2 px-4 border-b hidden">ID 100</td>
                <td class="py-2 px-4 border-b">1001</td>
                <td class="py-2 px-4 border-b">Apparel</td>
                <td class="py-2 px-4 border-b">Lorem ipsum dolor sit amet</td>
                <td class="py-2 px-4 border-b">
                  <button id="openEditModalBtn" class="px-4 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-slate-500 rounded-lg hover:bg-slate-600 focus:ring-4 focus:outline-none focus:ring-slate-300">Edit</button>
                  <button id="openDeleteModalBtn" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-red-500 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300">Delete</button>
                </td>
              </tr>
              <!-- Repeat the above row for more categories -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script>
     function updateDate() {
      const now = new Date();
      const day = String(now.getDate()).padStart(2, '0');
      const month = String(now.getMonth() + 1).padStart(2, '0');
      const year = now.getFullYear();
      const currentDate = `${month}/${day}/${year}`;

      document.getElementById('date').textContent = currentDate;
    }

    updateDate();
    // Get the modal elements
    var addModal = document.getElementById("addModal");
    var editModal = document.getElementById("editModal");
    var deleteModal = document.getElementById("deleteModal");

    // Get the buttons that open the modals
    var openAddModalBtn = document.getElementById("openAddModalBtn");
    var openEditModalBtn = document.getElementById("openEditModalBtn");
    var openDeleteModalBtn = document.getElementById("openDeleteModalBtn");

    // Get the <span> elements that close the modals
    var closeBtns = document.getElementsByClassName("close");

    // When the user clicks on the button, open the modals
    openAddModalBtn.onclick = function () {
      addModal.style.display = "block";
    }

    openEditModalBtn.onclick = function () {
      editModal.style.display = "block";
    }

    openDeleteModalBtn.onclick = function () {
      deleteModal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modals
    for (var i = 0; i < closeBtns.length; i++) {
      closeBtns[i].onclick = function () {
        this.parentElement.parentElement.style.display = "none";
      }
    }

    // When the user clicks anywhere outside of the modals, close it
    window.onclick = function (event) {
      if (event.target == addModal || event.target == editModal || event.target == deleteModal) {
        addModal.style.display = "none";
        editModal.style.display = "none";
        deleteModal.style.display = "none";
      }
    }
  </script>
</body>

</html>
