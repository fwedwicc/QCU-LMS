document.addEventListener('DOMContentLoaded', () => {
  fetch('../data/notification.json')
    .then(response => response.json())
    .then(notifications => {
      const container = document.getElementById('notification-container');

      // Slice method to get the first 4 notifications
      notifications.slice(0, 4).forEach(notification => {
        const a = document.createElement('a');
        a.href = notification.link;
        a.className = 'notif-content';

        a.innerHTML = `
          <div class="flex-shrink-0">
            <div class="avatar-container">
              <span class="font-medium text-white">${notification.initials}</span>
            </div>
            <div class="notif-indicator">
              <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
              </svg>
            </div>
          </div>
          <div class="w-full ps-3">
            <div class="text-deep-koamaru dark:text-dark-corn-koamaru text-sm mb-1.5">New task from
              <span class="font-bold">${notification.name}</span>
              : "${notification.task}"
            </div>
            <div class="text-xs text-neon-blue dark:text-dark-neon-blue">${notification.time}</div>
          </div>
        `;

        container.appendChild(a);
      });
    })
    .catch(error => console.error('Error fetching notifications:', error));
});
