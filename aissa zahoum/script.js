// Footer year
document.getElementById("footer-text").textContent =
    `© ${new Date().getFullYear()} - Portfolio Aissa`;

// Skills dynamiques
const skills = [
    "HTML",
    "CSS",
    "JavaScript",
    "React",
    "MongoDB",
    "Git"
];

const skillsContainer = document.getElementById("skills-container");

skills.forEach(skill => {
    const div = document.createElement("div");
    div.className = "skill";
    div.textContent = skill;
    skillsContainer.appendChild(div);
});

// Contact
function contactAlert() {
    alert("Merci pour votre message 🙌");
}

// Scroll
function scrollToSection(id) {
    document.getElementById(id).scrollIntoView({ behavior: "smooth" });
}

// Dark mode
const themeBtn = document.getElementById("theme-btn");
themeBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark");
});
// Scroll animation
const sections = document.querySelectorAll("section");

window.addEventListener("scroll", () => {
    sections.forEach(sec => {
        const top = sec.getBoundingClientRect().top;
        const height = window.innerHeight;

        if (top < height - 120) {
            sec.classList.add("visible");
        }
    });
});
