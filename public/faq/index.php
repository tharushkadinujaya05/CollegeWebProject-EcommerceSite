<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <title>IvoryStreets | FAQ</title>
  </head>
  <body>
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
