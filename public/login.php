<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IvoryStreets | Login</title>
</head>
<body>
  <section class="bg-background">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <section class="relative flex h-32 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6">
        <div class="absolute inset-0 h-full w-full bg-gradient-to-r from-black to-[#130F40] opacity-80"></div>
        <a class="absolute top-0 left-0 p-12 hidden lg:block" href="#">
          <span class="sr-only">Ivory Streets Login Page</span>
          <img src="../assets/images/logo-wh.png" alt="Logo" class="h-7" />
        </a>
        <div class="hidden lg:relative lg:block lg:p-12">
          <h2 class="font-poppins mt-6 text-2xl font-bold text-white sm:text-3xl md:text-4xl">
          "Discover the Extraordinary"          </h2>
          <p class="font-nunito mt-4 leading-relaxed text-white/90">
          IvoryStreets is your gateway to a world of fashion and exclusive finds. Join us to explore a curated selection that speaks to your unique taste.

          </p>
        </div>
      </section>
      
      <main class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
      <div class="absolute top-0 right-0 p-4">
        <label class="swap swap-rotate">
          <input type="checkbox" class="theme-controller"/>
          <svg class="sun swap-off h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
          </svg>
          <svg class="moon swap-on h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
          </svg>
        </label>
      </div>
        <div class="bg-background max-w-xl lg:max-w-3xl">
          <div class="relative -mt-16 block lg:hidden">
            <a class="inline-flex size-16 items-center justify-center rounded-full bg-white text-blue-600 sm:size-20" href="#">
              <span class="sr-only">Ivory Streets Login Page</span>
              <img src="../assets/images/logo-bl-s.png" alt="Logo" class="h-6" />
            </a>
            <h1 class="text-whitetext font-poppins mt-2 text-2xl font-bold sm:text-3xl md:text-4xl">
            "Discover the Extraordinary"
            </h1>
            <p class="font-nunito mt-4 leading-tight text-whitetext">
              IvoryStreets is your gateway to a world of fashion and exclusive finds. Join us to explore a curated selection that speaks to your unique taste.
            </p>
          </div>
          <div class="bg-background pt-4 flex items-center justify-center h-full">
            <div class="bg-background relative flex flex-col sm:w-[30rem] rounded-lg border-gray-400 shadow-lg">
              <div class="bg-background flex-auto p-6">
                <h4 class="bg-background mb-2 font-bold text-whitetext xl:text-xl font-poppins">Sign in to IvoryStreets</h4>
                <p class="bg-background mb-6 text-whitetext font-nunito">Welcome back! Please sign in to continue</p>
                <form id="" class="mb-4" action="#" method="POST">
                  <div class="mb-4">
                    <label for="email" class="mb-2 inline-block text-xs font-medium uppercase text-whitetext font-nunito">Email or Username</label>
                    <input type="text" class="bg-background block w-full cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" id="email" name="email-username" placeholder="Enter your email or username" autofocus="" />
                  </div>
                  <div class="mb-4">
                    <div class="flex justify-between">
                      <label class="mb-2 inline-block text-xs font-medium uppercase text-whitetext font-nunito" for="password">Password</label>
                      <a href="auth-forgot-password-basic.html" class="cursor-pointer text-indigo-500 no-underline hover:text-indigo-500">
                        <small class="font-nunito text-graytext">Forgot Password?</small>
                      </a>
                    </div>
                    <div class="relative flex w-full flex-wrap items-stretch">
                      <input type="password" id="password" class="bg-background relative block flex-auto cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-blue-600 focus:bg-background  focus:text-gray-600 focus:shadow" name="password" placeholder="············" />
                    </div>
                  </div>
                  <div class="mb-4">
                    <div class="block">
                      <input class="mt-1 mr-2 h-5 w-5 appearance-none rounded border border-gray-300 bg-contain bg-no-repeat align-top text-black shadow checked:bg-blue-500 focus:border-blue-500 focus:shadow" type="checkbox" id="remember-me" style="background-image: url(&quot;data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 10l3 3l6-6'/%3e%3c/svg%3e&quot;)" checked />
                      <label class="inline-block text-whitetext" for="remember-me"> Remember Me </label>
                    </div>
                  </div>
                  <div class="mb-4">
                    <button class="grid w-full cursor-pointer select-none rounded-md bg-black py-2 px-5 text-center align-middle text-sm text-white shadow hover:border border-black hover:bg-white hover:text-black focus:border-black focus:bg-white focus:text-black transition-colors duration-300 ease-in-out group-hover:text-white focus:shadow-none" type="submit">Sign in</button>
                  </div>
                </form>
                <p class="mb-4 text-center font-poppins">
                  New on IvoryStreets?
                  <a href="./register.php" class="cursor-pointer text-gray-500 no-underline hover:text-indigo-500 font-nunito"> Create an account </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </section>
  <script src="../assets/js/login.js"></script>
  <?php include '../includes/footer.php'; ?>
</body>
</html>
