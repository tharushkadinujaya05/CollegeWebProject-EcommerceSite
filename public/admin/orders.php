<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IvoryStreets - Orders</title>
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

  <?php
  include 'side-bar.php';
  ?>
  <div class="flex-1 lg:ml-64 p-6 bg-gray-100 overflow-y-auto h-screen pt-16 lg:pt-6">

    <?php
    include 'header.php';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ivorystreetsdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql_orders = "SELECT order_id, order_email, order_name, order_address, order_postcode, order_phoneno, order_date, order_status, total_price FROM orders";
    $result_orders = mysqli_query($conn, $sql_orders);

    $sql_product = "SELECT product_id, product_name FROM product";
    $result_product = mysqli_query($conn, $sql_product);

    ?>

    <div>
      <h3 class="text-2xl font-bold mt-6 mb-4">Recent Orders</h3>
                </select>
              </div>

              <div class="mb-4">
                <table id="productTable" class="min-w-full bg-white mt-4">
                <tbody>
                 // Rows will be dynamically added here
                </tbody>
                </table>
              </div>
             

            <input type="hidden" name="selected_products" id="selected_products">

              <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Order name</label>
                <input type="text" name="order_name" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
              </div>

              <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Order email</label>
                <input type="email" name="order_email" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
              </div>

              <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Order address</label>
                <textarea type="text" name="Order_address" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
              </div>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Order postcode</label>
              <input type="text" name="Order_postcode" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Order phoneNo.</label>
              <input type="text" name="Order_phone" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            //should add values
            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Order status</label>
              <select name="Order_status" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="1">Ordered</option>
                <option value="2">Processing</option>
                <option value="3">Dispatched</option>
                <option value="4">Delivered</option>
              </select>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Order date</label>
              <div type="date" id="date" name="update_time" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></div>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-medium mb-1">Total price</label>
              <input type="text" name="total_price" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
              <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
              <button type="reset" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Clear</button>
            </div>

        </div>

        </form>-->
      <!--</div>
    </div>-->
    <div class="bg-white p-6 rounded-lg shadow h-[36rem]">
      <div class="overflow-x-auto overflow-y-auto h-full">
        <table class="min-w-full bg-white">
          <thead class="sticky top-0 z-10 bg-white">
            <tr>
              <th class="py-2 px-2 border-b text-left text-gray-600 hidden">Order ID</th>
              <th class="py-2 px-4 border-b text-left text-gray-600">Order Email</th>
              <th class="py-2 px-4 border-b text-left text-gray-600">Order Name</th>
              <th class="py-2 px-4 border-b text-left text-gray-600">Order Address</th>
              <th class="py-2 px-4 border-b text-left text-gray-600">Order Postal Code</th>
              <th class="py-2 px-4 border-b text-left text-gray-600">Order Phone Number</th>
              <th class="py-2 px-4 border-b text-left text-gray-600">Order Date</th>
              <th class="py-2 px-4 border-b text-left text-gray-600">Order Status</th>
              <th class="py-2 px-4 border-b text-left text-gray-600">Total Price</th>
              <th class="py-2 px-4 border-b text-left text-gray-600">Edit</th>

            </tr>
          </thead>
          <tbody>

            <?php 
              if (mysqli_num_rows($result_orders) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result_orders)) {
                    echo "<tr>";
                    echo "<td class='py-2 px-2 border-b hidden'>" . htmlspecialchars($row['order_id']) . "</td>";
                    echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['order_email']) . "</td>";
                    echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['order_name']) . "</td>";
                    echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['order_address']) . "</td>";
                    echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['order_postcode']) . "</td>";
                    echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['order_phoneno']) . "</td>";
                    echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['order_date']) . "</td>";
                    echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['order_status']) . "</td>";
                    echo "<td class='py-2 px-4 border-b'>$" . htmlspecialchars($row['total_price']) . "</td>";
                    echo "<td><button type='button' name='edit-btn' class='px-4 py-2 text-xs font-medium text-center 
                    inline-flex items-center text-white bg-slate-500 rounded-lg hover:bg-slate-600 focus:ring-4 
                    focus:outline-none focus:ring-slate-300 dark:bg-slate-600 dark:hover:bg-slate-700 
                    dark:focus:ring-slate-800'>Edit</button>";
                    echo "</tr>";
                }
              } else {
                  echo "<tr><td colspan='5' class='py-2 px-4 border-b text-center'>No orders available</td></tr>";
              }

              // Close the database connection
              mysqli_close($conn);
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  </div>
  </div>
  </div>
  </div>
  </div>


  <script>
    //Date
    document.addEventListener("DOMContentLoaded", function () {
        var modal = document.getElementById("myModal");
        var openModalBtn = document.getElementById("openModalBtn");
        var closeModal = document.getElementsByClassName("close")[0];
        var productDropdown = document.getElementById("productDropdown");
        var productTable = document.getElementById("productTable").getElementsByTagName("tbody")[0];
        var selectedProductsInput = document.getElementById("selected_products");

        var selectedProducts = [];

        openModalBtn.onclick = function () {
          modal.style.display = "block";
        };

        closeModal.onclick = function () {
          modal.style.display = "none";
        };

        window.onclick = function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        };

        productDropdown.addEventListener("change", function () {
          var productName = productDropdown.options[productDropdown.selectedIndex].text;
          var productId = productDropdown.value;

          if (!selectedProducts.includes(productId)) {
            selectedProducts.push(productId);

            var row = productTable.insertRow();
            var cellName = row.insertCell(0);
            var cellAction = row.insertCell(1);

            cellName.textContent = productName;

            var deleteBtn = document.createElement("button");
            deleteBtn.textContent = "Delete";
            deleteBtn.classList.add("bg-red-500", "text-white", "px-3", "py-1", "rounded");

            deleteBtn.addEventListener("click", function () {
              var rowIndex = row.rowIndex - 1; // Adjust for header row
              productTable.deleteRow(rowIndex);
              selectedProducts.splice(rowIndex, 1);
              updateSelectedProducts();
            });

            cellAction.appendChild(deleteBtn);
            updateSelectedProducts();
          }
        });

        function updateSelectedProducts() {
          selectedProductsInput.value = JSON.stringify(selectedProducts);
        }
      });
      
    function updateDate() {
      const now = new Date();
      const day = String(now.getDate()).padStart(2, '0');
      const month = String(now.getMonth() + 1).padStart(2, '0');
      const year = now.getFullYear();
      const currentDate = `${month}/${day}/${year}`;

      document.getElementById('date').textContent = currentDate;
    }

    updateDate();

    //button
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModalBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

</body>

</html>