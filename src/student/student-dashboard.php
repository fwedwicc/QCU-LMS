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
</head>
<!-- Student side/navigation bar -->
<?php
include_once './side-nav-bar.php';
?>

<body>
  <div class="p-4 sm:ml-64 sm:mr-[22rem]">
    <div class="pt-4 pl-4 mt-[4rem]">
      <!-- TODO: Buttons for overall view for general announcement -->
      <!-- General Announcement -->
      <div class="announcement-container">
        <span class="announcement-header">
          <svg class="w-6 h-6 text-deep-koamaru dark:text-dark-corn-koamaru" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 9H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h6m0-6v6m0-6 5.419-3.87A1 1 0 0 1 18 5.942v12.114a1 1 0 0 1-1.581.814L11 15m7 0a3 3 0 0 0 0-6M6 15h3v5H6v-5Z" />
          </svg>
          <h5 class="text-xl font-medium">General Announcements</h5>
        </span>
        <div class="px-8 pt-1 pb-7">
          <p class="font-normal text-deep-koamaru">The university's IT and Computer Science departments are hosting the annual Hackathon virtually this year on the campus. The event, scheduled for July 20-21, 2024, invites students to form teams and register via the LMS. The theme is “Sustainable Solutions for Global Challenges,” encouraging innovative and impactful coding solutions. Prizes, including cash rewards and internships, will be awarded to the top three teams. The university eagerly anticipates students' active participation in this cause-driven coding event.
          </p>
          <br>
          <span class="text-deep-koamaru dark:text-dark-corn-koamaru">Date posted:
            <span class="italic font-medium">
              May 16, 2024
            </span>
          </span>
        </div>
      </div>
      <!-- // General Announcement -->
      <!--  Enrolled Course -->
      <h1 class="font-bold text-4xl pb-6 text-corn-flower-blue mt-8 mb-2">Enrolled Subjects</h1>
      <div class="grid grid-cols-2 gap-5 mb-6" id="course-cards">
        <!-- Rendered Courses Cards Content -->
      </div>
    </div>
  </div>
  <!-- Right Sidebar -->
  <aside id="sidebar" class="right-sidebar" aria-label="Sidebar">
    <div class="right-sidebar-cont">
      <!-- Calendar card -->
      <div class="container">
        <div id='calendar'></div>
      </div>
      <!-- Todo card -->
      <?php
      include './todo-card.php';
      ?>
    </div>
  </aside>
  <script>
    // For Jsuites Calendar
    jSuites.calendar(document.getElementById('calendar'), {
      format: 'YYYY-MM-DD',
      onupdate: function(a, b) {
        document.getElementById('calendar-value').innerText = b;
      }
    });
  </script>
  <!-- Subject Card Content Script -->
  <script src="./subject-card.js"></script>
  <!-- Jsuites CDN -->
  <script src="https://jsuites.net/v4/jsuites.js"></script>
  <!-- Flowbite Script -->
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>