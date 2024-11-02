document.addEventListener("DOMContentLoaded", function () {
    // Selecciona los elementos h2, p, img, y enlaces dentro de .social-icons
    const elements = document.querySelectorAll("#new-section h2, #new-section p, #new-section img, #new-section .social-icons a, #newvideo-section h2, #newvideo-section  p, #newvideo-section img");
  
    // Opciones del IntersectionObserver
    const options = {
      threshold: 0.1 // Cuando el 10% del elemento es visible
    };
  
    // Configuración del observador
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show"); // Agrega la clase .show para activar el efecto
          observer.unobserve(entry.target); // Deja de observar el elemento después de que aparece
        }
      });
    }, options);
  
    // Añade la clase .fade-element y observa cada elemento
    elements.forEach(element => {
      element.classList.add("fade-element");
      observer.observe(element);
    });
  });
  