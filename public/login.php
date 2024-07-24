<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IvoryStreets | Login</title>
</head>
<body>
  <section class="bg-white">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <section class="relative flex h-32 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6">
        <div class="absolute inset-0 h-full w-full bg-gradient-to-r from-black to-[#130F40] opacity-80"></div>
        <a class="absolute top-0 left-0 p-12 hidden lg:block" href="#">
          <span class="sr-only">Ivory Streets Login Page</span>
          <img src="../assets/images/logo-wh.png" alt="Logo" class="h-7" />
        </a>
        <div class="hidden lg:relative lg:block lg:p-12">
          <h2 class="font-poppins mt-6 text-2xl font-bold text-white sm:text-3xl md:text-4xl">
            Welcome to IvoryStreets
          </h2>
          <p class="font-nunito mt-4 leading-relaxed text-white/90">
            Unlock your gateway to a world of exclusive finds and tailored recommendations.
            If you need assistance, please contact us at <i>ivorystreets@gmail.com</i>.
            We’re here to help!
          </p>
        </div>
      </section>

      <main class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
        <div class="max-w-xl lg:max-w-3xl">
          <div class="relative -mt-16 block lg:hidden">
            <a class="inline-flex size-16 items-center justify-center rounded-full bg-white text-blue-600 sm:size-20" href="#">
              <span class="sr-only">Ivory Streets Login Page</span>
              <img src="../assets/images/logo-bl-s.png" alt="Logo" class="h-6" />
            </a>
            <h1 class="font-poppins mt-2 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
              Welcome to IvoryStreets
            </h1>
            <p class="font-nunito mt-4 leading-tight text-gray-500">
              Unlock your gateway to a world of exclusive finds and tailored recommendations.
              If you need assistance, please contact us at <i>ivorystreets@gmail.com</i>.
              We’re here to help!
            </p>
          </div>
          <div class="p-6">
            <div class="relative flex flex-col sm:w-[30rem] rounded-lg border-gray-400 bg-white shadow-lg px-4">
              <div class="flex-auto p-6">
                <h4 class="mb-2 font-medium text-gray-700 xl:text-xl font-poppins">Welcome to IvoryStreets!</h4>
                <p class="mb-6 text-gray-500 font-nunito">Please sign-in to access your account</p>
                <form id="" class="mb-4" action="#" method="POST">
                  <div class="mb-4">
                    <label for="email" class="mb-2 inline-block text-xs font-medium uppercase text-gray-700 font-nunito">Email or Username</label>
                    <input type="text" class="block w-full cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" id="email" name="email-username" placeholder="Enter your email or username" autofocus="" />
                  </div>
                  <div class="mb-4">
                    <div class="flex justify-between">
                      <label class="mb-2 inline-block text-xs font-medium uppercase text-gray-700 font-nunito" for="password">Password</label>
                      <a href="auth-forgot-password-basic.html" class="cursor-pointer text-indigo-500 no-underline hover:text-indigo-500">
                        <small class="font-nunito text-gray-600">Forgot Password?</small>
                      </a>
                    </div>
                    <div class="relative flex w-full flex-wrap items-stretch">
                      <input type="password" id="password" class="relative block flex-auto cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-blue-600 focus:bg-white focus:text-gray-600 focus:shadow" name="password" placeholder="············" />
                    </div>
                  </div>
                  <div class="mb-4">
                    <div class="block">
                      <input class="mt-1 mr-2 h-5 w-5 appearance-none rounded border border-gray-300 bg-contain bg-no-repeat align-top text-black shadow checked:bg-blue-500 focus:border-blue-500 focus:shadow" type="checkbox" id="remember-me" style="background-image: url(&quot;data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 10l3 3l6-6'/%3e%3c/svg%3e&quot;)" checked />
                      <label class="inline-block" for="remember-me"> Remember Me </label>
                    </div>
                  </div>
                  <div class="mb-4">
                    <button class="grid w-full cursor-pointer select-none rounded-md bg-black py-2 px-5 text-center align-middle text-sm text-white shadow hover:border border-black hover:bg-white hover:text-black focus:border-black focus:bg-white focus:text-black transition-colors duration-300 ease-in-out group-hover:text-white focus:shadow-none" type="submit">Sign in</button>
                  </div>
                </form>
                <p class="mb-4 text-center font-poppins">
                  New on IvoryStreets?
                  <a href="#" class="cursor-pointer text-gray-500 no-underline hover:text-indigo-500 font-nunito"> Create an account </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </section>
</body>
</html>
