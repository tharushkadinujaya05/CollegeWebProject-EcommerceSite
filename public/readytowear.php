<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <title>IvoryStreets | Ready to Wear</title>
</head>
<body>
<?php include '../includes/navbar.php'; ?>
<div class="relative bg-cover bg-center h-[36rem] md:h-[40rem]" style="background-image: url('../assets/images/readytowearhero.png')">
  <div class="absolute inset-0 bg-gradient-to-l w-4/4 from-transparent to-black opacity-80"></div>
  <div class="absolute inset-0 flex flex-col items-center justify-center px-4">
    <p class="text-white text-3xl md:text-5xl text-center mb-4 font-poppins">Ready to wear</p>
    <p class="text-white text-base md:text-2xl text-center font-nunito">Your journey to exceptional fashion starts here.</p>
  </div>
</div>
<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <header>
      <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Tailored to You</h2>

      <p class="mt-4 max-w-md text-gray-500">
      Find the perfect fit for your lifestyle with our versatile and stylish ready-to-wear collection
      </p>
    </header>

    <div class="mt-8">
      <p class="text-sm text-gray-500">Showing <span> 1 </span> of 60</p>
    </div>

    <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="../assets/images/model.png"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
            OVERSIZED DRAGON FLORAL GRAPHIC SWEATSHIRT
            </h3>

            <p class="mt-2">
              <span class="sr-only"> Regular Price </span>

              <span class="tracking-wider text-gray-900"> $19.60 </span>
            </p>
          </div>
        </a>
      </li>
    </ul>

    <ol class="mt-8 flex justify-center gap-1 text-xs font-medium">
      <li>
        <a
          href="#"
          class="inline-flex size-8 items-center justify-center rounded border border-gray-100"
        >
          <span class="sr-only">Prev Page</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-3"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
              clip-rule="evenodd"
            />
          </svg>
        </a>
      </li>

      <li>
        <a href="#" class="block size-8 rounded border border-gray-100 text-center leading-8">
          1
        </a>
      </li>

      <li class="block size-8 rounded border-black bg-black text-center leading-8 text-white">2</li>

      <li>
        <a href="#" class="block size-8 rounded border border-gray-100 text-center leading-8">
          3
        </a>
      </li>

      <li>
        <a href="#" class="block size-8 rounded border border-gray-100 text-center leading-8">
          4
        </a>
      </li>

      <li>
        <a
          href="#"
          class="inline-flex size-8 items-center justify-center rounded border border-gray-100"
        >
          <span class="sr-only">Next Page</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-3"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd"
            />
          </svg>
        </a>
      </li>
    </ol>
  </div>
</section>
</body>
</html>