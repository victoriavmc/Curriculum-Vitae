// Función para manejar el botón flotante
document.addEventListener('DOMContentLoaded', function() {
    const floatingButton = document.getElementById('floatingButton');
    
    // Función para mostrar/ocultar el botón flotante
    function handleScroll() {
        const scrollPosition = window.scrollY;
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight;
        
        // Mostrar el botón cuando el usuario ha desplazado el 60% de la página
        const scrollThreshold = (documentHeight - windowHeight) * 0.6;
        
        if (scrollPosition > scrollThreshold) {
            floatingButton.classList.remove('opacity-0', 'pointer-events-none');
            floatingButton.classList.add('opacity-100');
        } else {
            floatingButton.classList.add('opacity-0', 'pointer-events-none');
            floatingButton.classList.remove('opacity-100');
        }
    }

    // Agregar el evento de scroll
    window.addEventListener('scroll', handleScroll);
});