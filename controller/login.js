document.getElementById('login-form').addEventListener('submit', function (event) {
  event.preventDefault(); // Prevent the default form submission

  const username = document.getElementById('user').value;
  const password = document.getElementById('pass').value;

  // Get the error message element
  const errorMessage = document.getElementById('error-alert');

  // Hide the error message initially
  errorMessage.classList.add('hidden');

  // Check the username and password and redirect accordingly
  if (username === 'student' && password === 'student123') {
    window.location.href = '../student/student-home.php';
  } else if (username === 'instructor' && password === 'instructor123') {
    window.location.href = '../instructor/instructor-home.php';
  } else if (username === 'admin' && password === 'admin123') {
    window.location.href = '../admin/admin-home.php';
  } else {
    // Show the error message
    errorMessage.classList.remove('hidden');
    errorMessage.classList.add('opacity-100');

    // Hide the error message after 5 seconds
    setTimeout(() => {
      errorMessage.classList.add('opacity-0');
      setTimeout(() => {
        errorMessage.classList.add('hidden');
        errorMessage.classList.remove('opacity-0');
      }, 500); // Match this to the transition duration
    }, 5000);
  }
});