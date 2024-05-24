window.onload = function() {
  var logoSidebar = document.getElementById('logo-sidebar');
  var dashboardText = document.getElementById('nav-text');
  var hrefLinks = document.querySelectorAll('#logo-sidebar a.justify-center');

  logoSidebar.addEventListener('mouseover', function() {
    // Change the width of the sidebar
    logoSidebar.classList.remove('w-20');
    logoSidebar.classList.add('w-64');

    // Hide the 'Dashboard' text
    dashboardText.classList.remove('hidden');

    // Remove 'justify-center' class from all href links
    hrefLinks.forEach(function(link) {
      link.classList.remove('justify-center');
    });
  });

  logoSidebar.addEventListener('mouseout', function() {
    // Change the width of the sidebar back to original
    logoSidebar.classList.remove('w-64');
    logoSidebar.classList.add('w-20');

    // Show the 'Dashboard' text
    // dashboardText.style.display = 'inline';
    dashboardText.classList.add('hidden');

    // Add 'justify-center' class back to all href links
    hrefLinks.forEach(function(link) {
      link.classList.add('justify-center');
    });
  });
}
