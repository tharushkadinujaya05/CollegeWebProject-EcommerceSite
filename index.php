<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IvoryStreets | Home</title>
        <link rel="stylesheet" href="./assets/css/style.css" />
        <link rel="stylesheet" href="./assets/css/nav_cart.css" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> 
    </head>
    <body>

        <?php
            $DB_HOST = 'autorack.proxy.rlwy.net'; // Replace with actual host if different
            $DB_USER = 'root';
            $DB_PASSWORD = 'PEGbmEIwMKaaCDlkKYfWVGndPSDXtNgu';
            $DB_NAME = 'railway';
            $DB_PORT = 21186;
        
            // Attempt to connect to the database
            $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);
        
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT product_id, product_image, product_name, product_price FROM product LIMIT 10";
            $result = mysqli_query($conn, $query);
        ?>
        <!-- NAVBAR --> 
        <?php include './public/includes/navbar.php'; ?>

        <!-- HERO1: OFFERS -->
        <div class="relative h-screen" id="hero1" >
            <!-- HERO1: Desktop/Mobile background images -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('./assets/images/home01_desktop.png');"></div>
            <div class="md:hidden absolute inset-0 bg-cover bg-center" style="background-image: url('./assets/images/home01_mobile.png');"></div>

            <!-- HERO1: Content -->
            <div class="absolute inset-0 flex flex-col justify-center items-center px-8 py-12 md:items-start md:px-16 lg:items-start lg:px-24 space-y-4" style="padding-top: 30px; padding-bottom: 30px;">
                <!-- HERO1: Desktop content -->
                <h1 class="hidden sm:block text-2xl md:text-4xl lg:text-6xl font-bold text-black mb-0 font-serif" id="hero1-desktop-heading">
                    The<br>Statement<br>Maker</h1>
                <h2 class="hidden sm:block text-lg md:text-xl lg:text-2xl text-gray-700 mb-8 font-poppins" style="font-weight: 500;" id="hero1-desktop-description">
                    Refresh Your Look,<br>20% Off Graphic Tees!</h2>
                <button class="hidden sm:block bg-blue-500 hover:bg-blue-700 font-poppins text-white font-bold py-3 px-6 rounded-full focus:outline-none focus:shadow-outline" id="hero1-desktop-button">
                    Shop Now</button>
                <!-- HERO1: Mobile content -->
                <div class="block sm:hidden" style="height: 950px; visibility: hidden;"></div>
                <div class="block sm:hidden flex flex-col items-center justify-center h-full space-y-6" id="hero1-mobile-content">
                    <h1 class="text-2xl md:text-4xl lg:text-6xl font-bold text-black mb-0 font-serif align" style="text-align: center; font-size: xx-large" id="hero1-mobile-heading">
                        The<br>Statement<br>Maker</h1>
                    <h2 class="text-lg md:text-xl lg:text-2xl text-gray-700 mb-8 font-poppins" style="font-weight: 500; text-align: center;" id="hero1-mobile-description">
                        Refresh Your Look,<br>20% Off Graphic Tees!</h2>
                    <button class="bg-blue-500 hover:bg-blue-700 font-poppins text-white py-3 px-6 rounded-full focus:outline-none focus:shadow-outline" id="hero1-mobile-button">
                        Shop Now</button>
                </div>
                <!-- HERO1: Mobile Animated Bounce -->
                <div class="block sm:hidden" id="hero1-mobile-bounce">
                    <svg class="animate-bounce" width="48" height="48" viewBox="0 0 48 48" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="12 18 24 30 36 18"></polyline></svg>
                </div>
            </div>
        </div>

        <!-- HERO2: DIVIDER -->
        <section class="h-12" style="background-color: black" id="hero4">
    <div class="w-full h-full overflow-hidden relative flex items-center justify-center" id="hero2-content">
        <div class="ticker-wrapper">
            <div class="ticker">
                <!-- Duplicate text for seamless scrolling -->
                <div class="ticker-inner">
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                </div>
                <div class="ticker-inner">
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                </div>
                <div class="ticker-inner">
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                </div>
                <div class="ticker-inner">
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                    <p class="ticker-item">EDITOR'S CHOICE</p>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- HERO2-1: EDITOR'S PICKS (BLACK MAMBA) -->
        <div class="relative h-screen " id="hero2-1">
            <!-- HERO2-1: Desktop background image -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/images/home02.png');"></div>
            <!-- HERO2-1: Mobile background image -->
            <div class="md:hidden absolute inset-0 bg-cover bg-center" style="background-image: url('./assets/images/home02.png');"></div>
            <!-- Gradient overlay -->
            <div class="absolute inset-0" style="background: linear-gradient(to top, black, transparent); opacity: 100%;"></div>
            <!-- HERO2-1: Desktop content -->
            <div class="relative h-screen hidden sm:block">
                <h1 class="font-poppins font-bold text-white text-center hidden sm:block p-10" style="font-size: 5rem;padding-bottom: 10px;">
                    BLACK MAMBA</h1>
                <p class="font-poppins font-bold text-white text-center" style="font-size: 1.3rem;padding-bottom: 40px;">
                    A collection inspired by edgy street wear. Featuring bold graphics,<br>distressed jeans, and comfortable footwear, Black Mamba is perfect<br>for those who want to make a statement.</p>
                <div class="container mx-auto text-center" style="padding-bottom: 5%" id="hero3-mobile-content">
                    <button class="relative bg-white text-black px-6 py-3 rounded-full hover:bg-gray-800 transition duration-300 ease-in-out font-bold font-poppins" id="hero3-mobile-button">
                        Shop Now</button>
                </div>
                <div style="display: flex; justify-content: center; width: 100%;">
                    <img src="./assets/images/home04.png" style="width: 15%; height: 15%; margin-right: 5%" alt="item 1">
                    <img src="./assets/images/home05.png" style="width: 15%; height: 15%; margin-right: 5%" alt="item 2">
                    <img src="./assets/images/home06.png" style="width: 15%; height: 15%;" alt="item 3">
                </div>
            </div>
        </div>

        <!--  HERO2-2: EDITOR'S PICKS (WHITE CLAW) -->
        <div class="relative h-screen" id="hero2-2">
            <!-- HERO2-2: Desktop background image -->
            <div class="absolute inset-0 bg-cover bg-center opacity-50" style="background-image: url('assets/images/home03.png');"></div>
            <!-- HERO2-2: Mobile background image -->
            <div class="md:hidden absolute inset-0 bg-cover bg-center" style="background-image: url('./assets/images/home03.png');"></div>
            <!-- Gradient overlay -->
            <div class="absolute inset-0" style="background: linear-gradient(to top, white, transparent); opacity: 100%;"></div>
            <!-- HERO2-1: Desktop content -->
            <div class="relative h-screen hidden sm:block">
                <h1 class="font-poppins font-bold text-black text-center hidden sm:block p-10" style="font-size: 5rem;padding-bottom: 10px;">
                    WHITE CLAW</h1>
                <p class="font-poppins font-bold text-black text-center" style="font-size: 1.3rem;padding-bottom: 40px;">
                    A collection of effortlessly cool essentials. With classic pieces like linen<br>shirts, skinny jeans, and chunky sneakers, White Claw is perfect for<br>creating a relaxed yet stylish look.</p>
                <div class="container mx-auto text-center" id="hero3-mobile-content" style="padding-bottom: 5%">
                    <button class="relative bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition duration-300 ease-in-out font-bold font-poppins" id="hero3-mobile-button">
                        Shop Now</button>
                </div>
                <div style="display: flex; justify-content: center; width: 100%;">
                    <img src="./assets/images/home07.png" style="width: 15%; height: 15%; margin-right: 5%">
                    <img src="./assets/images/home08.png" style="width: 15%; height: 15%; margin-right: 5%">
                    <img src="./assets/images/home09.png" style="width: 15%; height: 15%;">
                </div>
            </div>
        </div>

        <!-- HERO3: GIFT WRAPPING SERVICE PITCH -->
            <!-- HERO3: Desktop -->
            <section class="hidden md:block bg-white py-12 md:py-20 md:px-24 lg:px-32 xl:px-48" id="hero3-desktop">
                <div class="container mx-auto text-center" id="hero3-desktop-content">
                    <h2 class="text-3xl font-bold text-black mb-6 md:text-4xl font-serif" id="hero3-desktop-heading">Gift Wrap Your Way to His Heart</h2>
                    <p class="text-lg leading-relaxed mb-8 md:text-xl md:leading-relaxed font-poppins font-bold px-4 md:px-150" id="hero3-desktop-description">Make gifting effortless and stylish with our premium gift wrapping service.Choose from a variety of elegant papers and ribbons to perfectly complement your purchase.</p>
                    <button class="relative bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition duration-300 ease-in-out font-bold font-poppins" id="hero3-desktop-button">
                        Wrap Now</button>
                </div>
            </section>
            <!-- HERO3: Mobile -->
            <section class="block md:hidden bg-white py-12 md:py-20 md:px-24 lg:px-32 xl:px-48" id="hero3-mobile">
                <div class="container mx-auto text-center" id="hero3-mobile-content">
                    <h2 class="text-3xl font-bold text-black mb-6 md:text-4xl font-serif" id="hero3-mobile-heading">Gift Wrap Your Way<br>to His Heart</h2>
                    <p class="text-lg leading-relaxed mb-8 md:text-xl md:leading-relaxed font-poppins font-bold px-4 md:px-150 justify-center" style="text-align: center;padding-left: 55px;padding-right: 55px;" id="hero3-mobile-description">Make gifting effortless and stylish with our premium gift wrapping service.Choose from a variety of elegant papers and ribbons to perfectly complement your purchase.</p>
                    <button class="relative bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition duration-300 ease-in-out font-bold font-poppins" id="hero3-mobile-button">
                        Wrap Now</button>
                </div>
            </section>

        <!-- HERO4: DIVIDER -->
        <section class="h-12" style="background-color: red" id="hero4">
    <div class="w-full h-full overflow-hidden relative flex items-center justify-center" id="hero2-content">
        <div class="ticker-wrapper">
            <div class="ticker">
                <!-- Duplicate text for seamless scrolling -->
                <div class="ticker-inner">
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                </div>
                <div class="ticker-inner">
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                </div>
                <div class="ticker-inner">
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                </div>
                <div class="ticker-inner">
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                    <p class="ticker-item">FEATURED</p>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- HERO4: FEATURED -->
        <div class="h-screen bg-black">
            <!-- HERO4: Desktop -->
            <div class="h-screen bg-black flex flex-col items-center justify-center">

                <!-- Carousel Container -->
                <div class="relative max-w-screen-xl mx-auto w-full">
                    <!-- Left arrow -->
                    <button id="prev" class="carousel-button absolute left-2 top-1/2 -translate-y-1/2">
                        <img src="https://cdn-icons-png.flaticon.com/512/271/271220.png" alt="Previous">
                    </button>

                    <!-- Carousel -->
                    <ul id="carousel" class="carousel mt-8 gap-4">
                        <!-- Example product item -->
                        <?php 
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<li class="carousel-item bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">';
                                echo '<a href="public/product_description.php?product_id=' . urlencode($row['product_id']) . '" class="group block overflow-hidden">';
                                echo '<img src="data:image/png;charset=utf8;base64,' . base64_encode($row['product_image']) . '" 
                                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />';
                                echo '<div class="relative pt-3 p-4">';
                                echo '<h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">'. htmlspecialchars($row['product_name']) .'</h3>';
                                echo '<p class="mt-2">';
                                echo '<span class="sr-only">Regular Price</span>';
                                echo '<span class="tracking-wider text-gray-900">£'. htmlspecialchars($row['product_price']) .' GBP</span>';
                                echo '</p>
                                        </div>
                                            </a>
                                            </li>';
                            }
                        ?>       
                    </ul>

                    <!-- Right arrow -->
                    <button id="next" class="carousel-button absolute right-2 top-1/2 -translate-y-1/2">
                        <img src="https://cdn-icons-png.flaticon.com/512/271/271228.png" alt="Next">
                    </button>
                </div>
            </div>
        </div>

        <!-- CART -->
<!-- cart.php -->
 <style>
    
 </style>
 <?php 
    $DB_HOST = 'autorack.proxy.rlwy.net'; // Replace with actual host if different
    $DB_USER = 'root';
    $DB_PASSWORD = 'PEGbmEIwMKaaCDlkKYfWVGndPSDXtNgu';
    $DB_NAME = 'railway';
    $DB_PORT = 21186;

    // Attempt to connect to the database
    $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

  $order_id_query = "SELECT order_id FROM orders WHERE order_name = 'temporary name'";
  $result_orderId = mysqli_query($conn, $order_id_query);
    
  $row = mysqli_fetch_assoc($result_orderId);
  $order_id = $row['order_id'];

  $products_query = "SELECT p.product_id, p.product_name, p.product_image, p.product_price, p.product_size, op.quantity 
                    FROM product p JOIN orderproduct op ON p.product_id = op.product_id 
                    WHERE op.order_id = $order_id";
  
  $result = mysqli_query($conn, $products_query);

  $subtotal_query = "SELECT SUM(p.product_price * op.quantity) AS total_cost
              FROM product p
              JOIN orderproduct op ON p.product_id = op.product_id
              WHERE op.order_id = $order_id";

  $subtotal_result = mysqli_query($conn, $subtotal_query);
  $subtotal_row = mysqli_fetch_assoc($subtotal_result);

  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $delete_product_id = mysqli_real_escape_string($conn, $_POST['delete_product_id']);
    $delete_sql = "DELETE FROM orderproduct WHERE product_id = $delete_product_id";
    $stmt = mysqli_prepare($conn, $delete_sql);
    mysqli_stmt_execute($stmt);
  }
 ?>
<div class="relative z-10 hidden" id="cartPanel" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
  <div id="overlay" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity opacity-0 pointer-events-none"></div>

  <div class="fixed inset-0 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
      <div id="panel" class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 transform translate-x-full transition-transform ease-in-out duration-500">
        <div class="pointer-events-auto w-screen max-w-md">
          <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
            <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
              <div class="flex items-start justify-between">
                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                <div class="ml-3 flex h-7 items-center">
                  <button type="button" id="closeCartBtn" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Close panel</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="mt-8">
                <div class="flow-root">
                  <ul role="list" class="-my-6 divide-y divide-gray-200">
                        <?php 
                          if (!$result){
                            echo '<h3>No Items in Cart</h3>';
                          }
                          else {
                            while ($row = mysqli_fetch_assoc($result)) {
                            echo '<li class="flex py-6">';
                            echo '<div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">';
                            echo '<img src="data:image/png;charset=utf8;base64,' . base64_encode($row['product_image']) . '" alt="Product Image" class="h-full w-full object-cover object-center">';
                            echo '</div>';
                            echo '<div class="ml-4 flex flex-1 flex-col">
                                  <div class="flex justify-between text-base font-medium text-gray-900">';
                            echo '<h3>'. htmlspecialchars($row['product_name']) .'</h3>';
                            echo '<p class="ml-4">$'. htmlspecialchars($row['product_price']) .'</p>';
                            echo '</div>';
                            echo '<p class="mt-1 text-sm text-gray-500">'. htmlspecialchars($row['product_size']) .'</p>';
                            echo '<div class="flex flex-1 items-end justify-between text-sm">';
                            echo '<p class="text-gray-500">Quantity: '. htmlspecialchars($row['quantity']) .'</p>';
                            echo '<div class="flex">';
                            echo '<form method="POST">';
                            echo '<input type="hidden" id="deleteProductId" name="delete_product_id" value="'. htmlspecialchars($row['product_id']) .'">';
                            echo '<button type="submit" id="confirmDeleteBtn" class="font-medium text-blue-600 hover:text-blue-500" data-id="'. htmlspecialchars($row['product_id']) .'">Remove</button>';
                            echo '</form>';
                            echo '</div>
                                  </div>
                                  </div>
                                  </li>';
                            }
                          }
                        ?>       
                  </ul>
                </div>
              </div>
            </div>
            <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
              <div class="flex justify-between text-base font-medium text-gray-900">
                <p>Subtotal</p>
                <p>
                  <?php 
                    $subtotal = $subtotal_row['total_cost'];
                    echo '$'. $subtotal_row['total_cost'] .'';
                  ?>
                </p>
              </div>
              <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
              <div class="mt-6">
                <a href="./public/checkout.php?order_id=<?php echo urlencode($order_id); ?>&subtotal=<?php echo urlencode($subtotal); ?>" class="flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-blue">Checkout</a>
              </div>
              <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                <p>or <a href="public/readytowear.php"><button type="button" class="font-medium text-blue-600 hover:text-blue-500">Continue Shopping <span aria-hidden="true"> &rarr;</span></button></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <?php include './public/includes/footer.php'; ?>
        <!-- COOKIES -->
        <?php include './public/includes/cookies.php'; ?>

        <script src="./assets/js/main.js"></script>
        <script>
              prevButton.addEventListener('click', () => scrollCarousel(-1));
              nextButton.addEventListener('click', () => scrollCarousel(1));
        </script>
    </body>
</html>