// Hide dan show password
  const eyeIcons = document.querySelectorAll(".show-hide"); 
  eyeIcons.forEach((eyeIcon) => { 
    eyeIcon.addEventListener("click", () => { 
      const passwordInput = eyeIcon.parentElement.querySelector("input"); 
      if (passwordInput) { 
        if (passwordInput.type === "password") {
          eyeIcon.classList.replace("bx-hide", "bx-show");
          passwordInput.type = "text";
        } else {
          eyeIcon.classList.replace("bx-show", "bx-hide");
          passwordInput.type = "password";
        }
      }
    });
  });