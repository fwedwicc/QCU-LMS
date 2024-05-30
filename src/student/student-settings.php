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
<!-- FIXME: Student Settings & Data -->

<body>
  <div class="p-4 sm:ml-64">
    <div class="pt-4 px-5 rounded-2xl mt-14">
      <h1 class="font-bold text-4xl">Settings</h1>
      <div class="flex flex-col gap-8 pt-8">
        <div class="mb-2">
          <ul class="tab-wrapper" id="default-tab" data-tabs-toggle="tab-content" role="tablist" data-tabs-inactive-classes="tab-btn-inactive" data-tabs-active-classes="tab-btn-active">
            <li class="me-2" role="presentation">
              <button class="tab-btn" id="account-profile-tab" data-tabs-target="#account-profile" type="button" role="tab" aria-controls="account-profile" aria-selected="false">Account Profile</button>
            </li>
            <li class="me-2" role="presentation">
              <button class="tab-btn" id="change-username-tab" data-tabs-target="#change-username" type="button" role="tab" aria-controls="change-username" aria-selected="false">Change Username</button>
            </li>
            <li class="me-2" role="presentation">
              <button class="tab-btn" id="change-password-tab" data-tabs-target="#change-password" type="button" role="tab" aria-controls="change-password" aria-selected="false">Change Password</button>
            </li>
            <li role="presentation">
              <button class="tab-btn" id="change-email-tab" data-tabs-target="#change-email" type="button" role="tab" aria-controls="change-email" aria-selected="false">Change Email Address</button>
            </li>
          </ul>
        </div>
        <div id="tab-content" class="pb-6">
          <!-- Account Profile Tab -->
          <div class="hidden space-y-5" id="account-profile" role="tabpanel" aria-labelledby="account-profile-tab">
            <!-- Student number -->
            <div class="primary-container">
              <div class="px-8 py-5 flex items-center gap-5">
                <div class="avatar-container w-24 h-24">
                  <span class="font-medium text-white text-3xl">JD</span>
                </div>
                <div class="space-y-2 text-center">
                  <span class="settings-number">22-2808</span>
                  <span class="settings-label text-sm">Student number</span>
                </div>
              </div>
            </div>
            <!-- Main Container -->
            <div class="grid gap-6 mb-6 grid-cols-3">
              <!-- Personal -->
              <div class="col-start-1 col-span-4">
                <div class="secondary-container">
                  <h5 class="settings-heading">Personal Information</h5>
                  <div class="grid grid-cols-5 pt-4">
                    <!-- First -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="settings-label">First name</span>
                      <span class="settings-data">Frederick</span>
                    </div>
                    <!-- Middle Name  -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="settings-label">Middle name</span>
                      <span class="settings-data">Capiral</span>
                    </div>
                    <!-- Last Name -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="settings-label">Last name</span>
                      <span class="settings-data">Moreno</span>
                    </div>
                    <!-- Suffix -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="settings-label">Suffix</span>
                      <span class="settings-data"></span>
                    </div>
                    <!-- Date of Birth -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="settings-label">Date of Birth</span>
                      <span class="settings-data">July 17, 2003</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Academic -->
              <div class="col-start-1 col-span-4">
                <div class="secondary-container">
                  <h5 class="settings-heading">Academic Information</h5>
                  <div class="grid grid-cols-5 pt-4">
                    <!-- Program -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="settings-label">Program</span>
                      <span class="settings-data">BSIT</span>
                    </div>
                    <!-- Year Level  -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="settings-label">Year Level</span>
                      <span class="settings-data">Irregular</span>
                    </div>
                    <!-- Classification -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="settings-label">Classification</span>
                      <span class="settings-data">Irregular</span>
                    </div>
                    <!-- Section -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="settings-label">Section</span>
                      <span class="settings-data">SBIT-2B</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Account -->
              <div class="col-start-1 col-span-4">
                <div class="secondary-container">
                  <h5 class="settings-heading">Account Information</h5>
                  <div class="grid grid-cols-7 pt-4">
                    <!-- Email Address -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="settings-label">Email Address</span>
                      <span class="settings-data">moreno.frederick.capiral@gmail.com</span>
                    </div>
                    <!-- Username  -->
                    <div class="space-y-2.5 col-start-3">
                      <span class="settings-label">Username</span>
                      <span class="settings-data">20030717222808</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- // Account Profile -->
          <!-- Change Username Tab -->
          <div class="hidden p-4" id="change-username" role="tabpanel" aria-labelledby="change-username-tab">
            <div class="w-1/2 m-auto">
              <!-- Change Username -->
              <div class="flex flex-col justify-center items-center">
                <div class="w-full max-w-sm p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
                  <form class="space-y-3" action="#">
                    <h5 class="text-xl font-medium text-deep-koamaru mb-3">Change Username</h5>
                    <p class="block text-sm font-normal text-deep-koamaru pb-5">To ensure the security of your account, we require your current password before you can change your username.</p>
                    <label for="user" class="block text-sm font-medium text-deep-koamaru">Current Password</label>
                    <!-- Current Password Input -->
                    <input type="text" id="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Your current password" required>
                    <label for="user" class="block text-sm font-medium text-deep-koamaru pt-4">New Username</label>
                    <!-- New Username -->
                    <input type="text" id="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="New username" required><br>
                    <!-- Error Message for validation -->
                    <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
                    <!-- Submit Button -->
                    <button type="submit" class="w-full text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Submit</button>
                  </form>
                </div>
              </div>
              <!-- // Change Username -->
            </div>
          </div>
          <!-- // Change Username Tab -->
          <!-- Change Password Tab -->
          <div class="hidden p-4" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
            <div class="w-1/2 m-auto">
              <!-- Change Password -->
              <div class="flex flex-col justify-center items-center">
                <div class="w-full max-w-sm p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
                  <form class="space-y-3" action="#">
                    <h5 class="text-xl font-medium text-deep-koamaru mb-3">Change Password</h5>
                    <p class="block text-sm font-normal text-deep-koamaru pb-5">To ensure the security of your account, we require your current password before you can change your password.</p>
                    <label for="user" class="block text-sm font-medium text-deep-koamaru">Current Password</label>
                    <!-- Current Password Input -->
                    <input type="text" id="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Your current password" required>
                    <label for="user" class="block text-sm font-medium text-deep-koamaru pt-4">New Password</label>
                    <!-- New Password -->
                    <input type="text" id="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="New Password" required><br>
                    <!-- Error Message for validation -->
                    <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
                    <!-- Submit Button -->
                    <button type="submit" class="w-full text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Submit</button>
                  </form>
                </div>
              </div>
              <!-- // Change Password -->
            </div>
          </div>
          <!-- Change Email Address Tab -->
          <div class="hidden p-4" id="change-email" role="tabpanel" aria-labelledby="change-email-tab">
            <!-- Change Email Address -->
            <div class="flex flex-col justify-center items-center">
              <div class="w-full max-w-sm p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
                <form class="space-y-3" action="#">
                  <h5 class="text-xl font-medium text-deep-koamaru mb-3">Change Email Address</h5>
                  <p class="block text-sm font-normal text-deep-koamaru pb-5">To ensure the security of your account, we require your current password before you can change your email address.</p>
                  <label for="user" class="block text-sm font-medium text-deep-koamaru">Current Password</label>
                  <!-- Current Password Input -->
                  <input type="text" id="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Your current password" required>
                  <label for="user" class="block text-sm font-medium text-deep-koamaru pt-4">New Email Address</label>
                  <!-- New Email Address -->
                  <input type="text" id="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="New email address" required><br>
                  <!-- Error Message for validation -->
                  <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
                  <!-- Submit Button -->
                  <button type="submit" class="w-full text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Submit</button>
                </form>
              </div>
            </div>
            <!-- // Change Email Address -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Flowbite Script -->
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>