

document.addEventListener("DOMContentLoaded", () => {
const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');

  btn.addEventListener('click', () => {
    if (menu.style.display === "flex") {
      menu.style.display = "none";
            menu.classList.toggle('scale-y-0');
    } else {
      menu.style.display = "flex";

    menu.classList.toggle('scale-y-100');
    }
  });

    const passwordInput = document.getElementById("passwordInput");
    const toggleBtn = document.getElementById("togglePasswordBtn");

    if (!passwordInput || !toggleBtn) return;

    toggleBtn.addEventListener("click", () => {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleBtn.textContent = "Hide";
        } else {
            passwordInput.type = "password";
            toggleBtn.textContent = "Show";
        }
    });
});


