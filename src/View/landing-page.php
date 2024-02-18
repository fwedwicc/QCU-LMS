<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QCU-Learning Management System | Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../public/assets/css/scrollbar.css">
  <link rel="icon" type="image/png" href="../../public/assets/img/qcu-logo-lms.png" />
</head>

<body class="bg-gray-900">
  <div class="p-12 flex items-center justify-center h-screen">
    <!-- Greeting -->
    <div class="flex-col flex items-center w-full max-w-auto">
      <span class="inline-flex mb-11">
        <img src="../../public/assets/img/qcu-logo-lms.png" alt="Quezon City University Logo" class="h-24 w-auto mr-4">
      </span>
      <h1 class="font-bold text-gray-900 dark:text-white lg:text-5xl text-2xl mb-8">Quezon City University</h1>
        <!-- Links -->
        <div class="inline-flex rounded-md shadow-lg mt-12">
          <a href="../View/student/student-login.php" class="lg:px-10 lg:py-4 lg:text-base px-6 py-3 text-sm font-medium text-blue-700 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
            Student
          </a>
          <a href="../View/instructor/instructor-login.php" class="lg:px-10 lg:py-4 lg:text-base px-6 py-3 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
            Instructor
          </a>
          <a href="../View/admin/admin-login.php" class="lg:px-10 lg:py-4 lg:text-base px-6 py-3 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
            Admin
          </a>
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