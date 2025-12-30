// --- FAQ Accordion Logic ---
let faqButtons = document.querySelectorAll(".btn1");

faqButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
        let answer = btn.nextElementSibling;
        const isExpanded = btn.getAttribute('aria-expanded') === 'true';

        // Close all other answers
        faqButtons.forEach(otherBtn => {
            const otherAnswer = otherBtn.nextElementSibling;
            if (otherBtn !== btn && otherBtn.getAttribute('aria-expanded') === 'true') {
                otherAnswer.style.display = "none";
                otherBtn.setAttribute('aria-expanded', 'false');
            }
        });

        // Toggle the current answer
        if (isExpanded) {
            answer.style.display = "none";
            btn.setAttribute('aria-expanded', 'false');
        } else {
            answer.style.display = "block";
            btn.setAttribute('aria-expanded', 'true');
        }
    });
});


// --- Contact Form Submission Logic ---
// NOTE: Your original code had an error: BTN was queried with querySelectorAll
// but treated as a single element, and the submit type/required fields handle
// most of the form action. I've updated it to listen to the FORM submit.

const contactForm = document.getElementById('contactForm');

if (contactForm) {
    contactForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission

        // You would typically send the form data to a server here.
        
        // Show the alert as requested
        alert("dhawaan baan kula soo xiriiri doonnaa (We will contact you soon)");

        // Optionally clear the form after successful submission
        contactForm.reset();
    });
}


// --- Theme Toggle Logic ---
const themeToggle = document.getElementById('theme-toggle');
const body = document.getElementById('body');

themeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    const icon = themeToggle.querySelector('i');
    if (body.classList.contains('dark-mode')) {
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
        icon.title = "Switch to Light Mode";
    } else {
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
        icon.title = "Switch to Dark Mode";
    }
});