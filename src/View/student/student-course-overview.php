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
include_once './student.php';
?>

<body>
  <div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
      <div class="gap-4 mb-4">
        <div class="grid gap-6 md:grid-cols-4 sm:grid-cols-1">

          <!-- Main content-->
          <div class="md:col-span-3">
            <h1 class="font-bold text-gray-900 dark:text-white text-4xl mb-8">Course Overview</h1>
            <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
              <!-- Week 1 accordion heading -->
              <h2 id="accordion-color-heading-1">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                  <span>Week 1 - Course Orientation</span>
                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <!-- Week 1 accordion content -->
              <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                  <span class="mb-2 text-gray-500 dark:text-gray-400">Learning Outcomes: Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo rerum vero animi quisquam eaque commodi expedita possimus labore veniam. Placeat earum eum veritatis. Esse perferendis tempora porro sequi vel.</span>
                  <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 mt-4">
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Topics</h3>
                      <ul class="list-disc pl-5 pt-4 text-gray-500 dark:text-gray-400">
                        <li>Mission</li>
                        <li>Vission</li>
                        <li>Course Syllabus</li>
                        <li>Grading System</li>
                        <li>Class Policies</li>
                        <li>Course Requirements</li>
                      </ul>
                    </div>
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Learning Materials</h3>
                      <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 bg-blue-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                            </svg>
                            Week 1 - PowerPoint Presentation
                          </a>
                        </li>
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 bg-blue-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                            </svg>
                            Week 1 - Additional PDF Materials
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Assessment and Tasks</h3>
                      <ul class="list-disc pl-5 pt-4 text-gray-500 dark:text-gray-400">
                        <li>Oral Recitation/Selected Responses</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Week 2 & 3 accordion heading -->
              <h2 id="accordion-color-heading-2">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                  <span>Week 2 & 3 - Web Basics Terminologies & Hypertext Markup Language</span>
                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <!-- Week 2 & 3 accordion content -->
              <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                  <span class="mb-2 text-gray-500 dark:text-gray-400">Learning Outcomes: Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo rerum vero animi quisquam eaque commodi expedita possimus labore veniam. Placeat earum eum veritatis. Esse perferendis tempora porro sequi vel.</span>
                  <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 mt-4">
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Topics</h3>
                      <ul class="list-disc pl-5 pt-4 text-gray-500 dark:text-gray-400">
                        <li>Whati s WWW, Web Server, Website, Web-browser</li>
                        <li>Static vs Dynamic Webpage</li>
                        <li>Types of Website</li>
                        <li>Principles of good web design</li>
                        <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">
                        <li>Basics</li>
                        <li>Formatting</li>
                        <li>List, Links and Graphical Elements</li>
                        <li>Tables</li>
                        <li>Frames</li>
                        <li>Forms</li>
                        <li>Special Elements and Design Consideration</li>
                      </ul>
                      </ul>
                    </div>
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Learning Materials</h3>
                      <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 bg-blue-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                            </svg>
                            Week 2 & 3 - PowerPoint Presentation
                          </a>
                        </li>
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 bg-blue-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                            </svg>
                            Week 2 & 3 - Additional PDF Materials
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Assessment and Tasks</h3>
                      <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800 bg-green-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                            </svg>
                            Laboratory Activity 1
                          </a>
                        </li>
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800 bg-green-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                            </svg>
                            Assignment 1
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Week 4 accordion heading -->
              <h2 id="accordion-color-heading-3">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                  <span>Week 4 - Cascading Style Sheet</span>
                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <!-- Week 4 accordion content -->
              <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                  <span class="mb-2 text-gray-500 dark:text-gray-400">Learning Outcomes: Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo rerum vero animi quisquam eaque commodi expedita possimus labore veniam. Placeat earum eum veritatis. Esse perferendis tempora porro sequi vel.</span>
                  <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 mt-4">
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Topics</h3>
                      <ul class="list-disc pl-5 pt-4 text-gray-500 dark:text-gray-400">
                        <li>Intorduction to CSS</li>
                        <li>CSS Properties</li>
                        <li>CSS Concepts</li>
                        <li>XML</li>
                      </ul>
                      </ul>
                    </div>
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Learning Materials</h3>
                      <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 bg-blue-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                            </svg>
                            Week 4 - PowerPoint Presentation
                          </a>
                        </li>
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 bg-blue-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                            </svg>
                            Week 4 - Additional PDF Materials
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Assessment and Tasks</h3>
                      <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800 bg-green-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                            </svg>
                            Laboratory Activity 2
                          </a>
                        </li>
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800 bg-green-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                            </svg>
                            Assignment 2
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Week 5 & 6 accordion heading -->
              <h2 id="accordion-color-heading-4">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-4" aria-expanded="false" aria-controls="accordion-color-body-4">
                  <span>Week 5 & 6 - Intorduction to JavaScript</span>
                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <!-- Week 5 & 6 accordion content -->
              <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                  <span class="mb-2 text-gray-500 dark:text-gray-400">Learning Outcomes: Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo rerum vero animi quisquam eaque commodi expedita possimus labore veniam. Placeat earum eum veritatis. Esse perferendis tempora porro sequi vel.</span>
                  <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 mt-4">
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Topics</h3>
                      <ul class="list-disc pl-5 pt-4 text-gray-500 dark:text-gray-400">
                        <li>Intorduction to JavaScript</li>
                        <li>Functions and Objects</li>
                        <li>JavaScript Expressions</li>
                        <li>Javascript Event Handler</li>
                        <li>Javascript in Web Browsers</li>
                      </ul>
                      </ul>
                    </div>
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Learning Materials</h3>
                      <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 bg-blue-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                            </svg>
                            Week 5 & 6 - PowerPoint Presentation
                          </a>
                        </li>
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 bg-blue-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                            </svg>
                            Week 5 & 6 - Additional PDF Materials
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Assessment and Tasks</h3>
                      <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800 bg-green-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                            </svg>
                            Laboratory Activity 3
                          </a>
                        </li>
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800 bg-green-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                            </svg>
                            Quiz 1
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Week 7 accordion heading -->
              <h2 id="accordion-color-heading-5">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
                  <span>Week 7 - Hypertext Preprocessor</span>
                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <!-- Week 7 accordion content -->
              <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                  <span class="mb-2 text-gray-500 dark:text-gray-400">Learning Outcomes: Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo rerum vero animi quisquam eaque commodi expedita possimus labore veniam. Placeat earum eum veritatis. Esse perferendis tempora porro sequi vel.</span>
                  <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 mt-4">
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Topics</h3>
                      <ul class="list-disc pl-5 pt-4 text-gray-500 dark:text-gray-400">
                        <li>Intorduction to PHP</li>
                        <li>PHP Form</li>
                        <li>Handling</li>
                        <li>Validation</li>
                        <li>Cookies and Session</li>
                      </ul>
                      </ul>
                    </div>
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Learning Materials</h3>
                      <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 bg-blue-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                            </svg>
                            Week 7 - PowerPoint Presentation
                          </a>
                        </li>
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 bg-blue-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                            </svg>
                            Week 7 - Additional PDF Materials
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-span-1">
                      <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-400">Assessment and Tasks</h3>
                      <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800 bg-green-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                            </svg>
                            Laboratory Activity 4
                          </a>
                        </li>
                        <li>
                          <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800 bg-green-700 bg-opacity-20">
                            <svg class="w-3 h-3 me-2 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                            </svg>
                            Assignment 3
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- right side -->
          <div class="md:col-span-1 w-auto space-y-6 sticky top-0">
            <a href="#" class="inline-block w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Welcome, <span>Juan!</span></h5>
              <p class="font-normal text-gray-700 dark:text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas eos quis ab adipisci culpa animi, molestias iusto sed.</p>
            </a>
            <!-- <div inline-datepicker data-date="02/25/2022" class="w-1/2 h-auto"></div> -->
            <a href="#" class="inline-block w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 max-h-auto">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">To-do</h5>
              <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
</body>

</html>