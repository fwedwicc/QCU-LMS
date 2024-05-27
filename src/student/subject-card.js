// Function to create course card
function createCourseCard(course) {
  return `
        <a href="${course.link}" class="subject-container">
          <div class="relative">
            <img src="../../assets/image/course-card-illustration.png" class="rounded-xl w-full" alt="Course Card Illustration">
            <h5 class="subject-code">
              ${course.code}</h5>
          </div>
          <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">${course.title}</h5>
          <span class="block text-deep-koamaru dark:text-dark-corn-koamaru">${course.instructor}</span>
          <span class="block text-deep-koamaru dark:text-dark-corn-koamaru">${course.section}</span>
          <!-- Semester Indicator -->
          <span class="subject-sem">
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
