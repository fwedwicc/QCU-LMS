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
          <h5 class="text-xl font-medium mb-3">Verification</h5>
          <p class="block text-sm font-normal pb-5">We have sent an OTP to your email. Please enter the OTP below to proceed.
          </p>
          <!-- OTP Input -->
          <div class="flex pb-6 space-x-2 rtl:space-x-reverse">
            <div>
              <label for="code-1" class="sr-only">First code</label>
              <input type="text" maxlength="1" data-focus-input-init data-focus-input-next="code-2" id="code-1" class="w-full h-auto py-3 text-center input-field font-bold" required />
            </div>
            <div>
              <label for="code-2" class="sr-only">Second code</label>
              <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-1" data-focus-input-next="code-3" id="code-2" class="w-full h-auto py-3 text-center input-field font-bold" required />
            </div>
            <div>
              <label for="code-3" class="sr-only">Third code</label>
              <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-2" data-focus-input-next="code-4" id="code-3" class="w-full h-auto py-3 text-center input-field font-bold" required />
            </div>
            <div>
              <label for="code-4" class="sr-only">Fourth code</label>
              <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-3" data-focus-input-next="code-5" id="code-4" class="w-full h-auto py-3 text-center input-field font-bold" required />
            </div>
            <div>
              <label for="code-5" class="sr-only">Fifth code</label>
              <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-4" data-focus-input-next="code-6" id="code-5" class="w-full h-auto py-3 text-center input-field font-bold" required />
            </div>
            <div>
              <label for="code-6" class="sr-only">Sixth code</label>
              <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-5" id="code-6" class="w-full h-auto py-3 text-center input-field font-bold" required />
            </div>
          </div>
          <!-- Error Message for validation -->
          <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
          <!-- Submit Button -->
          <a href="./change-password.php" type="submit" class="btn-primary w-full">Submit</a>
          <!-- Resent OTP link -->
          <span class="block text-sm text-center font-medium text-deep-koamaru pt-1">Didn't receive OTP? <a href="" class="text-neon-blue hover:underline text-sm font-medium">Resend OTP</a></span>
        </form>
      </div>
    </div>
  </div>

  <!-- OTP Input Script -->
  <script src="./otp-verification.js"></script>
  <!-- Flowbite Script -->
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>