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
  <!-- Jsuites Link -->
  <script src="https://jsuites.net/v4/jsuites.js"></script>
  <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
  <style>
    .jcalendar-selected {
      background-color: #4F46E5 !important;
      border-radius: 0.5rem;
      color: #ffffff;
    }

    .jcalendar-weekday {
      color: #4F46E5;
      font-weight: bold;
    }

    .jcalendar-header {
      color: #4F46E5;
    }

    .jcalendar-content {
      font-size: 14px;
      font-weight: 400;
    }

    .jcalendar-table {
      padding: 0;
      height: 0px;
    }
  </style>
</head>
<!-- Student side/navigation bar -->
<?php
include_once './side-nav-bar.php';
?>

<body>
  <div class="p-4 sm:ml-64 sm:mr-[22rem]">
    <div class="pt-4 pl-4 mt-[4rem]">
      <!-- General Announcement Container -->
      <div class="block rounded-2xl border border-purple-blue overflow-y-auto space-y-4">
        <span class="border-purple-blue border-b border-solid block bg-ghost-lavender flex items-center py-4 pl-7 gap-2.5">
          <svg class="w-6 h-6 text-corn-flower-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M18.458 3.11A1 1 0 0 1 19 4v16a1 1 0 0 1-1.581.814L12 16.944V7.056l5.419-3.87a1 1 0 0 1 1.039-.076ZM22 12c0 1.48-.804 2.773-2 3.465v-6.93c1.196.692 2 1.984 2 3.465ZM10 8H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6V8Zm0 9H5v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3Z" clip-rule="evenodd" />
          </svg>
          <h5 class="text-xl font-medium text-corn-flower-blue">General Announcements</h5>
        </span>
        <div class="px-8 pt-1 pb-7">
          <p class="font-normal text-deep-koamaru">The university's IT and Computer Science departments are hosting the annual Hackathon virtually this year on the campus. The event, scheduled for July 20-21, 2024, invites students to form teams and register via the LMS. The theme is “Sustainable Solutions for Global Challenges,” encouraging innovative and impactful coding solutions. Prizes, including cash rewards and internships, will be awarded to the top three teams. The university eagerly anticipates students' active participation in this cause-driven coding event.
          </p>
          <br>
          <span class="text-deep-koamaru">Date posted:
            <span class="italic font-medium text-deep-koamaru">
              May 16, 2024
            </span>
          </span>
        </div>
      </div>
      <!--  Enrolled Course -->
      <h1 class="font-bold text-4xl pb-6 text-corn-flower-blue mt-8 mb-2">Enrolled Courses</h1>
      <div class="grid grid-cols-2 gap-5 mb-6" id='draggable-elements'>
        <!-- Course Card -->
        <a href="./student-course-overview.php" class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue">
          <div class="relative">
            <img src="../assets/images/course-card-illustration.png" class="rounded-xl w-full" alt="Course Card Illustration" draggable="false">
            <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white">
              SE101</h5>
          </div>
          <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">Software Engineering</h5>
          <span class="block text-deep-koamaru">Mary Anne Manandeg</span>
          <span class="block text-deep-koamaru">SBIT-2B</span>
          <!-- Semester Indicator -->
          <span class="mt-4 inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
            2nd Semester
          </span>
        </a>
        <!-- Course Card -->
        <a href="#" class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue">
          <div class="relative">
            <img src="../assets/images/course-card-illustration.png" class="rounded-xl w-full" alt="Course Card Illustration" draggable="false">
            <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white">
              IPT101</h5>
          </div>
          <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">Intergative Programming
            Technologies 1</h5>
          <span class="block text-deep-koamaru">Chrisitan Escoto</span>
          <span class="block text-deep-koamaru">SBIT-2B</span>
          <!-- Semester Indicator -->
          <span class="mt-4 inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
            2nd Semester
          </span>
        </a>
        <!-- Course Card -->
        <a href="#" class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue">
          <div class="relative">
            <img src="../assets/images/course-card-illustration.png" class="rounded-xl w-full" alt="Course Card Illustration" draggable="false">
            <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white">
              IM101</h5>
          </div>
          <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">Advanced Database</h5>
          <span class="block text-deep-koamaru">Zharina Pascual</span>
          <span class="block text-deep-koamaru">SBIT-2B</span>
          <!-- Semester Indicator -->
          <span class="mt-4 inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
            2nd Semester
          </span>
        </a>
        <!-- Course Card -->
        <a href="#" class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue">
          <div class="relative">
            <img src="../assets/images/course-card-illustration.png" class="rounded-xl w-full" alt="Course Card Illustration" draggable="false">
            <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white">
              MS101</h5>
          </div>
          <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">Quantitative Methods</h5>
          <span class="block text-deep-koamaru">Luisito Soriano</span>
          <span class="block text-deep-koamaru">SBIT-3G</span>
          <!-- Semester Indicator -->
          <span class="mt-4 inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
            2nd Semester
          </span>
        </a>
      </div>
    </div>
  </div>
  <!-- Right Sidebar -->
  <aside id="logo-sidebar" class="fixed top-0 right-0 z-30 w-[22rem] h-screen pt-24 transition-transform -translate-x-full bg-ghost-white dark:bg-dark-ghost sm:translate-x-0 hidden sm:block" aria-label="Sidebar">
    <div class="h-full pb-7 gap-5 pl-1 pr-8 overflow-y-auto bg-ghost-white dark:bg-dark-ghost grid grid-rows-2">
      <!-- Calendar card -->
      <div class="block max-w-sm px-5 pt-9 bg-white dark:bg-primary-dark rounded-2xl drop-shadows dark:shadow-sm row-span-1 md:overflow-y-hidden">
        <div id='calendar'></div>
      </div>
      <!-- Todo card -->
      <?php
      // include 'todo-card.php';
      ?>
    </div>
  </aside>
  <script>
    jSuites.sorting(document.getElementById('draggable-elements'), {
      ondrop: function() {
        console.log(arguments);
      }
    });

    // Create a new calendar
    jSuites.calendar(document.getElementById('calendar'), {
      format: 'YYYY-MM-DD',
      onupdate: function(a, b) {
        document.getElementById('calendar-value').innerText = b;
      }
    });
  </script>
  <!-- Jsuites CDN -->
  <script src="https://jsuites.net/v4/jsuites.js"></script>
  <!-- Flowbite Script -->
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>