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
            <h1 class="thin">PROTECCIÓN &</h1>
            <h1 class="black">FIDEICOMISOS</h1>
        </div>
        <div class="info-box">
            <div class="info-header">
                <h2>Blindaje Generacional — Protege el Legado de tu Familia</h2>
            </div>
            <hr class="separator">
            <p class="description">
                Asegura que tu patrimonio se administre y distribuya exactamente según tus deseos. Los fideicomisos son la herramienta más robusta para la protección de activos y la sucesión patrimonial, ofreciendo confidencialidad, seguridad jurídica y la tranquilidad de saber que tu legado está protegido para las próximas generaciones.
            </p>
            <a href="#" class="learn-more">
                Explorar estructuras de legado <span class="arrow">›</span>
            </a>
        </div>
    </div>
</section>


<?php 
    
    include 'contacto.php'; 
?>

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