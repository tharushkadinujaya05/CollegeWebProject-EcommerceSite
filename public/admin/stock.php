<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>IvoryStreets - Stock</title>

    <style>
        /* Styles for the modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 50;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
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

        <div>
            <h3 class="text-2xl font-bold mt-6 mb-4">Stock</h3>
            <!-- Button for Add Stock -->
            <button id="openAddStockModalBtn" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4 mb-4">Add Stock</button>

            <!-- Add Stock Modal -->
            <div id="addStockModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form>
                        <!-- Add Stock Form Fields -->
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-1">Product Name</label>
                            <input type="text" name="product_name" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-1">Category</label>
                            <input type="text" name="category" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-1">Supplier</label>
                            <input type="text" name="supplier" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-1">Stock Quantity</label>
                            <input type="number" name="stock_quantity" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-1">Unit Price</label>
                            <input type="number" name="unit_price" step="0.01" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-1">Updated At</label>
                            <input type="date" name="update_time" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Save</button>
                            <button type="reset" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Clear</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Edit Stock Modal -->
            <div id="editStockModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Edit Stock</h2>
                    <form>
                        <!-- Edit Stock Form Fields -->
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-1">Product Name</label>
                            <input type="text" name="product_name" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-1">Category</label>
                            <input type="text" name="category" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-1">Supplier</label>
                            <input type="text" name="supplier" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-1">Stock Quantity</label>
                            <input type="number" name="stock_quantity" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-1">Unit Price</label>
                            <input type="number" name="unit_price" step="0.01" class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Save</button>
                            <button type="reset" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Clear</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Delete Stock Modal -->
            <div id="deleteStockModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p class="text-gray-700 font-medium mb-4">Are you sure you want to delete this stock item?</p>
                    <div>
                        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Delete</button>
                    </div>
                </div>
            </div>

            <!-- Stock Table -->
            <div class="bg-white p-6 rounded-lg shadow h-[36rem]">
                <div class="overflow-x-auto overflow-y-auto h-full">
                    <table class="min-w-full bg-white">
                        <thead class="sticky top-0 z-10 bg-white">
                            <tr>
                                <th class="py-2 px-4 border-b text-left text-gray-600 hidden">Product ID</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Product Name</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Category</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Supplier</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Stock Quantity</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Unit Price</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Updated At</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b text-gray-600 hidden">1</td>
                                <td class="py-2 px-4 border-b text-gray-600">Product A</td>
                                <td class="py-2 px-4 border-b text-gray-600">Category 1</td>
                                <td class="py-2 px-4 border-b text-gray-600">Supplier X</td>
                                <td class="py-2 px-4 border-b text-gray-600">50</td>
                                <td class="py-2 px-4 border-b text-gray-600">$10.00</td>
                                <td class="py-2 px-4 border-b text-gray-600">2024-08-27</td>
                                <td class="py-2 px-4 border-b text-gray-600">
                                    <button class="bg-yellow-500 text-white px-3 py-1 rounded" onclick="openEditStockModal()">Edit</button>
                                    <button class="bg-red-500 text-white px-3 py-1 rounded" onclick="openDeleteStockModal()">Delete</button>
                                </td>
                            </tr>
                            <!-- More rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Open and close modal functions
        const openAddStockModalBtn = document.getElementById('openAddStockModalBtn');
        const addStockModal = document.getElementById('addStockModal');
        const editStockModal = document.getElementById('editStockModal');
        const deleteStockModal = document.getElementById('deleteStockModal');
        const closeButtons = document.querySelectorAll('.close');

        openAddStockModalBtn.onclick = function() {
            addStockModal.style.display = 'block';
        }

        closeButtons.forEach(button => {
            button.onclick = function() {
                addStockModal.style.display = 'none';
                editStockModal.style.display = 'none';
                deleteStockModal.style.display = 'none';
            }
        });

        function openEditStockModal() {
            editStockModal.style.display = 'block';
        }

        function openDeleteStockModal() {
            deleteStockModal.style.display = 'block';
        }

        window.onclick = function(event) {
            if (event.target == addStockModal || event.target == editStockModal || event.target == deleteStockModal) {
                addStockModal.style.display = 'none';
                editStockModal.style.display = 'none';
                deleteStockModal.style.display = 'none';
            }
        }
    </script>

</body>
</html>
