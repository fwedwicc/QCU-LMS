document.getElementById('login-form').addEventListener('submit', function (event) {
  event.preventDefault(); // Prevent the default form submission

  const username = document.getElementById('user').value;
  const password = document.getElementById('pass').value;

  const errorMessage = document.getElementById('error-alert');

  errorMessage.classList.add('hidden');
  errorMessage.classList.remove('opacity-100');
  errorMessage.classList.add('opacity-0');

  function clearFields() {
    document.getElementById('user').value = '';
    document.getElementById('pass').value = '';
  }

  // Check the username and password and redirect accordingly
  if (username === 'student' && password === 'student123') {
    window.location.href = '../src/student/student-home.php';
    clearFields();
  } else if (username === 'instructor' && password === 'instructor123') {
    window.location.href = '../src/instructor/instructor-home.php';
    clearFields();
  } else if (username === 'admin' && password === 'admin123') {
    window.location.href = '../src/admin/admin-home.php';
    clearFields();
  } else {
    clearFields();
    errorMessage.classList.remove('hidden');
    errorMessage.classList.remove('opacity-0');
    errorMessage.classList.add('opacity-100');

    setTimeout(() => {
      errorMessage.classList.add('opacity-0');
      setTimeout(() => {
        errorMessage.classList.add('hidden');
        errorMessage.classList.remove('opacity-0');
      }, 500);
    }, 5000);
  }
});