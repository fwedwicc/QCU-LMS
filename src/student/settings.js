const formsData = [
  {
    id: "change-username",
    title: "Change Username",
    newLabel: "New Username",
    newPlaceholder: "New username"
  },
  {
    id: "change-password",
    title: "Change Password",
    newLabel: "New Password",
    newPlaceholder: "New password"
  },
  {
    id: "change-email",
    title: "Change Email Address",
    newLabel: "New Email Address",
    newPlaceholder: "New email address"
  }
];

formsData.forEach(data => {
  const formHtml = `
    <div class="w-1/2 m-auto">
      <div class="flex flex-col justify-center items-center">
        <div class="w-full max-w-sm p-4 bg-white dark:bg-primary-dark rounded-2xl drop-shadows dark:shadow-lg sm:p-6 md:p-8">
          <form class="space-y-3" action="#">
            <h5 class="text-xl font-medium mb-3">${data.title}</h5>
            <p class="block text-sm font-normal pb-5">To ensure the security of your account, we require your current password before you can ${data.title.toLowerCase()}.</p>
            <label class="block text-sm font-medium">Current Password</label>
            <input type="text" class="input-field w-full" placeholder="Your current password" required>
            <label class="block text-sm font-medium text-deep-koamaru pt-4">${data.newLabel}</label>
            <input type="text" class="input-field w-full" placeholder="${data.newPlaceholder}" required><br>
            <button type="submit" class="btn-primary w-full">Submit</button>
          </form>
        </div>
      </div>
    </div>
  `;
  document.getElementById(data.id).innerHTML = formHtml;
});