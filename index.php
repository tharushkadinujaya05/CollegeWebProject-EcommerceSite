<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IvoryStreets | Home</title>
    <link href="./assets/css/style.css" rel="stylesheet">
    <style>
        nav {
            width: 100%;
            position: fixed;
            top: 10px; /* Adjust this value to create space between the navbar and the top of the viewport */
            left: 0;
            right: 0;
            background-color: transparent;
            backdrop-filter: none;
            box-shadow: none;
            transition: all 0.5s ease; /* Adjusted transition duration */
            z-index: 50;
            padding: 10px 20px; /* Existing padding */
            margin: 0 auto; /* Center the navbar */
            box-sizing: border-box; /* Ensure padding is included in the width calculation */
        }
        #hero01 {
            height: 100vh; /* Example height for the hero section */
        }
    </style>
    </head>
    <body>

        <!-- NAVBAR -->
        <nav>
            <div class="px-4">
                <div class="flex items-center justify-between">
                    <div class="flex shrink-0">
                        <a aria-current="page" class="flex items-center" href="../public/index.php">
                            <img class="h-5 px-3" src="../assets/images/logo-bl.png" alt="">
                            <p class="sr-only">Website Title</p>
                        </a>
                    </div>
                    <div class="flex items-center justify-end gap-1">
                        <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito sm:inline-flex" href="../public/readytowear.php">Ready to Wear</a>
                        <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito sm:inline-flex" href="../public/gift.php">Gifts</a>
                        <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito sm:inline-flex" href="../public/contactus.php">Contact Us</a>
                        <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito sm:inline-flex" href="../public/faq/index.php">FAQ</a>
                        <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito sm:inline-flex" href="../public/blog/index.php">Explore</a>
                        <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito sm:inline-flex" href="#">
                            <img width="20" height="20" src="https://img.icons8.com/ios/50/search--v1.png" alt="search--v1"/></a>
                        <a id="cart-button" class="hidden items-center justify-center px-3 py-2 text-sm font-nunito sm:inline-flex" href="#"><img width="20" height="20" src="https://img.icons8.com/pastel-glyph/64/shopping-trolley--v2.png" alt="shopping-trolley--v2"/></a>
                    </div>
                </div>
            </div>
        </nav>

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
        <section class="h-12" style="background-color: red" id="hero2">
            <div class="w-full h-full flex items-center justify-center" id="hero2-content">
                <p class="block md:hidden text-white font-poppins font-bold text-3xl flex items-center justify-center h-full" id="hero2-mobile-text">EDITOR'S CHOICE</p></div>
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
                    <img src="./assets/images/home04.png" style="width: 15%; height: 15%; margin-right: 5%">
                    <img src="./assets/images/home05.png" style="width: 15%; height: 15%; margin-right: 5%">
                    <img src="./assets/images/home06.png" style="width: 15%; height: 15%;">
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
                <div class="container mx-auto text-center" id="hero3-mobile-content">
                    <button class="relative bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition duration-300 ease-in-out font-bold font-poppins" id="hero3-mobile-button">
                        Shop Now</button>
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
        <section class="h-12" style="background-color: red" id="hero2">
            <div class="w-full h-full flex items-center justify-center" id="hero2-content">
                <p class="block md:hidden text-white font-poppins font-bold text-3xl flex items-center justify-center h-full" id="hero2-mobile-text">FEATURED</p>
            </div>
        </section>

        <!-- HERO4: FEATURED -->
        <div class="bg-gray-800 h-screen"></div>

        <!-- HERO4: FOOTNOTE -->
        <div class="h-screen"></div>

        <!-- FOOTER -->
        <?php include './includes/footer.php'; ?>
        <!-- COOKIES -->
        <?php include './includes/cookies.php'; ?>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('nav');
            const heroSection = document.querySelector('#hero1');

            if (!heroSection) {
                console.error('Hero section element not found');
                return;
            }

            let lastScrollTop = 0;

            window.addEventListener('scroll', function() {
                const scrollY = window.scrollY;
                const heroSectionHeight = heroSection.offsetHeight;
                const maxScroll = heroSectionHeight - window.innerHeight;

                // Calculate the scroll percentage relative to the hero section height
                let scrollPercent = Math.min(scrollY / maxScroll, 1);

                // Smooth transition effect
                if (scrollY > lastScrollTop) {
                    // Scrolling down
                    let newWidth = Math.max(80, 100 - (20 * scrollPercent)); // 100% to 80%
                    navbar.style.width = `${newWidth}%`;

                    // Adjust background, shadow, and other properties gradually
                    if (scrollY > 50) {
                        navbar.style.backgroundColor = `rgba(255, 255, 255, ${0.2 + 0.6 * scrollPercent})`;
                        navbar.style.backdropFilter = `blur(${10 * scrollPercent}px)`;
                        navbar.style.boxShadow = `0 4px 6px rgba(0, 0, 0, ${0.1 * scrollPercent})`;
                        navbar.style.padding = `10px 40px`;
                        navbar.style.borderRadius = '12px';
                    } else {
                        navbar.style.backgroundColor = 'transparent';
                        navbar.style.backdropFilter = 'none';
                        navbar.style.boxShadow = 'none';
                        navbar.style.padding = '10px 20px';
                        navbar.style.borderRadius = '0';
                    }
                } else {
                    // Scrolling up
                    navbar.style.width = '100%';
                    navbar.style.backgroundColor = 'transparent';
                    navbar.style.backdropFilter = 'none';
                    navbar.style.boxShadow = 'none';
                    navbar.style.padding = '10px 20px';
                    navbar.style.borderRadius = '0';
                }

                lastScrollTop = scrollY <= 0 ? 0 : scrollY; // For Mobile Safari
            });
        });
    </script>
    </body>
</html>