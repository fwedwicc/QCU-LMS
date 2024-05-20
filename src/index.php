<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QCU-LMS</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="../assets/image/QCU-logo.png" type="image/x-icon">
  <!-- Flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="./output.css">
</head>

<body>
  <div class="h-screen grid md:grid-cols-2">
    <!-- Left side -->
    <div class="col-span-1 hidden md:block">
      <div id="default-carousel" class="relative object-cover w-full h-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-full overflow-hidden">
          <!-- Picture 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../assets/image/qcu-image6-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by CSS">
          </div>
          <!-- Picture 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../assets/image/qcu-image6-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by Joanah Marie Aldave">
          </div>
          <!-- Picture 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../assets/image/qcu-image6-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by CSS">
          </div>
          <!-- Picture 4 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../assets/image/qcu-image6-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by Joanah Marie Aldave">
          </div>
          <!-- Picture 5 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../assets/image/qcu-image6-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by CSS">
          </div>
          <!-- Picture 6 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../assets/image/qcu-image6-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by CSS">
          </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
          <button type="button" class="w-2.5 h-2.5 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-2.5 h-2.5 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
          <button type="button" class="w-2.5 h-2.5 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
          <button type="button" class="w-2.5 h-2.5 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
          <button type="button" class="w-2.5 h-2.5 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
          <button type="button" class="w-2.5 h-2.5 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="5"></button>
        </div>
      </div>
    </div>
    <!-- Right side -->
    <div class="col-span-1 p-12">
      <span class="inline-flex items-center">
        <img src="../assets/image/QCU-logo.png" alt="QCU Logo" class="h-9 w-auto mr-5">
        <h3 class="font-bold text-xl">QCU-LMS</h3>
      </span>
      <!-- Greeting -->
      <div class="flex-col flex items-center justify-center h-full">
        <h1 class="font-bold text-4xl mb-8">Welcome QCians!</h1>
        <div class="w-full max-w-sm p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
          <!-- Form -->
          <form class="space-y-3" action="models/login_users.php" method="post">
            <h5 class="text-xl font-medium mb-7">Sign In to your account</h5>
            <!-- Username Input -->
            <label for="user" class="block text-sm font-medium">Username</label>
            <div class="flex">
              <span class="inline-flex items-center px-3 text-sm text-witty-blue bg-ghost-lavender border rounded-e-0 border-lavender rounded-s-md">
                <svg class="w-6 h-6 text-witty-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd" />
                </svg>
              </span>
              <input type="text" id="user" name="user" class="login-input" placeholder="Your username" required>
            </div>
            <!-- Password Input -->
            <label for="password" class="block text-sm font-medium pt-3">Password</label>
            <div class="flex">
              <span class="inline-flex items-center px-3 text-sm text-witty-blue bg-ghost-lavender border rounded-e-0 border-lavender rounded-s-md">
                <svg class="w-6 h-6 text-witty-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7c0-1.1.9-2 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6c.6 0 1 .4 1 1v3a1 1 0 1 1-2 0v-3c0-.6.4-1 1-1Z" clip-rule="evenodd" />
                </svg>
              </span>
              <input type="password" id="pass" name="pass" class="login-input" placeholder="Your password">
            </div>
            <!-- Show and Forgot Password container -->
            <div class="flex justify-between pb-4">
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="remember" type="checkbox" onclick="togglePasswordVisibility()" value="" class="checkbox">
                </div>
                <label for="remember" class="ms-2 text-sm font-medium">Show Password</label>
              </div>
              <a href="#" data-popover-target="forgot-pass-popover" data-popover-placement="bottom" class="text-neon-blue hover:underline text-sm font-medium">Forgot Password?</a>
            </div>
            <!-- Error Message for validation -->
            <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
            <!-- Login Button -->
            <button type="submit" class="btn-primary w-full">Login</button>
            <!-- Popver for admin login link -->
            <div data-popover id="forgot-pass-popover" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-deep-koamaru transition-opacity duration-300 bg-white border border-quartz rounded-lg shadow-sm opacity-0">
              <div class="px-3 py-2 bg-ghost-white border-b border-quartz rounded-t-lg">
                <h3 class="font-semibold">Forgot Password Page</h3>
              </div>
              <div class="px-3 py-2">
                <p>Click this link and you'll be directed to the forgot password page.</p>
              </div>
              <div data-popper-arrow></div>
            </div>
          </form>
        </div>
        <!-- Footer -->
        <span id="year" class="block text-sm text-deep-koamaru sm:text-center mt-11"></span>
      </div>
    </div>
  </div>
  <script>
    // For password visibility
    function togglePasswordVisibility() {
      const passwordInput = document.getElementById('pass');
      passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
    }
    // Footer date
    document.addEventListener('DOMContentLoaded', function() {
      const yearSpan = document.getElementById('year');
      const currentYear = new Date().getFullYear();
      yearSpan.innerHTML = `© ${currentYear} <a href="https://qcu.edu.ph/" data-popover-target="qcu-popover" class="hover:underline text-neon-blue" target="_blank">Quezon City University</a>.`;
    });
  </script>
  <!-- Flowbite Script -->
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>