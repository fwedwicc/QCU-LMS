<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QCU-Learning Management System | Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../../public/assets/css/scrollbar.css">
  <link rel="icon" type="image/png" href="../../../public/assets/img/qcu-logo-lms.png"/>
</head>
<!-- Admin side and navigation bar -->
<?php
include_once './admin.php';
?>

<body>
  <div class="p-4 sm:ml-64">
    <div class="p-12 dark:border-gray-700 mt-14">
      <div class="gap-4 mb-4">
        <h1 class="font-bold text-gray-900 dark:text-white text-4xl mb-7">Students List</h1>

        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
          <!-- Register new account -->
          <button type="button" data-modal-target="register-modal" data-modal-toggle="register-modal" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M8 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H8Zm2 0V2h7a2 2 0 0 1 2 2v.1a5 5 0 0 0-4.7 1.4l-6.7 6.6a3 3 0 0 0-.8 1.6l-.7 3.7a3 3 0 0 0 3.5 3.5l3.7-.7a3 3 0 0 0 1.5-.9l4.2-4.2V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M17.4 8a1 1 0 0 1 1.2.3 1 1 0 0 1 0 1.6l-.3.3-1.6-1.5.4-.4.3-.2Zm-2.1 2.1-4.6 4.7-.4 1.9 1.9-.4 4.6-4.7-1.5-1.5ZM17.9 6a3 3 0 0 0-2.2 1L9 13.5a1 1 0 0 0-.2.5L8 17.8a1 1 0 0 0 1.2 1.1l3.7-.7c.2 0 .4-.1.5-.3l6.6-6.6A3 3 0 0 0 18 6Z" clip-rule="evenodd" />
            </svg>
            Register
          </button>
          <!-- Main modal -->
          <div id="register-modal" data-modal-backdrop="static" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-4xl max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h1 class="text-4xl font-bold text-gray-900 dark:text-white">
                    Create account
                  </h1>
                  <!-- Close modal -->
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="register-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                </div>
                <!-- Modal body -->
                <form class="p-6">
                  <!-- Student number -->
                  <div class="grid gap-6 mb-6 md:grid-cols-7">
                    <div class="col-span-2">
                      <label for="student-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student number</label>
                      <input type="text" id="student-number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" pattern="[0-9]{2}-[0-9]{4}" placeholder="12-3456" required>
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
                      <select id="suffix" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 rounded-lg text-sm px-5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 focus:ring-blue-500 dark:text-white dark:focus:border-blue-500">
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
                    <!-- Birth date -->
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
                        <div class="flex items-center me-10">
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
                    <!-- Username -->
                    <div class="col-span-2">
                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                      <input type="text" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Juan123" required>
                    </div>
                    <!-- Temporary password -->
                    <div class="col-span-2">
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temporary password</label>
                      <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
                    </div>
                  </div>
                </form>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                  <!-- Register button -->
                  <button data-modal-hide="register-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>
                  <!-- Cancel button -->
                  <button data-modal-hide="register-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Search and filter bar -->
          <div class="flex">
            <!-- <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your</label> -->
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All programs <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
              </svg>
            </button>
            <!-- programs dropdown - tabi ng search bar -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">BSENT</button>
                </li>
                <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">BSA</button>
                </li>
                <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">BSMA</button>
                </li>
                <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">BSIE</button>
                </li>
                <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">BSECE</button>
                </li>
                <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">BSIT</button>
                </li>
                <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">BSCS</button>
                </li>
                <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">BSIS</button>
                </li>
                <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">BSCE</button>
                </li>
              </ul>
            </div>
            <div class="relative w-full">
              <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search..." required>
              <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
              </button>
            </div>
          </div>
        </div>
        <!-- Main table of students list -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <div class="max-h-[410px] overflow-y-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    Student name
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Student number
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Program
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Classification
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Section
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Frederick C. Moreno
                  </th>
                  <td class="px-6 py-4">
                    22-2808
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="flex items-center px-6 py-4">
                    <a href="./admin-edit-student.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Archive</a>
                  </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Lian V. Torres
                  </th>
                  <td class="px-6 py-4">
                    22-2806
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Archive</a>
                  </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Reanna M. Carreon
                  </th>
                  <td class="px-6 py-4">
                    22-2879
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Archive</a>
                  </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Frederick C. Moreno
                  </th>
                  <td class="px-6 py-4">
                    22-2808
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Archive</a>
                  </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Lian V. Torres
                  </th>
                  <td class="px-6 py-4">
                    22-2806
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Archive</a>
                  </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Reanna M. Carreon
                  </th>
                  <td class="px-6 py-4">
                    22-2879
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Archive</a>
                  </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Frederick C. Moreno
                  </th>
                  <td class="px-6 py-4">
                    22-2808
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Archive</a>
                  </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Frederick C. Moreno
                  </th>
                  <td class="px-6 py-4">
                    22-2808
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Archive</a>
                  </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Frederick C. Moreno
                  </th>
                  <td class="px-6 py-4">
                    22-2808
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Archive</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
</body>

</html>