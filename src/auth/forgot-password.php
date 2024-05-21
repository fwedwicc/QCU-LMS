<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QCU-LMS</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="../../assets/image/QCU-logo.png" type="image/x-icon">
  <!-- Flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
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
        <form class="space-y-3" action="#">
          <h5 class="text-xl font-medium mb-3">Forgot Password</h5>
          <p class="block text-sm font-normal pb-5">Please enter your email address to receive an OTP
          </p>
          <!-- Email Address Input -->
          <input type="email" id="first-name" class="input-field w-full" placeholder="juan.delacruz@gmail.com" required>
          <!-- Error Message for validation -->
          <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
          <!-- Action Buttons -->
          <div class="flex gap-4 pt-8">
            <!-- Cancel -->
            <a href="../index.php" type="button" class="btn-secondary w-full">Cancel</a>
            <!-- Continue -->
            <button type="submit" class="btn-primary w-full">Continue</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Flowbite Script -->
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>