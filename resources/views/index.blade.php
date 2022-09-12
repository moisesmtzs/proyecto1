<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto 1</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

        <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" as="style" rel="preload">
        <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" as="style" rel="preload">
        <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="/assets/vendor/boxicons/css/boxicons.min.css" as="style" rel="preload">
        <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="/assets/vendor/glightbox/css/glightbox.min.css" as="style" rel="preload">

        <link href="/css/style.css" as="style" rel="preload">
        <link href="/css/style.css" rel="stylesheet">

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

    </head>
    <body>

        <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

            <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                <li><a class="nav-link scrollto" href="#about">Sobre Mí</a></li>
                <li><a class="nav-link scrollto" href="#resume">Historia</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </header>

        <section id="hero">
            <div class="hero-container">
            <h1>Moisés Martínez</h1>
            <h2>Soy un estudiante de CUCEI</h2>
            <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
            </div>
        </section>

        <main id="main">

            <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                <span>Acerca de Mí</span>
                <h2>Acerca de Mí</h2>
                <p>Estudio actualmente en el Centro Universitario de Ciencias Exactas e Ingenierías de la UDEG</p>
                </div>

                <div class="row">
                <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <div class="content ps-lg-4 d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Nombre:</strong> <span>Moisés Martínez</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Teléfono:</strong> <span>+123 456 7890</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span>Guadalajara, México</span></li>
                        </ul>
                        </div>
                        <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span>22</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Correo:</strong> <span>correo@correo.com</span></li>
                        </ul>
                        </div>
                    </div>
                    <div class="row mt-n4">
                        <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile" style="color: #20b38e;"></i>
                            <p><strong>El de la foto soy yo con mi perro</strong> y lleva siendo mi compañero por casi 2 años.</p>
                        </div>
                        </div>

                        <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-clock" style="color: #2cbdee;"></i>
                            <p><strong>Pronto me gradúo</strong> ya que me queda alrededor de un año para terminar mi carrera.</p>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="skills-content ps-lg-4">
                    <div class="progress">
                        <span class="skill">Flutter <i class="val">40%</i></span>
                        <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">C++ <i class="val">50%</i></span>
                        <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">JavaScript <i class="val">15%</i></span>
                        <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    </div>

                </div>
                </div>

            </div>
            </section>

            <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <span>Mi Historia</span>
                    <h2>Mi Historia</h2>
                    <p>Aquí se encuentra información general sobre mi vida</p>
                </div>

                <div class="row">
                    <div>
                        <h3 class="resume-title">Resumen</h3>
                        <div class="resume-item pb-0">
                            <h4>Moisés Martínez</h4>
                            <p><em>Estudiante de ingeniería en computación en el centro universitario de ingenierías de la UDEG.</em></p>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Bachillerato General por Competencias</h4>
                            <h5>2016 - 2019</h5>
                            <p><em>Escuela Preparatoria No. 10</em></p>
                            <p>Estudié durante 3 años Bachillerato General por Competencias en la Escuela Preparatoria Número 10, que forma parte también de la UDEG</p>
                        </div>
                        <div class="resume-item">
                            <h4>Ingeniería en Computación</h4>
                            <h5>2019 - </h5>
                            <p><em>Centro de Ciencias Exactas e Ingenierías</em></p>
                            <p>Aquí es donde me encuentro actualmente estudiando mi carrera, llevo alrededor de 3 años estudiando. Y la verdad es que no me arrepiento de haber escogido la carrera que elegí, puesto que me está gustando más de lo que creí</p>
                        </div>
                    </div>
                </div>

            </div>
            </section>
            
            <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                <span>Contáctame</span>
                <h2>Contáctame</h2>
                <p>Aquí te encuentras algunas maneras de poder entrar en contacto conmigo</p>
                </div>

                <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Redes Sociales</h3>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/moises.martinezs.5" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/moises._ms/?hl=es-la" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Envíame un correo</h3>
                        <p>correo@correo.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Llámame</h3>
                        <p>+1 2345 678 901</p>
                        </div>
                    </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Tu Correo" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="6" placeholder="Mensaje" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Cargando</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Tu mensaje ha sido enviado. Gracias!</div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar</button></div>
                    </form>
                </div>

                </div>

            </div>
            </section>

        </main>

        <footer id="footer">
            <div class="container">
            <h3>Moisés Martínez</h3>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
            </div>
        </footer>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <script src="/js/main.js"></script>

        </body>
</html>
