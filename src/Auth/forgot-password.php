<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QCU-Learning Management System | Forgot Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../public/assets/css/scrollbar.css">
  <link rel="icon" type="image/png" href="../../public/assets/img/qcu-logo-lms.png" />
</head>

<body class="bg-gray-900">
  <div class="p-12 h-screen">
    <span class="inline-flex">
      <img src="../../public/assets/img/qcu-logo-lms.png" alt="Quezon City University Logo" class="h-9 w-auto mr-6">
      <h3 class="font-medium text-gray-900 dark:text-white text-2xl">QCU-LMS</h3>
    </span>


    <div class="flex-col flex items-center justify-center h-full">
      <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <!-- Form -->
        <form class="space-y-3" action="#">
          <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">Forgot Password</h5>
          <p class="block text-sm font-normal text-gray-900 dark:text-white pb-5">Please enter your email address to receive an OTP</p>
          <!-- Email Address Input -->
          <input type="text" id="first-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="juan.delacruz@gmail.com" required>


          <!-- Error Message for validation -->
          <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
          <!-- Action Buttons -->
          <div class="flex gap-4 pt-8">
            <!-- Cancel -->
            <button type="button" class="w-full text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancel</button>
            <!-- Continue -->
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>