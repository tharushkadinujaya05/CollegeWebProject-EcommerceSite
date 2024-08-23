<div class="flex h-screen bg-gray-200">
    <div class="w-64 bg-gray-900 text-white flex flex-col fixed h-full lg:block hidden">
      <div class="h-16 flex items-center justify-center">
        <img src="../assets/images/icon.png" class="h-[2.5rem] mt-4">
      </div>
      <nav class="flex-1 overflow-y-auto">
        <ul>
          <li class="p-4 hover:bg-gray-600">
            <a href="dashboard.php" class="flex items-center space-x-2">
              <img src="../assets/images/img002.png" class="h-[1.5rem]">
              <span>Dashboard</span>
            </a>
          </li>
          <li class="p-4 hover:bg-gray-600">
            <a href="orders.php" class="flex items-center space-x-2">
              <img src="../assets/images/img004.png" class="h-[1.5rem]">
              <span>Orders</span>
            </a>
          </li>
          <li class="p-4 hover:bg-gray-600">
            <a href="products.php" class="flex items-center space-x-2">
              <img src="../assets/images/img006.png" class="h-[1.5rem]">
              <span>Products</span>
            </a>
          </li>
          <li class="p-4 hover:bg-gray-600">
            <a href="category.php" class="flex items-center space-x-2">
              <img src="../assets/images/img008.png" class="h-[1.5rem]">
              <span>Category</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

     <!-- Mobile menu button -->
     <div class="lg:hidden w-full bg-gray-900 text-white fixed top-0 z-20">
      <div class="flex items-center justify-between p-4">
        <img src="../assets/images/icon.png" class="h-[2.5rem]">
        <button id="menu-btn" class="text-white">
          <img src="../assets/images/img009.png" alt="Icon" class="h-6 w-6" />
        </button>
      </div>
      <nav id="mobile-menu" class="hidden flex-col bg-gray-800">
        <ul class="space-y-2 p-4">
          <li><a href="dashboard.php" class="block p-2 bg-gray-700 rounded">Dashboard</a></li>
          <li><a href="orders.php" class="block p-2 bg-gray-700 rounded">Orders</a></li>
          <li><a href="sales.php" class="block p-2 bg-gray-700 rounded">Sales</a></li>
          <li><a href="products.php" class="block p-2 bg-gray-700 rounded">Products</a></li>
          <li><a href="category.php" class="block p-2 bg-gray-700 rounded">Category</a></li>
        </ul>
      </nav>
    </div>

    <script>
    document.getElementById('menu-btn').addEventListener('click', function() {
      var menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });
    </script>
