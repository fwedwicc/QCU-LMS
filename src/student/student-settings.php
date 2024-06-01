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
            <!-- Rendered content from settings.js -->
          </div>
          <!-- Change Password Tab -->
          <div class="hidden p-4" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
            <!-- Rendered content from settings.js -->
          </div>
          <!-- Change Email Address Tab -->
          <div class="hidden p-4" id="change-email" role="tabpanel" aria-labelledby="change-email-tab">
            <!-- Rendered content from settings.js -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Script for Change Username, Password, and Email -->
  <script src="./settings.js"></script>
  <!-- Flowbite Script -->
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>