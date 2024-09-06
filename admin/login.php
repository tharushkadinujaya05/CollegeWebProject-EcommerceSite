<?php 
session_start();

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT admin_id, username, admin_password FROM admin WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "s", $email); 
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_bind_result($stmt, $admin_id, $username, $stored_password);
        mysqli_stmt_fetch($stmt);

        if ($password === $stored_password) {
            $_SESSION['admin_id'] = $admin_id;
            $_SESSION['username'] = $username;
            
            header("Location: index.php");
            exit();
        } else {
            $error = 'Invalid credentials';
        }
    } else {
        $error = 'Invalid credentials';
    }

    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link href="../../assets/css/style.css" rel="stylesheet" />
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
          <img src="../../assets/images/logo-wh.png" alt="Logo" class="h-7" />
        </a>
        <div class="hidden lg:relative lg:block lg:p-12">
          <h2 class="font-poppins mt-6 text-2xl font-bold text-white sm:text-3xl md:text-4xl">
          "Discover the Extraordinary"
          </h2>
          <p class="font-nunito mt-4 leading-relaxed text-white/90">
          IvoryStreets is your gateway to a world of fashion and exclusive finds. Join us to explore a curated selection that speaks to your unique taste.
          </p>
        </div>
      </section>
      
      <main class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
        <div class="bg-background max-w-xl lg:max-w-3xl">
          <div class="bg-background pt-4 flex items-center justify-center h-full">
            <div class="bg-background relative flex flex-col sm:w-[30rem] rounded-lg border-gray-400 shadow-lg">
              <div class="bg-background flex-auto p-6">
                <h4 class="bg-background mb-2 font-bold text-whitetext xl:text-xl font-poppins">Sign in to IvoryStreets</h4>
                <p class="bg-background mb-6 text-whitetext font-nunito">Welcome back! Please sign in to continue</p>

                <?php if (!empty($error)) { ?>
                  <div style="color: red; font-weight: bold;"><?php echo $error; ?></div>
                <?php } ?>

                <form id="login-form" class="mb-4" action="index.php" method="POST">
                  <div class="mb-4">
                    <label for="email" class="mb-2 inline-block text-xs font-medium uppercase text-whitetext font-nunito">Email or Username</label>
                    <input type="text" name="email" class="bg-background block w-full cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" id="email" placeholder="Enter your email or username" autofocus="" />
                  </div>
                  <div class="mb-4">
                    <div class="flex justify-between">
                      <label class="mb-2 inline-block text-xs font-medium uppercase text-whitetext font-nunito" for="password">Password</label>
                      <a href="auth-forgot-password-basic.html" class="cursor-pointer text-indigo-500 no-underline hover:text-indigo-500">
                        <small class="font-nunito text-graytext">Forgot Password?</small>
                      </a>
                    </div>
                    <div class="relative flex w-full flex-wrap items-stretch">
                      <input type="password" name="password" id="password" class="bg-background relative block flex-auto cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-blue-600 focus:bg-background  focus:text-gray-600 focus:shadow" placeholder="············" />
                    </div>
                  </div>
                  <div class="mb-4">
                    <div class="block">
                      <input class="mt-1 mr-2 h-5 w-5 appearance-none rounded border border-gray-300 bg-contain bg-no-repeat align-top text-black shadow checked:bg-blue-500 focus:border-blue-500 focus:shadow" type="checkbox" id="remember-me" checked />
                      <label class="inline-block text-whitetext" for="remember-me"> Remember Me </label>
                    </div>
                  </div>
                  <div class="mb-4">
                    <button class="grid w-full cursor-pointer select-none rounded-md bg-black py-2 px-5 text-center align-middle text-sm text-white shadow hover:border border-black hover:bg-white hover:text-black focus:border-black focus:bg-white focus:text-black transition-colors duration-300 ease-in-out group-hover:text-white focus:shadow-none" type="submit">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </section>
  <script src="../../assets/js/login.js"></script>
</body>
</html>
