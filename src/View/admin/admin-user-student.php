<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QCU-Learning Management System | Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>
<?php
include_once 'admin.php';
?>

<body>
  <div class="p-4 sm:ml-64">
    <div class="p-12 dark:border-gray-700 mt-14">
      <div class="gap-4 mb-4">
      <h1 class="font-bold text-gray-900 dark:text-white text-4xl mb-7">Students List</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
              <tr class="bg-white dark:bg-gray-800">
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
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>