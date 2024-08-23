<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IvoryStreets - Dashboard</title>
</head>

<body class="bg-gray-100 font-sans antialiased">

<?php
include 'side-bar.php';
  ?>


  
    <div class="flex-1 lg:ml-64 p-6 bg-gray-100 overflow-y-auto h-screen pt-16 lg:pt-6">
    
    <?php
  include 'header.php';
  ?>
      
    
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
      
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-2xl font-semibold text-gray-800">Total Orders</h3>
          <p class="text-2xl font-bold text-gray-800 mt-4 text-green-500">$1,329</p>
        </div>

    
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-2xl font-semibold text-gray-800">Total Sales</h3>
          <p class="text-2xl font-bold text-gray-800 mt-4 text-red-500">- $5,329</p>
        </div>
      </div>

    
      <div class="grid grid-cols-1 gap-6 mt-6">
    
        <div>
          <h3 class="text-xl font-bold mt-6 mb-4">Recent Orders</h3>
          <div class="bg-white p-6 rounded-lg shadow h-[24rem]">
            <div class="overflow-x-auto overflow-y-auto h-full">
              <table class="min-w-full bg-white text-sm">
                <thead class="sticky top-0 z-10 bg-white">
                  <tr>
                    <th class="py-2 px-0 border-b text-left text-gray-600">Order ID</th>
                    <th class="py-2 px-4 border-b text-left text-gray-600">Order Email</th>
                    <th class="py-2 px-4 border-b text-left text-gray-600">Order Name</th>
                    <th class="py-2 px-4 border-b text-left text-gray-600">Order Address</th>
                    <th class="py-2 px-4 border-b text-left text-gray-600">Order Postal Code</th>
                    <th class="py-2 px-4 border-b text-left text-gray-600">Order Phone Number</th>
                    <th class="py-2 px-4 border-b text-left text-gray-600">Order Date</th>
                    <th class="py-2 px-4 border-b text-left text-gray-600">Order Status</th>
                    <th class="py-2 px-4 border-b text-left text-gray-600">Total Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-2 px-4 border-b">1023</td>
                    <td class="py-2 px-4 border-b">example@email.com</td>
                    <td class="py-2 px-4 border-b">Brayan</td>
                    <td class="py-2 px-4 border-b">Belbourne, Australia</td>
                    <td class="py-2 px-4 border-b">3003</td>
                    <td class="py-2 px-4 border-b">+61 XXX XXXX</td>
                    <td class="py-2 px-4 border-b">Aug 17, 2024</td>
                    <td class="py-2 px-4 border-b text-green-500">Completed</td>
                    <td class="py-2 px-4 border-b">$150.00</td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>

    
        <div>
          <h3 class="text-xl font-bold mt-6 mb-4">Sales</h3>
          <div class="bg-white p-6 rounded-lg shadow h-[24rem]">
            <div class="overflow-x-auto overflow-y-auto h-full">
              <table class="min-w-full bg-white text-sm">
                <thead class="sticky top-0 z-10 bg-white">
                  <tr>
                    <th class="py-2 px-4 border-b text-left text-gray-600">Product</th>
                    <th class="py-2 px-4 border-b text-left text-gray-600">Units Sold</th>
                    <th class="py-2 px-4 border-b text-left text-gray-600">Revenue</th>
                    <th class="py-2 px-4 border-b text-left text-gray-600">Growth</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-2 px-4 border-b">Product A</td>
                    <td class="py-2 px-4 border-b">200</td>
                    <td class="py-2 px-4 border-b">$4000.00</td>
                    <td class="py-2 px-4 border-b text-green-500">15% ↑</td>
                  </tr>
                  <tr>
                    <td class="py-2 px-4 border-b">Product B</td>
                    <td class="py-2 px-4 border-b">150</td>
                    <td class="py-2 px-4 border-b">$3000.00</td>
                    <td class="py-2 px-4 border-b text-red-500">10% ↓</td>
                  </tr>
               
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>

</html>

