
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVCaricuao - Tu ventana alternativa Participativa Comunitaria</title>
    <LINK rel="SHORTCUT ICON" HREF="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos1.css"/>
    

</head>
<body>
    <!-- Header -->
    <header id="header">
        <img src="images/LOGO TVC TRANSPARENTE.png" alt="Logo" class="logo">
        <!--<div class="logo">
            <i class="fas fa-tv"></i>
            <span>TVCaricuao</span>
        </div> -->
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#programas">Programas</a></li>
                <li><a href="#testimonios">Testimonios</a></li>
                <li><a href="#destacados">Destacados</a></li>            
                <li><a href="#nosotros">Sobre Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
        
        <div class="contact-icons">
            <a button id="contact-btn"><i class="fas fa-envelope"></i></a>
            <a href="tel:+584169349789"><i class="fas fa-phone"></i></a>
        </div>
    </header>


     <!-- Formulario deslizable -->
    <div class="slide-down-form" id="contact-form">
        <div class="form-container">
            <div class="form-header">
                <h2>Contáctanos</h2>
                <button class="close-btn" id="close-btn">&times;</button>
            </div>
            
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" id="name" placeholder="Ingresa tu nombre" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" placeholder="ejemplo@correo.com" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Teléfono</label>
                    <input type="tel" id="phone" placeholder="(XX) XXXX-XXXX">
                </div>
                
                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input type="text" id="subject" placeholder="¿Sobre qué quieres hablar?" required>
                </div>
                
                <div class="form-group full-width">
                    <label for="message">Mensaje</label>
                    <textarea id="message" placeholder="Escribe tu mensaje aquí..." required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Enviar Mensaje</button>
            </form>
        </div>
    </div>



    
    <!-- Sección Inicio -->
    
    <section id="inicio">      
        <div class="hero-content">
            <h1 class="hero-title">Bienvenido a TVCaricuao</h1>
            <div class="separator"></div>
            <h2 class="tagline">Tu ventana Alternativa, Participativa, al entretenimiento, la formación y la cultura.</h2>
        </div>
       
    </section>
    </div>

    <!-- Sección Programas -->
    <section id="programas">
        <h2 class="section-title">Programas</h2>
        <div class="program-container">
            <div class="program-card">
                <div class="program-img" style="background-image: url('images/caricuaoentodo.jpg');"></div>
                <div class="program-info">
                    <h3 class="program-title">Caricuao en todo</h3>
                    <p class="program-desc">Desde Caricuao, estamos construyendo un futuro mejor, con el deporte, el arte, y la música transformamos la realidad. El emprendimiento fortalece la economía local. Nuestras raíces están en la lucha, en la creatividad y en la pasión. Somos herederos de una historia rica y diversa. Hoy, seguimos escribiendo nuestro propio capítulo.
                    </p>
                </div>
            </div>
            
            <div class="program-card">
                <div class="program-img" style="background-image: url('images/construyendo.jpg');;"></div>
                <div class="program-info">
                    <h3 class="program-title">Construyendo Ciudadania</h3>
                    <p class="program-desc">Análisis profundo de la actualidad política nacional e internacional con invitados especiales. Un espacio para el debate respetuoso y la reflexión crítica sobre los temas que definen nuestro presente y futuro.</p>
                </div>
            </div>
            
            <div class="program-card">
                <div class="program-img" style="background-image: url('images/caracasint.jpg');"></div>
                <div class="program-info">
                    <h3 class="program-title">Foro Caracas Ciudad Inteligente</h3>
                    <p class="program-desc">Fomentar una reflexión crítica que construya con el concurso de expertos en las áreas tecnológicas, productivas, ecológicas, científicas ese modelo de ciudad humana aprovechando las oportunidades que nos ofrece la ciencia y la tecnología.</p>
                </div>
            </div>
            
            <div class="program-card">
                <div class="program-img" style="background-image: url('images/nottvc.jpg');"></div>
                <div class="program-info">
                    <h3 class="program-title">Noticiero TVCaricuao</h3>
                    <p class="program-desc">Una muestra de las expresiones culturales, deportivas e informativas de nuestra comunidad: música, arte, teatro, danza, tradiciones y entre otras. Celebramos la diversidad  que nos define como Parroquia..</p>
                </div>
            </div>
            <div class="program-card">
                <div class="program-img" style="background-image: url('images/e16.jpg');"></div>
                <div class="program-info">
                    <h3 class="program-title">Parrilla de Programación</h3>
                    <p class="program-desc">La programación de entretenimiento de TVCaricuao ofrece una alternativa cultural y comunitaria diversa, transmitiendo contenido que incluye documentales, cine nacional e internacional, videoclips, musicales y producciones. La programación combina el entretenimiento con el valor cultural, proyectando material audiovisual que reflejan identidad venezolana, mientras integra a vecinos e instituciones de la parroquia Caricuao a través de una propuesta participativa y alternativa. Transmitida por el canal UHF 66 desde 2005, la programación ha tenido una excelente receptividad en la comunidad por su enfoque educativo y de entretenimiento que fortalece el tejido social</p>
                </div>
            </div>

              <div class="program-card">
                <div class="program-img" style="background-image: url('images/e18.jpg');"></div>
                <div class="program-info">
                    <h3 class="program-title">Entretenimiento para todos</h3>
                    <p class="program-desc">Cine alternativo, documentales, video clips, músicales! Programación para curiosos, Entretenimiento diverso en señal abierta para todos.
                    Más que TV, Tu dosis de entretenimiento libre y diversos..</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Banner Separador -->
    <div class="banner">
        <div class="banner-content">
            <h3 class="banner-title">Explora nuevos horizontes</h3>
            <div class="orange-line"></div>
            <h2 class="banner-subtitle">Transformando la forma en que ves el mundo.</h2>
        </div>
    </div>
    

    <!-- Sección Testimonios -->
    <section id="testimonios">
        <h2 class="section-title">Testimonios</h2>
        <div class="testimonials-container">
            <div class="testimonial-card">
                <div class="testimonial-video">
                     <video poster="images/nani.jpg" controls>                            
                        <source src="videos/nanidv.mp4" type="video/mp4">    
                        </video>
                        <div class="video-overlay">
                            <i class="fas fa-play-circle play-icon"></i>
                        </div>
                     </div>  
                <div class="testimonial-info">
                    <p class="testimonial-text">"TVCaricuao ha cambiado mi perspectiva sobre la televisión local. Sus programas son innovadores, educativos y realmente representan nuestra comunidad."</p>
                    <p class="testimonial-author">Nani Lamas, Operadora de Master TVCaricuao</p>
                </div>
            </div>
         
            <div class="testimonial-card">
                <div class="testimonial-video">
                     <video poster="images/roger.png" controls>                            
                        <source src="videos/rogerdv.mp4" type="video/mp4">    
                     </video>
                        <div class="video-overlay">
                            <i class="fas fa-play-circle play-icon"></i>
                        </div>
                     </div> 
                <div class="testimonial-info">
                    <p class="testimonial-text">"Como educador, valoro especialmente los programas culturales y educativos de TVCaricuao. Son un recurso invaluable para mis estudiantes."</p>
                    <p class="testimonial-author">Roger Pinzón, Profesor TVCaricuao</p>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-video">

                     <video poster="images/nicodv.png" controls>                            
                        <source src="videos/nicodv.mp4" type="video/mp4">    
                        </video>
                        <div class="video-overlay">
                            <i class="fas fa-play-circle play-icon"></i>
                        </div>
                     </div> 
                <div class="testimonial-info">
                    <p class="testimonial-text">"En TV Caricuao, no solo somos una televisora, somos una voz comunitaria, un espacio donde la participación y la diversidad se encuentran. Como medio alternativo, nuestro compromiso es visibilizar las realidades, sueños y luchas de nuestra gente, rompiendo con los esquemas tradicionales para darle poder a las historias que realmente importan."</p>
                    <p class="testimonial-author">Nicolas Rivera Periodista</p>
                </div>
            </div>  
        </div> 
    </section>



     <!-- Sección destacados -->
    <section id="destacados">
        <h2 class="section-title">Videos Destacados</h2>
        <div class="destacados-container">
            <div class="destacados-card">

                 <!-- Contenedor del video de YouTube -->
            <div class="destacados-video">
                <iframe 
                    src="https://www.youtube.com/embed/0XbkGKi3vd4" 
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="destacados-info">
                <h3 class="destacados-title">CARICUAO EN TODO EP16 con JORDY (COMEDIANTE)</h3>
                <p class="destacados-desc">El Podcast Caricuo tuvimos como invitado especial al comediante Jordy comediante residente de nuestra parroquia caricuao, comentado acerca de su trayectoria e interesantes anecdotas a lo largo de su gran carrera en los medios de comunicación más importantes de nuestro pais.</p>
                </div>
            </div>
    
            
           <div class="destacados-card">

                 <!-- Contenedor del video de YouTube -->
            <div class="destacados-video">
                <iframe 
                    src="https://www.youtube.com/embed/JOiul3bHesM" 
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="destacados-info">
                <h3 class="destacados-title">Proyecto formación de unidades técnica educativa comunitaria  / CCS CIUDAD INTELIGENTE EP22</h3>
                <p class="destacados-desc">El Podcast foro caracas ciudad inteligente promovido por en Mincyt Ministerio de tecnología, descaca los avances el el área de formación y avances en cientifico, tecnologíco.</p>
                </div>
            </div>
            
            <div class="destacados-card">

                 <!-- Contenedor del video de YouTube -->
            <div class="destacados-video">
                <iframe 
                    src="https://www.youtube.com/embed/SdwUG5-TBrE" 
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="destacados-info">
                <h3 class="destacados-title">Construyendo Ciudadania con MARVIN MOLINA Juez de Paz</h3>
                <p class="destacados-desc">El Podcast Construyendo Ciudadania, tuvimos como invitado al Juez de Paz Comunal Marvin Molina participando en un espacio para el debate respetuoso y la reflexión crítica sobre los temas que definen nuestro presente y futuro..</p>
                </div>
            </div>
            
            <div class="destacados-card">

                 <!-- Contenedor del video de YouTube -->
            <div class="destacados-video">
                <iframe 
                    src="https://www.youtube.com/embed/A6X8LDMJjH0" 
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="destacados-info">
                <h3 class="destacados-title">ACTO 50 ANIVERSARIO DE LA PARROQUIA CARICUAO</h3>
                <p class="destacados-desc">TVCaricuao, televisora comunitaria de la parroquia Caricuao, documenta con mirada participativa el pulso local y nacional. Nuestro noticiero cubre equitativamente eventos deportivos, culturales, sociales y políticos, reconociendo el valor de cada iniciativa ciudadana que transforma nuestra realidad.</p>
                </div>
            </div>

            <div class="destacados-card">

                 <!-- Contenedor del video de YouTube -->
            <div class="destacados-video">
                <iframe 
                    src="https://www.youtube.com/embed/_RN6uSNhss0" 
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="destacados-info">
                <h3 class="destacados-title">EN EL CAMINO</h3>
                <p class="destacados-desc">Película basada en una Semblanza Biográfica de la vida del maestro del Libertador Don Simón Rodríguez maestro de America. Realizada por el equipos de TVCaricuao.</p>
                </div>
            </div>

            <div class="destacados-card">

                 <!-- Contenedor del video de YouTube -->
            <div class="destacados-video">
                <iframe 
                    src="https://www.youtube.com/embed/4VKPn09WQ80" 
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="destacados-info">
                <h3 class="destacados-title">La BATALLA de EL RODEO, el PORTAL de CARABOBO</h3>
                <p class="destacados-desc">Cortometraje animado realizado en la tecnica de stopmotion, relata la historia de El 12 de mayo de 1821 bajo el mando del general, José Francisco Bermúdez y el guatireño José Félix Parra siguiendo las órdenes de El Libertador Simón Bolívar campesinos, artesanos, peones y hasta esclavos sin ningún tipo de entrenamiento militar, se enfrentan con gallardía en la sabana de El Rodeo contra las tropas realista, lideradas por  el coronel, José María Hernández Monagas.,</p>
                </div>
            </div>
        </div>
    </section>



    
    <!-- Sección Sobre Nosotros -->
    <section id="nosotros">
        <h2 class="section-title">Sobre Nosotros</h2>
        <div class="about-container">
            <div class="about-text">
                <p>TVCaricuao, lejos de ser una actitud individual frente a conceptos profesionales, dentro de los cuales la mayoría hemos sido formados, busca la integración de diferentes factores del que hacer nacional.</p>
                <p>TVCaricuao se concibe como una comunidad que está efectivamente en capacidad de formular su propio proyecto para alcanzar sus fines, sean: académicos, administrativos, técnicos, operacionales.</p>
                <p>Nuestro objetivo es crear contenido que refleje la diversidad de nuestra sociedad, promoviendo valores de inclusión, participación y desarrollo cultural.</p>
                <p>
                TVCaricuao produce a nivel profesional vídeos, publicidad y promoción, microprogramas, corto metrajes y largo metrajes. Sus técnicos están formados con un alto grado de responsabilidad, principios morales, respondiendo siempre a su integridad como realizadores comunitarios y cooperativos, poniendo énfasis en lo social y respaldando a las instituciones empresas o proyectos comunitarios que pongan en primer plano al ser humano.
                </p>
                <p>TVCaricuao fundamenta su actividad en la verdad, la justicia, la equidad. Donde se respeta a los niños, niñas, adolescentes hombres y mujeres de las familias de las comunidades y el pueblo en su totalidad, que día a día construyen el futuro de integración de respeto a la tierra, a los seres vivos que la habitan.
                </p>
            </div>
            <div class="mosaic">
                <div class="mosaic-item" style="background-image: url('images/e12.jpg');"></div>
                <div class="mosaic-item" style="background-image: url('images/e09.jpg');"></div>
                <div class="mosaic-item" style="background-image: url('images/e11.jpg');"></div>
                <div class="mosaic-item" style="background-image: url('images/e15.jpg');"></div>
            </div>
            <div class="proyectos">
                 <h1> "Proyectos actuales"</h1>
                   <a href="proyectos-convenios.php" class="btn">
                Ver todos los proyectos <i class="fas fa-arrow-right"></i>
                    </a>
                    
                
            </div>
        </div>
    </section>
    
    <!-- Sección Contacto -->
    <section id="contacto">
        <h2 class="section-title">Contacto</h2>
        <div class="contact-container">
            <div class="contact-info">
                <h3 class="contact-title">Información de Contacto</h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>tvcaricuao@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+58 416 9349789</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Terrazas de Caricuao zona A antiguo nucleo UNESR, Caracas, Venezuela</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <span>Lunes a Domingo: 9:00 AM - 8:00 PM</span>
                    </div>
                </div>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.8044334192064!2d-66.98490372343781!3d10.437088165358068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2af53915fdcd55%3A0x2029e5cf7808febb!2sTVCaricuao!5e0!3m2!1ses!2sve!4v1754884166346!5m2!1ses!2sve" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="tel" id="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h3>TVCaricuao</h3>
                <p>Tu ventana alternativa a la televisión venezolana, con programación participativa, cultural y educativa.</p>
                <div class="social-links">
                    <a href="http://www.facebook.com/Tvcaricuao-299628976823830"target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/@tvcaricuaooficial1190"target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/tvcaricuao_oficial/"target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://tvcaricuao.blogspot.com/"target="_blank"><i class="fa fa-rss"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h3>Enlaces Rápidos</h3>
                <a href="#inicio">Inicio</a>
                <a href="#programas">Programas</a>
                <a href="#testimonios">Testimonios</a>
                <a href="#nosotros">Sobre Nosotros</a>
                <a href="proyectos-convenios.php">Proyectos Convenios</a>
                <a href="#contacto">Contacto</a>
            </div>
            
            <div class="footer-col">
                <h3>Contáctanos</h3>
                <p><i class="fas fa-map-marker-alt"></i> Terrazas de Caricuao Zona A, Caracas</p>
                <p><i class="fas fa-phone"></i> +58 416 9349789</p>
                <p><i class="fas fa-envelope"></i> tvcaricuao@gmail.com</p>
                <p><i class="fas fa-clock"></i> Lunes a Sabado: 9:00 AM - 8:00 PM</p>
            </div>
            
            <div class="footer-col">
                <h3>Nuestro Canal</h3>
                <p>Visita nuestro canal de YouTube para ver todos nuestros programas y contenido exclusivo.</p>
                <a href="http://www.youtube.com/@tvcaricuaooficial1190" target="_blank" class="btn btn-warning">Ver en YouTube</a>
            </div>
        </div>
        
        <div class="copyright">
            <p>&copy; 2025 TVCaricuao. Todos los derechos reservados.</p>
        </div>
    </footer>
    
    <!-- Botón flotante para volver arriba -->
    <div class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </div>
    
    <script>
        // Cambiar header al hacer scroll
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            // Mostrar u ocultar botón de scroll
            const scrollTop = document.getElementById('scrollTop');
            if (window.scrollY > 300) {
                scrollTop.classList.add('show');
            } else {
                scrollTop.classList.remove('show');
            }
        });
        
        // Desplazamiento suave al hacer clic en enlaces
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Botón para volver arriba
        document.getElementById('scrollTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Manejo del formulario
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.');
            this.reset();
        });
    </script>
     <script>
        // JavaScript para controlar el formulario
        document.addEventListener('DOMContentLoaded', function() {
            const contactBtn = document.getElementById('contact-btn');
            const contactForm = document.getElementById('contact-form');
            const closeBtn = document.getElementById('close-btn');
            const header = document.getElementById('header');
            
            // Abrir formulario
            contactBtn.addEventListener('click', function(e) {
                e.preventDefault();
                contactForm.classList.add('active');
            });
            
            // Cerrar formulario
            closeBtn.addEventListener('click', function() {
                contactForm.classList.remove('active');
            });
            
            // Cerrar al hacer clic fuera del formulario
            document.addEventListener('click', function(e) {
                if (contactForm.classList.contains('active') && 
                    !contactForm.contains(e.target) && 
                    e.target !== contactBtn) {
                    contactForm.classList.remove('active');
                }
            });
            
            // Efecto de scroll en el header
            window.addEventListener('scroll', () => {
                header.classList.toggle('scrolled', window.scrollY > 50);
            });
            
            // Prevenir envío del formulario
            document.querySelector('.contact-form').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.');
                this.reset();
                contactForm.classList.remove('active');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const overlay = document.querySelector('.video-overlay');
            const video = document.querySelector('video');
            const playIcon = document.querySelector('.play-icon');
            
            // Reproducir/pausar video al hacer clic en el overlay
            overlay.addEventListener('click', function() {
                if (video.paused) {
                    video.play();
                    overlay.style.opacity = '0';
                    playIcon.style.display = 'none';
                } else {
                    video.pause();
                    overlay.style.opacity = '1';
                    playIcon.style.display = 'block';
                }
            });
            
            // Mostrar el overlay cuando el video se pause
            video.addEventListener('pause', function() {
                overlay.style.opacity = '1';
                playIcon.style.display = 'block';
            });
            
            // Ocultar el overlay cuando el video se reproduzca
            video.addEventListener('play', function() {
                overlay.style.opacity = '0';
                playIcon.style.display = 'none';
            });
        });
    </script>
</body>
</html>
