<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QCU-LMS</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="../../assets/image/QCU-logo.png" type="image/x-icon">
  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="../output.css">
</head>
<!-- Student side/navigation bar -->
<?php
include_once './side-nav-bar.php';
?>
<!-- FIXME: Account Profile Data -->

<body>
  <div class="p-4 sm:ml-64 sm:mr-[21rem]">
    <div class="pt-4 pl-4 rounded-2xl border-purple-blue mt-14">
      <h1 class="font-bold text-4xl pb-6 text-corn-flower-blue">Subject Title</h1>
      <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-purple-100 text-indigo-600">
        <!-- Week 2 & 3 accordion heading -->
        <h2 id="accordion-color-heading-2">
          <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-deep-koamaru border border-b-0 border-purple-blue focus:ring-4 focus:ring-lavender-blue hover:bg-ghost-lavender transition duration-300 ease-in-out gap-3" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
            <span>Week No. - Week Title</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
            </svg>
          </button>
        </h2>
        <!-- Week 2 & 3 accordion content -->
        <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
          <div class="p-5 border border-b-0 border-purple-blue">
            <span class="mb-2 text-deep-koamaru">Learning Outcomes: Sample learning outcome.</span>
            <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 mt-4">
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Topics</h3>
                <ul class="list-disc pl-5 text-deep-koamaru">
                  <li>Topic 1</li>
                  <li>Topic 2</li>
                  <li>Topic 3</li>
                  <li>Topic 4</li>
                </ul>
              </div>
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Learning Materials</h3>
                <ul class="list-none pt-4 text-deep-koamaru space-y-3">
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-royal-blue border border-royal-blue hover:bg-hawkes-blue focus:ring-4 focus:outline-none focus:ring-tropical-blue rounded-lg bg-solitude transition ease-in-out duration-300">
                      <svg class="w-3 h-3 me-2 text-royal-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                      </svg>
                      Week No. - Learning Materials
                    </a>
                  </li>
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-royal-blue border border-royal-blue hover:bg-hawkes-blue focus:ring-4 focus:outline-none focus:ring-tropical-blue rounded-lg bg-solitude transition ease-in-out duration-300">
                      <svg class="w-3 h-3 me-2 text-royal-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                      </svg>
                      Week No. - Additional Materials
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Assessment and Tasks</h3>
                <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                  <li>
                    <a href="./student-activity.php" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-camarone border border-camarone hover:bg-granny-apple focus:ring-4 focus:outline-none focus:ring-chinook rounded-lg transition duration-300 ease-in-out bg-off-green">
                      <svg class="w-3 h-3 me-2 text-camarone" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                      </svg>
                      Laboratory Activity 1
                    </a>
                  </li>
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-camarone border border-camarone hover:bg-granny-apple focus:ring-4 focus:outline-none focus:ring-chinook rounded-lg transition duration-300 ease-in-out bg-off-green">
                      <svg class="w-3 h-3 me-2 text-camarone" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
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

      </div>
    </div>
  </div>

  <!-- Right Sidebar -->
  <aside id="logo-sidebar" class="fixed top-0 right-0 z-40 w-[21rem] h-screen pt-20 transition-transform -translate-x-full bg-ghost-white sm:translate-x-0 hidden sm:block" aria-label="Sidebar">
    <div class="h-full pt-2 pb-7 gap-5 pl-1 pr-8 overflow-y-auto bg-ghost-white grid grid-rows-2">
      <!-- Announcement card -->
      <div class="max-w-sm p-8 bg-white rounded-2xl drop-shadows row-span-1 overflow-y-auto space-y-4 flex flex-col justify-between">
        <div>
          <h5 class="mb-4 text-2xl font-bold tracking-tight text-corn-flower-blue">Announcements</h5>
          <p class="font-normal text-deep-koamaru text-base">Dear Students, reminder about our upcoming Midterm Exam. All the topics covered in the lectures and assignments till date are included in the exam.Review thoroughly, understand concepts.</p>
        </div>
        <span class="text-deep-koamaru">Date Posted:
          <span class="italic font-medium text-deep-koamaru">
            April 18, 2024
          </span>
        </span>
      </div>
      <?php
      include './todo-card.php';
      ?>
    </div>
  </aside>
  <!-- Flowbite Script -->
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>