<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QCU-Learning Management System | Instructor Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../../public/assets/css/scrollbar.css">
  <link rel="icon" type="image/png" href="../../../public/assets/img/qcu-logo-lms.png" />
</head>

<body class="bg-gray-900">
  <div class="h-screen grid md:grid-cols-2">
    <!-- Left side itey -->
    <div class="col-span-1 p-12">
      <span class="inline-flex">
        <img src="../../../public/assets/img/qcu-logo-lms.png" alt="Quezon City University Logo" class="h-9 w-auto mr-6">
        <h3 class="font-medium text-gray-900 dark:text-white text-2xl">QCU-LMS</h3>
      </span>
      <!-- Greeting -->
      <div class="flex-col flex items-center justify-center h-full">
        <h1 class="font-bold text-gray-900 dark:text-white text-4xl mb-8">Welcome, Professors!</h1>
        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
          <!-- Form -->
          <form class="space-y-4" action="#">
            <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-7">Sign in to your account</h5>
            <!-- Username Input -->
            <label for="user" class="block text-sm font-medium text-gray-900 dark:text-white">Username</label>
            <div class="flex">
              <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd" />
                </svg>
              </span>
              <input type="text" id="user" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your username">
            </div>
            <!-- Password Input -->
            <label for="password" class="block text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <div class="flex">
              <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7c0-1.1.9-2 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6c.6 0 1 .4 1 1v3a1 1 0 1 1-2 0v-3c0-.6.4-1 1-1Z" clip-rule="evenodd" />
                </svg>
              </span>
              <input type="password" id="password" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your password">
            </div>
            <!-- Show Password -->
            <div class="flex items-start">
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="remember" type="checkbox" onclick="togglePasswordVisibility()" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 cursor-pointer" required>
                </div>
                <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Show Password</label>
              </div>
              <!-- Optional kemeruts -->
              <!-- <a href="#" class="ms-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a> -->
            </div>
            <!-- Login Button -->
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
            <!-- Login link kemeruts -->
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
              Are you <a href="../student/student-login.php" data-popover-target="student-popover" data-popover-placement="bottom" class="text-blue-700 hover:underline dark:text-blue-500">Student</a> or <a href="#" data-popover-target="admin-popover" data-popover-placement="bottom" class="text-blue-700 hover:underline dark:text-blue-500">Admin</a>?
            </div>
            <!-- Popver for admin login link -->
            <div data-popover id="admin-popover" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
              <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                <h3 class="font-semibold text-gray-900 dark:text-white">Admin login page</h3>
              </div>
              <div class="px-3 py-2">
                <p>Click this link and you'll be directed to the admin login page.</p>
              </div>
              <div data-popper-arrow></div>
            </div>
            <!-- Popver for student login link -->
            <div data-popover id="student-popover" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
              <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                <h3 class="font-semibold text-gray-900 dark:text-white">Student login page</h3>
              </div>
              <div class="px-3 py-2">
                <p>Click this link and you'll be directed to the student login page.</p>
              </div>
              <div data-popper-arrow></div>
            </div>
          </form>
        </div>
        <!-- Footer -->
        <span id="year" class="block text-sm text-gray-500 sm:text-center dark:text-gray-400 mt-11"></span>
        <!-- Popover for QCU Website footer -->
        <div data-popover id="qcu-popover" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-96 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
          <div class="grid grid-cols-5">
            <div class="col-span-3 p-3">
              <div class="space-y-2">
                <h3 class="font-semibold text-gray-900 dark:text-white">About Quezon City University</h3>
                <p>Quezon City University, formerly known as Quezon City Polytechnic University, is a city government-funded university in Quezon City, Philippines. It was established on March 1, 1994, as the Quezon City Polytechnic, offering technical and vocational courses.</p>
                <a href="https://qcu.edu.ph/" target="_blank" class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                  </svg></a>
              </div>
            </div>
            <img src="../../../public/assets/img/qcu-map-preview.png" class="h-full object-cover col-span-2" alt="QCU map" />
            <!-- Nasisira responsiveness pag nag embed ng map omai -->
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15436.896375439417!2d121.0325339!3d14.6999155!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b0d899095555%3A0x523cb309be95e9a6!2sQuezon%20City%20University!5e0!3m2!1sen!2sph!4v1707633815719!5m2!1sen!2sph" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="h-full col-span-2" alt="QCU map"></iframe> -->
          </div>
          <div data-popper-arrow></div>
        </div>
      </div>
    </div>
    <!-- Right side itey -->
    <div class="col-span-1 hidden md:block">
      <div id="default-carousel" class="relative object-cover w-full h-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-full overflow-hidden">
          <!-- Picture 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../../../public/assets/img/qcu-image1-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by CSS">
          </div>
          <!-- Picture 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../../../public/assets/img/qcu-image2-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by Joanah Marie Aldave">
          </div>
          <!-- Picture 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../../../public/assets/img/qcu-image3-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by CSS">
          </div>
          <!-- Picture 4 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../../../public/assets/img/qcu-image4-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by Joanah Marie Aldave">
          </div>
          <!-- Picture 5 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../../../public/assets/img/qcu-image5-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by CSS">
          </div>
          <!-- Picture 6 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../../../public/assets/img/qcu-image6-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by CSS">
          </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="5"></button>
        </div>
      </div>
    </div>
  </div>
  <script>
    // For password visibility
    function togglePasswordVisibility() {
      const passwordInput = document.getElementById('password');
      passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
    }
    // Footer date
    document.addEventListener('DOMContentLoaded', function() {
      const yearSpan = document.getElementById('year');
      const currentYear = new Date().getFullYear();
      yearSpan.innerHTML = `© ${currentYear} <a href="https://qcu.edu.ph/" data-popover-target="qcu-popover" class="hover:underline" target="_blank">Quezon City University</a>. All Rights Reserved.`;
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>