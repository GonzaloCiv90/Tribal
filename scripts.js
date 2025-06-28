document.addEventListener("DOMContentLoaded", function () {
    // Selecciona los elementos para la animación
    const elements = document.querySelectorAll("#carousel h1, #carousel h2, .overlay h1, .overlay h2, #new-section h2, #new-section p, #new-section img, #new-section a, #newvideo-section h2, #newvideo-section p, #newvideo-section a, #newvideo-section img, #container-text p");
  
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

    // Efectos adicionales
    const links = document.querySelectorAll('.link-item');
    
    links.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.boxShadow = '0 0 15px rgba(18, 126, 70, 0.8)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.boxShadow = 'none';
        });
    });
    
    // Asegurar que el video esté en bucle
    const video = document.getElementById('metalVideo');
    if(video) {
        video.loop = true;
    }
});
