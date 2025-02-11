function togglePassword() {
    var passwordInput = document.getElementById("password");
    var eyeIcon = document.getElementById("eyeIcon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.054 9.024C4.642 6.797 7.62 5 12 5c4.478 0 8.268 2.943 9.542 7-1.046 3.33-3.72 6.09-7.184 6.834M9.121 9.121L2.5 2.5m4 4 4.5 4.5m.5.5 4.5 4.5m2.5 2.5l-1.5-1.5" />`;
    } else {
        passwordInput.type = "password";
        eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />`;
    }
}

const navbar = document.getElementById("navbar");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) { 
                navbar.classList.remove("bg-opacity-90");
                navbar.classList.add("bg-opacity-100");
            } else { 
                navbar.classList.remove("bg-opacity-100");
                navbar.classList.add("bg-opacity-90");
            }
        });