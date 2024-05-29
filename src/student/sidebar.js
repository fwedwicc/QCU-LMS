window.onload = function () {
  var filename = window.location.pathname.split("/").pop();

  function applyClasses(buttonId, iconId) {
    const button = document.getElementById(buttonId);
    const icon = document.getElementById(iconId);

    button.classList.add('bg-ghost-lavender', 'dark:bg-dark-ghost-lavender', 'text-neon-blue', 'dark:text-dark-neon-blue');
    icon.classList.add('text-neon-blue', 'dark:text-dark-neon-blue');
  }

  if (filename === 'student-dashboard.php') {
    applyClasses('dashboard-btn', 'dashboard-icon');
  } else if (filename === 'student-settings.php') {
    applyClasses('settings-btn', 'settings-icon');
  }
}
