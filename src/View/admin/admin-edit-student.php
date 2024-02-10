<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QCU-Learning Management System | Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../../public/assets/css/scrollbar.css">
  <link rel="icon" type="image/png" href="../../../public/assets/img/qcu-logo-lms.png" />
</head>
<!-- Admin side and navigation bar -->
<?php
include_once './admin.php';
?>

<body>
  <div class="p-4 sm:ml-64">
    <div class="p-12 dark:border-gray-700 mt-14">
      <div class="gap-4 mb-4">
        <!-- Header -->
        <div class="flex items-center justify-between pb-4 dark:border-gray-600">
          <h1 class="text-4xl font-bold text-gray-900 dark:text-white">
            Edit account
          </h1>
          <!-- Back button -->
          <a href="./admin-user-student.php" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
            </svg>
            <span class="sr-only">Back</span>
          </a>

        </div>
        <!-- Main form -->
        <form class="pt-4">
          <!-- Student number -->
          <div class="grid gap-6 mb-6 md:grid-cols-7">
            <div class="col-span-2">
              <label for="student-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student number</label>
              <input type="text" id="student-number" aria-label="disabled input" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="12-3456" disabled readonly>
            </div>
          </div>
          <!-- Personal data section -->
          <hr class="h-px my-4 bg-gray-600 border-0 dark:border-gray-600">
          <h3 class="text-2xl font-medium text-gray-900 dark:text-white mb-6">
            Personal
          </h3>
          <div class="grid gap-6 mb-6 md:grid-cols-7">
            <!-- First name -->
            <div class="col-span-2">
              <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
              <input type="text" id="first-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Juan" required>
            </div>
            <!-- Middle name -->
            <div class="col-span-2">
              <label for="middle-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle name</label>
              <input type="text" id="middle-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Dela">
            </div>
            <!-- Last name -->
            <div class="col-span-2">
              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
              <input type="text" id="last-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Dela Cruz" required>
            </div>
            <!-- Suffix -->
            <div class="col-span-1">
              <label for="suffix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suffix</label>
              <select id="suffix" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 rounded-lg text-sm px-5 p-2.5 w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 focus:ring-blue-500 dark:text-white dark:focus:border-blue-500">
                <option value="" selected>Select</option>
                <option value="Jr.">Jr.</option>
                <option value="Sr.">Sr.</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
                <option value="VI">VI</option>
              </select>
            </div>
            <!-- Birthdate -->
            <div class="col-span-2">
              <label for="birth-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of birth</label>
              <div class="relative max-w-sm">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                  </svg>
                </div>
                <input datepicker datepicker-autohide type="text" id="birth-date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" required>
              </div>
            </div>
          </div>
          <!-- Academic data section -->
          <hr class="h-px my-4 bg-gray-600 border-0 dark:border-gray-600">
          <h3 class="text-2xl font-medium text-gray-900 dark:text-white mb-6">
            Academic
          </h3>
          <div class="grid gap-6 mb-6 md:grid-cols-7">
            <!-- Program -->
            <div class="col-span-2">
              <label for="program" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program</label>
              <select id="program" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 rounded-lg text-sm w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 focus:ring-blue-500 dark:text-white dark:focus:border-blue-500" required>
                <option value="" selected disabled>Select</option>
                <option value="BSENT">BSENT</option>
                <option value="BSA">BSA</option>
                <option value="BSMA">BSMA</option>
                <option value="BSIE">BSIE</option>
                <option value="BSECE">BSECE</option>
                <option value="BSIT">BSIT</option>
                <option value="BSCS">BSCS</option>
                <option value="BSIS">BSIS</option>
                <option value="BSCE">BSCE</option>
              </select>
            </div>
            <!-- Year level -->
            <div class="col-span-2">
              <label for="year-level" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year level</label>
              <select id="year-level" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 rounded-lg text-sm w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 focus:ring-blue-500 dark:text-white dark:focus:border-blue-500" required>
                <option value="" selected disabled>Select</option>
                <option value="1st-year">1st year</option>
                <option value="2nd-year">2nd year</option>
                <option value="3rd-year">3rd year</option>
                <option value="4th-year">4th year</option>
                <option value="Irregular">Irregular</option>
              </select>
            </div>
            <!-- Classification -->
            <div class="col-span-2">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Classification</label>
              <div class="flex mt-4">
                <div class="flex items-center me-14">
                  <input id="regular" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cursor-pointer">
                  <label for="regular" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
                </div>
                <div class="flex items-center me-4">
                  <input id="irregular" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cursor-pointer">
                  <label for="irregular" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Irregular</label>
                </div>
              </div>
            </div>
            <!-- Section -->
            <div class="col-span-1">
              <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section</label>
              <input type="text" id="section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="SBIT-1A" required>
            </div>
          </div>
          <!-- Account data section -->
          <hr class="h-px my-4 bg-gray-600 border-0 dark:border-gray-600">
          <h3 class="text-2xl font-medium text-gray-900 dark:text-white mb-6">
            Account
          </h3>
          <div class="grid gap-6 mb-6 md:grid-cols-7">
            <!-- Email address -->
            <div class="col-span-2">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
              <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="juan.dela.cruz@gmail.com" required>
            </div>
          </div>
          <!-- Submit and cancel butones -->
          <div class="flex items-center pt-5 space-x-5 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
            <!-- Submit button -->
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            <!-- Cancel button -->
            <button type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
</body>

</html>