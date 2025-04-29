<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
        <link rel="stylesheet" href="{{ asset('css/color-1.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">            

        <link rel="stylesheet" href="{{ asset('css/color-1.css') }}" class="alternate-style" title="color-1" disabled>
        <link rel="stylesheet" href="{{ asset('css/color2.css') }}" class="alternate-style" title="color2" disabled>
        <link rel="stylesheet" href="{{ asset('css/color3.css') }}" class="alternate-style" title="color3" disabled>
        <link rel="stylesheet" href="{{ asset('css/color4.css') }}" class="alternate-style" title="color4" disabled>
        <link rel="stylesheet" href="{{ asset('css/color5.css') }}" class="alternate-style" title="color5" disabled>
    <link rel="stylesheet" href="css/style-switcher.css">
</head>
<body>
    <div class="main-container">
        <div class="aside">
            <div class="logo">
                <a href="#"><span>E.</span>Andres</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
                 <!--Este es el Menú de navegación -->
            <ul class="nav">
                <li><a href="#home" class="active"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i>About</a></li>
                <li><a href="#services"><i class="fa fa-list"></i>skills</a></li>
                <li><a href="#portfolio"><i class="fa fa-briefcase"></i>Proyects</a></li>
                <li><a href="#contact"><i class="fa fa-comments"></i>Contacts</a></li>
            </ul>
        </div>
                <!--Este es el Contenido principal -->

        <div class="main-content">
            <section class="home section" id="home">
               <div class="container">
                <div class="row">
                      <!-- Esta va hacer la Información que aparecera en el sección de inicio -->
                    <div class="home-info padd-15">
                        <h3 class="hello">Bienvenido, my nombre es <span class="name">Edwin Andres</span></h3>
                        <h3 class="my-profession">I'm a <span class="typing">Programmer</span></h3>
                        <P>hola y bienvenido a mi portafolio. Aquí encontrarás información sobre mis habilidades como programador en desarrollo,
                            así como una muestra de los proyectos en los que he trabajado. Espero que disfrutes explorando mi trabajo. ¡Gracias por tu visita!</P>
                        <a href="#contact" class="btn hire-me">Contactame </a>
                        <a href="Hoja de vida-Edwin.pdf" class="btn hire-me" download="Hoja de vida-Edwin.pdf">CV</a>
                    </div>
                    <div class="home-img padd-15">
                           <!-- esta va hacer la imagen que se encontrara en el apartado de inicio -->
                           <img src="{{ asset('img/foto.jpg') }}" alt="Foto de perfil">
                    </div>
                </div>
               </div>
            </section>
            <section class="about section " id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About Me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                         <div class="row">
                            <!-- texto descriptivo sobre el los datos que puedes encontrar -->
                            <div class="about-text padd-15">
                                <h3>I´am Edwin Andres and am<span>Web Programmer</span></h3>
                                <p>Me considero una persona entusiasta y positiva, comprometida y dedicada a mi trabajo. 
                                    Busco constantemente formas de perfeccionar mis habilidades como programador.
                               con ganas de aprender nuevas tecnologías y explorar profundamente el mundo de la programación,
                               Mi objetivo es crecer y desarrollarme continuamente en este campo.</p>
                            </div>
                           </div>
                           <div class="row">
                            <div class="personal-info padd-15">
                            <div class="row">
                                <div class="info-item padd-15">
                                    <p>Git Hub: <span><a href="https://github.com/Andres-xrg">Andres-xrg</a></span></p> 
                                 </div>
                                <div class="info-item padd-15">
                                    <p>Edad: <span>17 </span></p>
                                </div>
                                <div class="info-item padd-15">
                                    <p> N° celular: <span>315 284 4774</span></p>
                                </div>
                                <div class="info-item padd-15">
                                    <p>Email: <span>edwinandresrangelgomez8@gmail.com</span></p>
                                </div> 
                                    <div class="info-item padd-15">
                                    <p>Ciudad: <span>Pereira-Risaralda</span></p>
                                 </div>
                                    <div class="info-item padd-15">
                                     <p>instagram: <span><a href="https://www.instagram.com/andrxs_xrg/">Andrxs_xrg</a></span></p>  <!-- tambien se podran encontrar mis cuentas -->
                                 </div>
                            </div>
                                <div class="row">
                                    <div class="buttons padd-15">
                                        <a href="#contact" class="btn hire-me">contactame</a>
                                    </div>
                                </div>
                                </div>
                                <div class="skills padd-15">
                                <div class="row">
                                    <div class="skills-item padd-15">
                                        <!-- Se encontrara las habilidades que he aprendido hasta ahora   -->
                                    <h5>JS</h5>
                                        <div class="progress">
                                        <div class="progress-in" style="width: 50%;"></div> <!-- Datos sobre mis habilidades  -->
                                        <div class="skill-percent"></div>
                                    </div>
                                 </div>
                                 <div class="skills-item padd-15">
                                    <h5>JAVA</h5>
                                        <div class="progress">
                                        <div class="progress-in" style="width: 50%;"></div> 
                                        <div class="skill-percent"></div>
                                    </div>
                                 </div>
                                 <div class="skills-item padd-15">
                                    <h5>PYTHON</h5>
                                        <div class="progress">
                                        <div class="progress-in" style="width: 50%;"></div> 
                                        <div class="skill-percent"></div>
                                    </div>
                                 </div>
                                 <div class="skills-item padd-15">
                                    <h5>HTML</h5>
                                        <div class="progress">
                                        <div class="progress-in" style="width: 50%;"></div> 
                                        <div class="skill-percent"></div>
                                    </div>
                                 </div>
                                 <div class="skills-item padd-15">
                                    <h5>CSS</h5>
                                        <div class="progress">
                                        <div class="progress-in" style="width: 50%;"></div> 
                                        <div class="skill-percent"></div>
                                    </div>
                                 </div>
                                 <div class="skills-item padd-15">
                                    <h5>DB</h5>
                                        <div class="progress">
                                        <div class="progress-in" style="width: 50%;"></div> 
                                        <div class="skill-percent"></div>
                                    </div>
                                 </div>
                                 <div class="skills-item padd-15">
                                    <h5>PHP</h5>
                                        <div class="progress">
                                        <div class="progress-in" style="width: 50%;"></div> 
                                        <div class="skill-percent"></div>
                                    </div>
                                 </div>
                                 <div class="skills-item padd-15">
                                    <h5>FIGMA</h5>
                                        <div class="progress">
                                        <div class="progress-in" style="width: 50%;"></div> 
                                        <div class="skill-percent"></div>
                                    </div>
                                 </div>
                                </div>
                            </div>
                           </div>
                           <div class="row">
                            <div class="education padd-15">
                                <h3 class="title">Estudios </h3>
                                <div class="row">
                                    <div class="timeline-box padd-15">
                                        <div class="timeline shadow-dark">
                                     <!-- timeline-item -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i>2022-2023
                                            </h3>
                                            <!-- se podra ver los estudios que he tenido  -->
                                            <h4 class="timeline-title">Tecnico en programacion de software</h4>
                                            <p class="timeline-text">Durante mi etapa escolar, implementé y perfeccioné una técnica de 
                                                estudio de trabajo que apliqué de manera constante durante dos años. </p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="experience padd-15">
                                <h3 class="title">Herrramientas de diseño</h3>
                                <div class="row">
                                    <div class="timeline-box padd-15">
                                        <div class="timeline shadow-dark">
                                     <!-- aca se encontrara el apartado de cuales son las herramientas que utilizo -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i>1°
                                            </h3>
                                            <h4 class="timeline-title">Visual Studio Code</h4>
                                            <p class="timeline-text">Esta Herramienta de diseño es la que suelo utilizar mas en proyectos que llevare a cabo.
                                                Esta Herramienta de programacion me parece muy accesible y comoda, ya que se acomoda a las necesidades que uno necesita 
                                                para su momento de trabajo.
                                            </p>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i>2°
                                            </h3>
                                            <h4 class="timeline-title">Git Hub</h4>
                                            <p class="timeline-text">Esta herramienta es muy util ya que aca puedo  aportar, ademas es una pagina muy agradable, que es muy 
                                                recomendada para subir tus trabajos, es una pagina que sirve mucho a la hora de guardar tus proyectos
                                            </p>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i>3°
                                            </h3>
                                            <h4 class="timeline-title">Figma</h4>
                                            <p class="timeline-text">Esta es una herramienta que utilizo con frecuencia debido a su funcionalidad para crear mockups de mis próximos proyectos.
                                                 Es una herramienta intuitiva, fácil de usar y muy práctica para simular y planificar cómo se llevarán a cabo los proyectos futuros.
                                            </p>
                                        </div>
                                            <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i>4°
                                            </h3>
                                            <h4 class="timeline-title">IntelliJ IDEA</h4>
                                            <p class="timeline-text">Esta herramienta es muy útil, ya que aquí puedo desarrollar y mejorar mis proyectos de manera eficiente
                                                Además, es un entorno de desarrollo muy agradable, altamente recomendado para programar en Java y otros lenguajes.
                                            </p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="service section " id="services">
                <div class="container">
                <div class="row">
                    <div class="section-title padd-15">
                        <h2>skills</h2>
                    </div>
                </div> 
                <div class="row">
                    <div class="service-item padd-15">
                        <div class="service-item-inner">
                            <div class="icon">
                                <i class="fa fa-mobile-alt"></i>
                            </div>
                            <h4>1° Diseño Responsivo con CSS</h4>
                            <p>Poseo conocimientos en técnicas avanzadas de CSS para crear diseños responsivos
                                Manejo el uso de porcentajes en lugar de píxeles para definir anchos, asegurando una correcta adaptación en distintos dispositivos. Además,
                                aplico reglas de CSS para gestionar el diseño adaptable, ajustando elementos según el tamaño de pantalla,
                                También utilizo media queries y flexbox para estructurar mejor el contenido, garantizando una experiencia de usuario óptima en cualquier resolución.
                            </p>
                        </div>
                    </div>
                    <div class="service-item padd-15">
                        <div class="service-item-inner">
                            <div class="icon">
                                <i class="fa fa-laptop-code"></i>
                            </div>
                            <h4>2° Creación y Manejo de Formularios</h4>
                            <p>Tengo experiencia en el desarrollo web utilizando HTML y CSS, donde manejo con solidez la creación de documentos estructurados mediante etiquetas fundamentales,
                                Puedo desarrollar formularios interactivos con validaciones en el frontend, optimizando la captura y organización de datos.
                                Además, utilizo listas ordenadas y desordenadas para estructurar información de forma clara y funcional, garantizando la accesibilidad y usabilidad en diferentes dispositivos. </p>
                        </div>
                    </div>
                    <div class="service-item padd-15">
                        <div class="service-item-inner">
                            <div class="icon">
                                <i class="fa fa-palette"></i>
                            </div>
                            <h4>3° Diseño Web Básico</h4>
                            <p>Aplico estilos personalizados utilizando CSS para mejorar la apariencia visual de las páginas web,
                                Manejo el ajuste de colores, fuentes y márgenes para crear una experiencia estética y funcional. 
                                Además, domino la aplicación de principios de diseño, como la alineación y el espaciado, para optimizar la legibilidad y el atractivo de los elementos en pantalla. 
                                Estas técnicas permiten construir interfaces intuitivas y bien organizadas, mejorando la navegación del usuario.</p>
                        </div>
                    </div>
                    <div class="service-item padd-15">
                        <div class="service-item-inner">
                            <div class="icon">
                               <i class="fa fa-code icono"></i>
                            </div>
                            <h4>4° Interactividad Básica con JavaScript</h4>
                            <p>Tengo habilidades en JavaScript para agregar interactividad y dinamismo a las páginas web,
                                Manejo eventos, manipulación del DOM y funciones básicas para realizar validaciones, cambios de contenido y efectos visuales
                                Además, aplico lógica de programación para optimizar el rendimiento del código.
                            </p>
                        </div>
                    </div>
                    <div class="service-item padd-15">
                        <div class="service-item-inner">
                            <div class="icon">
                                  <i class="fa fa-database icono"></i>
                            </div>
                            <h4>5° manejo de base de Datos</h4>
                            <p>Tengo experiencia en la gestión y manipulación de bases de datos, permitiéndome almacenar, consultar, actualizar y eliminar información de manera eficiente. 
                                Conozco principios de SQL y estructuración de datos, así como el uso de PHP para la conexión con la base de datos. Además, aplico fundamentos de normalización y optimización,
                                garantizando un acceso rápido y seguro a la información.
                            </p>
                        </div>
                    </div>
                    <div class="service-item padd-15">
                        <div class="service-item-inner">
                            <div class="icon">
                                <i class="fa fa-bezier-curve"></i>
                            </div>
                            <h4>6° Diseño de Interfaces con Figma</h4>
                            <p>Tengo habilidades en el uso de Figma para la creación de mockups y prototipos interactivos de páginas web
                                Utilizo herramientas como auto layout, componentes y variantes para estructurar diseños de manera eficiente
                                Además, me enfoco en crear interfaces atractivas y funcionales, considerando la experiencia del usuario
                                Constantemente aprendo nuevas técnicas y tendencias en diseño para mejorar mis proyectos.
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <section class="portfolio section" id="portfolio">
                <div class="container">
                  <div class="row">
                    <!-- donde se mostraran los proyectos-->
                    <div class="section-title padd-15">
                      <h2>Portfolio</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="portfolio-heading padd-15">
                      <h2>My Last Projects :</h2>
                    </div>
                  </div>
                  <div class="row">
                    @foreach (['proyecto7.png', 'Proyecto2.png', 'proyecto9.png', 'Proyecto4.png', 'proyecto8.png', 'Proyecto6.png'] as $img)
                      <div class="portfolio-item padd-15">
                        <div class="portfolio-item-inner shadow-dark">
                          <div class="portfolio-img">
                            <img src="{{ asset('img/' . $img) }}" width="95%" alt="Proyecto">
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </section>
             <!-- aca termina el apartado que viene hacer los proyectos  -->

            <!-- aca se inicia la parte que se utilizara para los contactos -->
            <section class="contact section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contacts Me</h2>
                        </div>
                    </div>
                    <h3 class="contact-title  padd-15"> Have You Any Question? </h3>
                    <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICES</h4>
                    <div class="row">
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Call Us on</h4>
                            <p>+ 57 315 284 4744</p>
                        </div>
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email</h4>
                            <p>edwinanrerangelgomez8@gmail.com</p>
                        </div>
                    </div>
                    <h3 class="contact-title padd-15"> SEND ME AN EMAIL </h3>
                    <h4 class="contact-sub-title padd-15">  I'M VERY RESPOSIVE TO MESSAGES</h4>
                    <div class="row">
                        <div class="contact-form padd-15">
                            <form action="procesar_formulario.php" method="POST">
                                <div class="row">
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" placeholder="Your message" required></textarea>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <button type="submit" class="btn">Send message</button>
                                    </div> 
                                </div>
                                
                            </form>
                        </div>
                    </div>                    
            </section>
            <!-- aca se termina el apartado de los datos sobre los contactos -->
        </div>
    </div>
    <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas fa-moon"></i>
        </div>
        <h4>Theme Colors</h4>
        <div class="colors">
            <span class="color1" onclick="setActiveStyle('color1')"></span>
            <span class="color2" onclick="setActiveStyle('color2')"></span>
            <span class="color3" onclick="setActiveStyle('color3')"></span>
            <span class="color4" onclick="setActiveStyle('color4')"></span>
            <span class="color5" onclick="setActiveStyle('color5')"></span>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js" 
            integrity="sha512-+2pW8xXU/rNr7VS+H62aqapfRpqFwnSQh9ap6THjsm41AxgA0MhFRtfrABS+Lx2KHJn82UOrnBKhjZOXpom2LQ==" 
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/style-switcher.js') }}"></script>    
</body>
</html>
