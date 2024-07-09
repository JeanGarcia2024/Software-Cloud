<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Morales Lab</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

</head>
<body>

   
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Morales Lab</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="img/menu2.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <li><a href="http://127.0.0.1:8000/login">Ingresar</a></li>
                    <li><a href="https://wa.me/51925395866?text=Hola%20necesito%20información" > <i class="fab fa-whatsapp"></i> Agenda tú cita </a></li>
                    
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <br>
                <h1>Laboratorio de análisis clínico</h1>
                <br>
                <p>
                Nuestra trayectoria de más de 7 años en el mercado del laboratorio clínico es un testimonio de nuestra dedicación
                y excelencia. Clientes confían en nosotros porque ofrecemos resultados precisos y confiables, respaldados por un
                equipo altamente capacitado y comprometido con la calidad. En cada análisis, garantizamos la atención individualizada
                y el cuidado meticuloso que mereces.
                </p>
                
                <a href="#" class="btn-1">Información</a>                
            </div>
            <div class="header-img">
                <img src="img/moraleslab12.jpg" alt="">
            </div>
        </div>
        
    </header>

    <section class="about container">

        <!--<div class="about-img">
            <img src="img/moraleslab3.jpg" alt="">
        </div> -->
	

        <div id="nosotros" class="about-txt">
            <h2>Nosotros</h2>
            
            <p>                
                <h3>Misión</h3> <br>
                Brindar servicios de laboratorio clínico confiable, con la más alta calidad y en el menor tiempo posible,
                dotados del profesionalismo de un equipo humano cálido, que emplea los más óptimos estádares de calidad..
            </p>
            
            <br>

            <p>
                <h3>Visión</h3> <br>
                Constituirnos como una empresa líder y referente a nivel nacional, con sólidas prácticas de gestión y comprometidas
                con el cuidado de la salud, bajo la vanguardia de la ciencia y tecnología.                    
            </p>

            <br>

            <p>
                <h3>Valores</h3> <br>
                Responsabilidad, Integridad, Fidelidad, Confianza.                    
            </p>

            <br>

            <p>
                <h3>Política de calidad</h3> <br>
                En Morales Lab, estamos comprometidos con la excelencia en la prestación de servicios de laboratorio clínico, 
                brindando resultados precisos, confiables y oportunos para satisfacer las necesidades de nuestros pacientes y clientes.
                Nuestra política de calidad se basa en los siguientes principios: Satisfacción del Cliente, Calidad y Precisión, Cumplimiento Normativo,
                Mejora Continua, Confidencialidad y Ética profesional, Formación y desarrollo.                    
            </p>
        
        </div>
        
    </section>
	<h1><center>Galería</center></h1>
    
    <!-- Galería de Imágenes -->
    <div class="gallery">
        <div class="gallery-item"><img src="img/moraleslabfotos.jpg" alt="Imagen 1"></div>
        <div class="gallery-item"><img src="img/moraleslabfotos11.jpg" alt="Imagen 2"></div>
        <div class="gallery-item"><img src="img/moraleslabfotos1.jpg" alt="Imagen 3"></div>
        <div class="gallery-item"><img src="img/moraleslabfotos2.jpg" alt="Imagen 4"></div>
        <div class="gallery-item"><img src="img/moraleslabfotos3.jpg" alt="Imagen 5"></div>
        <div class="gallery-item"><img src="img/moraleslabfotos4.jpg" alt="Imagen 6"></div>
        <div class="gallery-item"><img src="img/moraleslabfotos5.jpg" alt="Imagen 7"></div>
        <div class="gallery-item"><img src="img/moraleslabfotos6.jpg" alt="Imagen 8"></div>
        <div class="gallery-item"><img src="img/imagenlocal1.jpeg" alt="Imagen 9"></div>
        <div class="gallery-item"><img src="img/moraleslabfotos8.jpg" alt="Imagen 10"></div>
        <div class="gallery-item"><img src="img/moraleslabfotos70.jpg" alt="Imagen 11"></div>
        <div class="gallery-item"><img src="img/imagenlocal.jpeg" alt="Imagen 12"></div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    const galleryItems = document.querySelectorAll('.gallery-item img');
    const fullscreenContainer = document.createElement('div');
    fullscreenContainer.classList.add('fullscreen-img-container');
    const fullscreenImg = document.createElement('img');
    const closeBtn = document.createElement('div');
    closeBtn.classList.add('close-btn');
    closeBtn.innerHTML = '&times;';
    fullscreenContainer.appendChild(fullscreenImg);
    fullscreenContainer.appendChild(closeBtn);
    document.body.appendChild(fullscreenContainer);

    galleryItems.forEach(item => {
        item.addEventListener('click', () => {
            fullscreenImg.src = item.src;
            fullscreenContainer.style.display = 'flex';
        });
    });

    closeBtn.addEventListener('click', () => {
        fullscreenContainer.style.display = 'none';
    });

    fullscreenContainer.addEventListener('click', (e) => {
        if (e.target === fullscreenContainer) {
            fullscreenContainer.style.display = 'none';
        }
    });
});
</script>

    
    
    <main id="servicios" class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Muestras sanguíneas</h3>
            </div>
            
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>Muestras de orina</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>Muestras de heces</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>Muestras de fluidos corporales</h3>
            </div>
        </div>
    </main>

    <!-- Sección de Contacto -->
    <section id="contacto" class="contact-section">
        <h2>Contacto</h2>
        <div class="contact-info">
            <div class="contact-item">
                <h3>Dirección</h3>
                <p>Av. Perú 190 , Morales, Peru</p>
               
            </div>
            <div class="contact-item">
                <h3>Teléfono</h3>
                <p>+51 921 948 044</p>
            </div>
            <div class="contact-item">
                <h3>Correo Electrónico</h3>
                <p>moraleslabsac@gmail.com</p>
            </div>
            <div class="contact-item">
                <h3>Horario de Atención</h3>
                <p>Lunes a Viernes: 7:00 AM - 7:00 PM</p>
                <p>Sábado: 7:00 AM - 1:00 PM</p>
            </div>
        </div>
        <div class="contact-map">
            <h3>Ubicación</h3>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d833.3998364693371!2d-76.384566271886!3d-6.478542787085801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ba0be025fb72bd%3A0x138f7a46093b3df6!2sMorales%20lab%20-%20Laboratorio%20Clinico!5e0!3m2!1ses!2spe!4v1720481572867!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </section>

    
    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">Morales Lab</a>
            </div>        
        

        <div class="link">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a href="http://127.0.0.1:8000/login">Ingresar</a></li>
                <li><a href="https://wa.me/51998064174?text=Hola%20necesito%20información" > <i class="fab fa-whatsapp"></i> Agenda tú cita </a></li>

            </ul>
            </div>
        </div>


        <div class="footer-social">
            <p>Redes Sociales</p>
            <a href="https://www.facebook.com/moraleslabotario/" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/moraleslaboratorio/" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="https://api.whatsapp.com/send?phone=921948044" target="_blank" class="social-icon"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
    
    <center><h5>©Todo los derechos reservados | Av. Perú 190 , Morales, Peru | Cel. 921 948 044 | Email. moraleslabsac@gmail.com</h5></center>
</footer>

</body>
</html>
