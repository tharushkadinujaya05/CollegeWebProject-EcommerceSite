<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IvoryStreets | Home</title>
  <link href="./assets/css/style.css" rel="stylesheet">
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap');
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <?php include './includes/navbar.php'; ?>
  
  <!-- HERO1: OFFERS -->
  <div class="relative h-screen">
      <!-- HERO1: Desktop/Mobile background image -->
      <div class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('./assets/images/home01_desktop.png');">
      </div>
      <div class="md:hidden absolute inset-0 bg-cover bg-center"
        style="background-image: url('./assets/images/home01_mobile.png');">
      </div>

      <!-- HERO1: Content -->
          <div class="absolute inset-0 flex flex-col justify-center items-center px-8 py-12 md:items-start md:px-16 lg:items-start lg:px-24">
          <!-- HERO1: Desktop content -->
            <h1 class="hidden sm:block text-2xl md:text-4xl lg:text-6xl font-bold text-black mb-4 font-serif">
              The<br>Statement<br>Maker
            </h1>
            <h2 class="hidden sm:block text-lg md:text-xl lg:text-2xl text-gray-700 mb-8 font-poppins" style="font-weight: 500;">
              Refresh Your Look,<br>20% Off Graphic Tees!
            </h2>
            <button class="hidden sm:block bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full focus:outline-none focus:shadow-outline">
              Shop Now
            </button>
          <!-- HERO1: Mobile content -->
          </div>
      <!-- HERO1: Mobile content -->
      <h1 class="sm:hidden text-4xl md:text-2xl lg:text-6xl font-bold text-black mb-2 font-serif text-center">
          The<br>Statement<br>Maker
      </h1>
      <h2 class="sm:hidden text-lg md:text-xl lg:text-2xl text-gray-700 mb-4 font-inter text-center" style="font-weight: 500;">
          Refresh Your Look,<br>20% Off Graphic Tees!
      </h2>
      <div class="sm:hidden" style="height: 25px; visibility: hidden;"> </div>
      <button class="sm:hidden bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full focus:outline-none focus:shadow-outline">
          Shop Now
      </button>
  </div>


  <!-- HERO2: DIVIDER -->

  <!-- HERO2-1: EDITOR'S PICKS (BLACK MAMBA) -->
  <div class="relative h-screen">
      <!-- HERO2-1: Desktop background image -->
      <div class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('assets/images/home02.png');">
      </div>
      <!-- HERO2-1: Mobile background image -->
      <div class="md:hidden absolute inset-0 bg-cover bg-center"
        style="background-image: url('./assets/images/home02.png');">
      </div>
      <!-- Gradient overlay -->
      <div class="absolute inset-0" style="background: linear-gradient(to top, black, transparent); opacity: 100%;"></div>
  </div>

  <!--  HERO2-2: EDITOR'S PICKS (WHITE CLAW) -->
  <div class="relative h-screen">
      <!-- HERO2-2: Desktop background image -->
      <div class="absolute inset-0 bg-cover bg-center opacity-50"
        style="background-image: url('assets/images/home03.png');">
      </div>
      <!-- HERO2-2: Mobile background image -->
      <div class="md:hidden absolute inset-0 bg-cover bg-center"
        style="background-image: url('./assets/images/home03.png');">
      </div>
      <!-- Gradient overlay -->
      <div class="absolute inset-0" style="background: linear-gradient(to top, white, transparent); opacity: 100%;"></div>
  </div>

  <!-- HERO3: GIFT WRAPPING SERVICE PITCH -->
  <!-- HERO3: Desktop -->
  <section class="hidden md:block bg-white py-12 md:py-20 md:px-24 lg:px-32 xl:px-48">
      <div class="container mx-auto text-center">
          <h2 class="text-3xl font-bold text-black mb-6 md:text-4xl font-serif">Gift Wrap Your Way to His Heart</h2>
          <p class="text-lg leading-relaxed mb-8 md:text-xl md:leading-relaxed font-poppins font-bold px-4 md:px-150">Make gifting effortless and stylish with our premium<br>gift wrapping service. Choose from a variety of elegant papers and ribbons to<br>perfectly complement your purchase.</p>
      <button class="relative bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition duration-300 ease-in-out font-bold font-poppins">
          Wrap Now
      </button>
      </div>
  </section>

  <?php include './includes/footer.php'; ?>
  <?php include './includes/cookies.php'; ?>
</body>
</html>