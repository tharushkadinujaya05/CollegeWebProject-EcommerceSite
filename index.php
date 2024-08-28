<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IvoryStreets | Home</title>
  <link href="../assets/css/style.css" rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <?php include './includes/navbar.php'; ?>
  
  <!-- HERO1: OFFERS -->
  <div class="relative h-screen">

    <!-- Background Image -->
    <div class="hidden md:block absolute inset-0 bg-cover bg-center" style="background-image: url('../assets/images/home01_desktop.png');"></div>
    <div class="md:hidden absolute inset-0 bg-cover bg-center" style="background-image: url('../assets/images/home01_mobile.png');"></div>

    <!-- Hero Text + CTA -->
    <div class="absolute inset-0 flex flex-col justify-center items-center px-8 py-12 md:items-start md:px-16 lg:items-start lg:px-24">
      <!-- Desktop -->
        <h1 class="hidden sm:block text-2xl md:text-4xl lg:text-6xl font-bold text-black mb-4 font-serif">
          The<br>Statement<br>Maker</h1>
        <h2 class="hidden sm:block text-lg md:text-xl lg:text-2xl text-gray-700 mb-8 font-inter" style="font-weight: 500;">
          Refresh Your Look,<br>20% Off Graphic Tees!</h2>
        <button class="hidden sm:block bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full focus:outline-none focus:shadow-outline">
          Shop Now</button>
      <!-- Mobile -->
        <div class="sm:hidden" style="height: 450px; visibility: hidden;"> </div>

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

        <div class="sm:hidden" style="height: 40px; visibility: hidden;"> </div>
        
        <div class="sm:hidden mt-4">
          <svg class="animate-bounce" width="48" height="48" viewBox="0 0 48 48" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="12 18 24 30 36 18"></polyline>
          </svg>
        </div>
    </div>
  </div>

  <!-- HERO2: EDITOR'S PICKS-->
  <div class="relative h-screen"></div>
  <?php include './includes/cookies.php'; ?>
</body>
</html>