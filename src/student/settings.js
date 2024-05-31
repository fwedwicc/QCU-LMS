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
        <div class="w-full max-w-sm p-4 bg-white dark:bg-primary-dark rounded-2xl drop-shadows dark:shadow-md sm:p-6 md:p-8">
          <form class="space-y-3" action="#">
            <h5 class="text-xl font-medium mb-3">${data.title}</h5>
            <p class="block text-sm font-normal pb-5">To ensure the security of your account, we require your current password before you can ${data.title.toLowerCase()}.</p>
            <label class="block text-sm font-medium">Current Password</label>
            <input type="password" class="bg-ghost-white dark:bg-dark-ghost border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Your current password" required>
            <label class="block text-sm font-medium text-deep-koamaru pt-4">${data.newLabel}</label>
            <input type="text" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="${data.newPlaceholder}" required><br>
            <button type="submit" class="w-full text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Submit</button>
          </form>
        </div>
      </div>
    </div>
  `;
  document.getElementById(data.id).innerHTML = formHtml;
});