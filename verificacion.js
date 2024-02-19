  document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
      const inputs = form.querySelectorAll("input");

      let isValid = true;

      // Verificar si algún campo está vacío
      inputs.forEach(function(input) {
        if (!input.value.trim()) {
          isValid = false;
        }
      });

      // Verificar si el correo electrónico es válido
      const emailInput = form.querySelector("input[name='email']");
      const emailValue = emailInput.value.trim();
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!emailPattern.test(emailValue)) {
        alert("Por favor, introduzca un correo electrónico válido.");
        isValid = false;
      }

      // Verificar si las contraseñas coinciden
      const passwordInput = form.querySelector("input[name='password']");
      const confirmPasswordInput = form.querySelector("input[name='confirmPassword']");

      if (passwordInput.value !== confirmPasswordInput.value) {
        alert("Las contraseñas no coinciden. Por favor, inténtelo de nuevo.");
        isValid = false;
      }

      if (!isValid) {
        event.preventDefault(); // Evitar el envío del formulario si no es válido
      }
    });
  });

