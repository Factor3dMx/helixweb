<?php 
    $pageTitle = "Inicio"; // Opcional: define el título de la pestaña
    include 'head.php'; 
?>
<body>

<?php 
    
    include 'menu.php'; 
?>

<section class="slider">
    <div class="content">
        <div class="title-group">
            <h1 class="thin">RETIRO</h1>
            <h1 class="black">ESTRATÉGICO</h1>
        </div>

        <div class="info-box">
            <div class="info-header">
                <h2>Planeación de Futuro — Blindaje Patrimonial y Beneficios Fiscales</h2>
            </div>
            
            <hr class="separator">

            <p class="description">
                Asegura tu libertad financiera mañana mientras optimizas tus impuestos hoy. Nuestros Planes Personales de Retiro no solo ofrecen una base sólida para tu jubilación, sino que integran activos de vanguardia para maximizar el interés compuesto, garantizando que tu legado se mantenga fuerte frente a la inflación y la volatilidad.
            </p>

            <a href="#" class="learn-more">
                Conocer más sobre PPR <span class="arrow">›</span>
            </a>
        </div>
    </div>
</section>


<section class="contact-section">
    <div class="bg-light light-1"></div>
    <div class="bg-light light-2"></div>

    <div class="form-container">
        <div class="form-header">
            <span class="eyebrow">Contacto Exclusivo</span>
            <h2 class="form-title">Inicia tu Estrategia</h2>
            <p>Completa los detalles para conectar con nuestro equipo de gestión.</p>
        </div>

        <form class="revolv-form">
            <div class="input-group">
                <label>Nombre Completo</label>
                <input type="text" placeholder="Ej. Juan Pérez" required>
            </div>

            <div class="input-row">
                <div class="input-group">
                    <label>Correo Electrónico</label>
                    <input type="email" placeholder="juan@revolv.capital" required>
                </div>
                
                <div class="input-group">
                    <label>Teléfono de Contacto</label>
                    <input type="tel" id="phone" required>
                </div>
            </div>

            <div class="input-group">
                <label>Interés Específico</label>
                <div class="select-wrapper">
                    <select required>
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="digitales">Activos Digitales</option>
                        <option value="privado">Capital Privado</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn-submit">
                Enviar Solicitud <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </div>
</section>

<!-- fin slider 4-->
<script>
        const content = [
            { title: "Electricity", img: "https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?auto=format&fit=crop&q=80&w=1000", desc: "Advanced electrical insulation solutions for high-voltage systems." },
            { title: "Electromagnetic", img: "https://images.unsplash.com/photo-1558444479-c84851727d26?auto=format&fit=crop&q=80&w=1000", desc: "Relats offers durable sleeves with EMI shielding for enhanced protection." },
            { title: "Robotics", img: "https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=1000", desc: "Specialized protection for robotic joints and high-frequency movement components." }
        ];

        function updateContent(index) {
            // Actualizar Imagen
            const imgElement = document.getElementById('main-image');
            imgElement.style.opacity = '0';
            
            setTimeout(() => {
                imgElement.src = content[index].img;
                document.getElementById('description').innerText = content[index].desc;
                imgElement.style.opacity = '1';
            }, 300);

            // Actualizar Estilos de Botones
            for (let i = 0; i < 3; i++) {
                const btn = document.getElementById(`btn-${i}`);
                if (i === index) {
                    btn.classList.remove('text-gray-300', 'font-light');
                    btn.classList.add('text-black', 'font-medium');
                } else {
                    btn.classList.add('text-gray-300', 'font-light');
                    btn.classList.remove('text-black', 'font-medium');
                }
            }
        }
    </script>
<script src="js/js.js"></script>
<!-- inicio telefono -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
  const phoneInputField = document.querySelector("#phone");
  const phoneInput = window.intlTelInput(phoneInputField, {
    separateDialCode: true, // ESTO ES CLAVE: Separa el código de la caja de texto
    initialCountry: "auto",
    geoIpLookup: function(callback) {
      fetch('https://ipinfo.io/json?token=TU_TOKEN')
        .then(res => res.json())
        .then(data => callback(data.country))
        .catch(() => callback("mx"));
    },
    preferredCountries: ["mx", "es", "us", "co"],
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });
</script>
<!-- fin telefono -->
</body>
</html>