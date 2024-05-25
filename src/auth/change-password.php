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

<body>
  <div class="p-12 h-screen">
    <span class="inline-flex items-center fixed">
      <img src="../../assets/image/QCU-logo.png" alt="QCU Logo" class="h-9 w-auto mr-5">
      <h3 class="font-bold text-xl">QCU-LMS</h3>
    </span>
    <div class="flex-col flex items-center justify-center h-full">
      <div class="w-full max-w-sm p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
        <!-- Form -->
        <form class="space-y-3" action="" method="post">
          <h5 class="text-xl font-medium mb-3">New Password</h5>
          <p class="block text-sm font-normal pb-5">Please enter and confirm your new password.
          </p>
          <label for="user" class="block text-sm font-medium">New Password</label>
          <!-- New Password Input -->
          <input type="password" id="new_pass" name="new_pass" required class="input-field w-full" placeholder="Your password" required>
          <label for="user" class="block text-sm font-medium pt-4">Confirm New Password</label>
          <!-- Confirm New Password Input -->
          <input type="password" id="confirm_pass" name="confirm_pass" required class="input-field w-full" placeholder="Your password" required><br>
          <!-- Error Message for validation -->
          <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
          <!-- Submit Button -->
          <a href="../../index.php" type="submit" class="block btn-primary">Submit</a>
        </form>
      </div>
    </div>
  </div>

  <!-- Flowbite Script -->
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>