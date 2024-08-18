<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <title>IvoryStreets | FAQ</title>
  </head>
  <body>
    <header
        class="sticky inset-x-0 top-0 z-30 mx-auto w-full max-w-screen-md bg-white py-3 shadow-2xl backdrop-filter backdrop-blur-lg bg-opacity-20 md:top-6 md:rounded-3xl lg:max-w-screen-lg">
        <div class="px-4">
            <div class="flex items-center justify-between">
                <div class="flex shrink-0">
                <a aria-current="page" class="flex items-center" href="../../public/index.php">
                    <img class="h-5 px-3" src="../../assets/images/logo-bl.png" alt="">
                    <p class="sr-only">Website Title</p>
                </a>
                </div>
                <div class="flex items-center justify-end gap-1">
                <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito  sm:inline-flex"
                    href="../../public/products.php">Ready to Wear</a>
                <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito  sm:inline-flex"
                    href="../../public/gift.php">Gifts</a>
                <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito  sm:inline-flex"
                    href="../../public/contactus.php">Contact Us</a>
                <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito  sm:inline-flex"
                    href="../../public/faq/index.php">FAQ</a>
                <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito  sm:inline-flex"
                    href="../../public/blog/index.php">Explore</a>
                <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito  sm:inline-flex"
                    href="#">
                    <img width="20" height="20" src="https://img.icons8.com/ios/50/search--v1.png" alt="search--v1"/></i></a>
                <a class="hidden items-center justify-center px-3 py-2 text-sm font-nunito  sm:inline-flex"
                    href="#"><img width="20" height="20" src="https://img.icons8.com/pastel-glyph/64/shopping-trolley--v2.png" alt="shopping-trolley--v2"/></i></a>
                </div>
            </div>
            </div>
        </div>
    </header>                     
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      <h2
        class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white"
      >
        Frequently<br />asked questions
      </h2>
      <p class="mt-1 hidden md:block text-gray-600 dark:text-neutral-400">
        Answers to the most frequently asked questions.
      </p>

      <div class="grid md:grid-cols-5 gap-10 pt-10">
        <div class="md:col-span-2">
          <div class="max-w-xs">
            <h1
              class="text-2xl font-poppins md:text-2xl md:leading-tight dark:text-white"
            >
              Catergories
            </h1>
            <div class="mt-4 space-y-4 lg:mt-8">
              <a
                href="#"
                class="block text-blue-500 dark:text-blue-400 hover:underline"
                >Delivery and order tracking
              </a>
              <a
                href="#"
                class="block text-gray-500 dark:text-gray-300 hover:underline"
                >Payments and promotions
              </a>
              <a
                href="#"
                class="block text-gray-500 dark:text-gray-300 hover:underline"
                >Returns, exchanges and refunds
              </a>
              <a
                href="#"
                class="block text-gray-500 dark:text-gray-300 hover:underline"
                >Information on sizes and products
              </a>
              <a
                href="#"
                class="block text-gray-500 dark:text-gray-300 hover:underline"
                >Personal data and notifications</a
              >
            </div>
          </div>
        </div>

        <?php include './includes/deliveryandorder.php'; ?>

      </div>
    </div>
    <script src="../../node_modules/preline/dist/preline.js"></script>
  </body>
</html>
