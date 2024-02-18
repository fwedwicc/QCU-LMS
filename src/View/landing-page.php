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
      <h1 class="font-bold text-gray-900 dark:text-white lg:text-5xl text-2xl mb-4">Quezon City University</h1>
      <h3 class="font-medium text-gray-900 dark:text-white lg:text-2xl text-lg mb-8">Learning Management System</h3>
      <!-- Links -->
      <div class="inline-flex rounded-md shadow-md mt-12">
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
      <div class="mt-14 space-x-2">
        <a href="https://web.facebook.com/qcu1994" target="_blank">
          <svg class="inline-block w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M13.1 6H15V3h-1.9A4.1 4.1 0 0 0 9 7.1V9H7v3h2v10h3V12h2l.6-3H12V6.6a.6.6 0 0 1 .6-.6h.5Z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="https://twitter.com/qcublesds?lang=en" target="_blank">
          <svg class="inline-block w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path fill="currentColor" d="M13.8 10.5 20.7 2h-3l-5.3 6.5L7.7 2H1l7.8 11-7.3 9h3l5.7-7 5.1 7H22l-8.2-11.5Zm-2.4 3-1.4-2-5.6-7.9h2.3l4.5 6.3 1.4 2 6 8.5h-2.3l-4.9-7Z" />
          </svg>
        </a>
        <a href="https://www.youtube.com/@qcucss8272" target="_blank">
          <svg class="inline-block w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M21.7 8c0-.7-.4-1.3-.8-2-.5-.5-1.2-.8-2-.8C16.2 5 12 5 12 5s-4.2 0-7 .2c-.7 0-1.4.3-2 .9-.3.6-.6 1.2-.7 2l-.2 3.1v1.5c0 1.1 0 2.2.2 3.3 0 .7.4 1.3.8 2 .6.5 1.4.8 2.2.8l6.7.2s4.2 0 7-.2c.7 0 1.4-.3 2-.9.3-.5.6-1.2.7-2l.2-3.1v-1.6c0-1 0-2.1-.2-3.2ZM10 14.6V9l5.4 2.8-5.4 2.8Z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
      <span id="year" class="block text-xs lg:text-sm text-gray-500 sm:text-center dark:text-gray-400 mt-5"></span>
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
          <img src="../../public/assets/img/qcu-map-preview.png" class="h-full object-cover col-span-2" alt="QCU map" />
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