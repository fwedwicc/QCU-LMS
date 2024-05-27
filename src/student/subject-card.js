// Function to create course card
function createCourseCard(course) {
  return `
        <!-- Course Card -->
        <a href="${course.link}" class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue">
          <div class="relative">
            <img src="../../assets/image/course-card-illustration.png" class="rounded-xl w-full" alt="Course Card Illustration" draggable="false">
            <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white dark:text-white">
              ${course.code}</h5>
          </div>
          <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">${course.title}</h5>
          <span class="block text-deep-koamaru">${course.instructor}</span>
          <span class="block text-deep-koamaru">${course.section}</span>
          <!-- Semester Indicator -->
          <span class="mt-4 inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
            ${course.semester}
          </span>
        </a>
      `;
}

// Render course cards
const courseCardsContainer = document.getElementById('course-cards');

// Fetch the subject-card.json data
fetch('../JSON/subject-card.json')
  .then(response => response.json())
  .then(courses => {
    courses.forEach(course => {
      courseCardsContainer.innerHTML += createCourseCard(course);
    });
  })
  .catch(error => console.error('Error:', error));
