document.addEventListener("DOMContentLoaded", function() {
    // Obtener referencia al botón de hamburguesa
    const menuButton = document.querySelector('.lg:hidden button');
  
    // Obtener referencia al menú móvil
    const mobileMenu = document.querySelector('.lg:hidden ~ div');
  
    // Agregar un event listener para el clic en el botón de hamburguesa
    menuButton.addEventListener('click', function() {
      // Toggle (alternar) la clase 'hidden' en el menú móvil para mostrarlo o esconderlo
      mobileMenu.classList.toggle('hidden');
  
      // Si el menú se está mostrando, añadir un event listener al documento para cerrarlo si se hace clic fuera de él
      if (!mobileMenu.classList.contains('hidden')) {
        document.addEventListener('click', closeMenuOnClickOutside);
      } else {
        document.removeEventListener('click', closeMenuOnClickOutside);
      }
    });
  
    // Función para cerrar el menú si se hace clic fuera de él
    function closeMenuOnClickOutside(event) {
      // Si el elemento en el que se hizo clic no es el botón de hamburguesa ni el menú móvil, cerrar el menú
      if (!menuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
        mobileMenu.classList.add('hidden');
        document.removeEventListener('click', closeMenuOnClickOutside);
      }
    }
  });
  