window.onload = function () {
  var filename = window.location.pathname.split("/").pop();

  if (filename == 'student-dashboard.php') {
    const dashboardBtn = document.getElementById('dashboard-btn');
    const dashboardIcon = document.getElementById('dashboard-icon');
    
    dashboardBtn.classList.add('bg-ghost-lavender', 'text-neon-blue');
    dashboardIcon.classList.add('text-neon-blue');
  }

  // if (filename == 'test-page.php') {
  //   const dashboardBtn = document.getElementById('course-btn');
    
  //   dashboardBtn.classList.add('bg-ghost-lavender', 'text-neon-blue');
  // }
}