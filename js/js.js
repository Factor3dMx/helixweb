document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.has-submenu > a');
    const menuCheck = document.getElementById('menu-check');

    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            // Activar comportamiento de acordeón en pantallas móviles/tablets
            if (window.innerWidth <= 1024) {
                e.preventDefault();
                const parent = this.parentElement;
                
                // Si el clic es en un menú ya abierto, lo cerramos
                if (parent.classList.contains('active')) {
                    parent.classList.remove('active');
                } else {
                    // Cerramos los otros submenús para que solo haya uno abierto (acordeón)
                    document.querySelectorAll('.menu-item.has-submenu').forEach(mi => {
                        mi.classList.remove('active');
                    });
                    parent.classList.add('active');
                }
            }
        });
    });

    // Si el usuario cierra el menú hamburguesa, resetear todos los submenús
    menuCheck.addEventListener('change', function() {
        if (!this.checked) {
            document.querySelectorAll('.menu-item.has-submenu').forEach(mi => {
                mi.classList.remove('active');
            });
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const submenuLinks = document.querySelectorAll('.menu-item.has-submenu > a');

    submenuLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            if (window.innerWidth <= 1024) {
                e.preventDefault();
                const parent = link.parentElement;
                const dropdown = parent.querySelector('.dropdown');
                
                // Toggle display
                const isVisible = dropdown.style.display === 'block';
                
                // Opcional: Cerrar otros dropdowns antes de abrir este
                document.querySelectorAll('.dropdown').forEach(d => d.style.display = 'none');
                
                dropdown.style.display = isVisible ? 'none' : 'block';
            }
        });
    });
});




// inicio slider vertical

document.addEventListener('DOMContentLoaded', () => {
    const menuItems = document.querySelectorAll('.menu-item-v');
    const imageTrack = document.querySelector('.images-track');
    const slideHeight = 500; // Debe coincidir con el CSS

    menuItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            // Actualizar clase activa en menú
            menuItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');

            // Mover el track de imágenes
            const moveDistance = index * slideHeight;
            imageTrack.style.transform = `translateY(-${moveDistance}px)`;
        });
    });
});


// fin slider vertical


// inicoo slider 3

document.addEventListener('DOMContentLoaded', () => {
    const vMenuItems = document.querySelectorAll('.v-menu-item');
    const vTrack = document.getElementById('v-track');
    const vSlideHeight = 600; // Debe coincidir con el alto en CSS

    vMenuItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            // Cambiar clase activa
            vMenuItems.forEach(menu => menu.classList.remove('active'));
            item.classList.add('active');

            // Desplazar el track de imágenes
            const translateY = index * vSlideHeight;
            vTrack.style.transform = `translateY(-${translateY}px)`;
        });
    });
});

// fin slider 3



// inico slider 4



// fin slider 4