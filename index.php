<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Jardinería del Éden</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon-16x16.png" />
  <!-- Bootstrap Icons-->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
  <!-- Google fonts-->
  <!-- <link
      href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
      rel="stylesheet"
      type="text/css"
    /> -->
  <!-- SimpleLightbox plugin CSS-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
  <!-- Core theme CSS (((((8(includes Bootstrap))))-->
  <link href="css/styles.css" rel="stylesheet" />

  <!-- fuente -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans&display=swap" rel="stylesheet" /> -->

  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/MisEstilos.css" />
  <!--  -->
  <!-- Fa -->
  <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    /> -->
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand text-brand" href="#page-top">
        <img src="assets/img/logo.png" alt="" width="50px" />
        Jardinería del Éden</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto my-2 my-lg-0">
          <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#galelly">Galería</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Prodcutos</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="#">Admin</a></li> -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Admin
          </button>
        </ul>
      </div>
    </div>
  </nav>




  <!-- --------------------------------------------------------------------------------------------Modal -->
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Jardinería del Éden</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="form-signin">
            <div class="img-login mx-auto">
              <img class="mb-4 img-fluid " src="assets/img/logo.png" alt="" width="120">
            </div>
            <h1 class="h3 mb-3 font-weight-normal">Por favor, introduce las credenciales</h1>
            <!-- user -->
            <label for="inputEmail"  class="sr-only">Usuario</label>
            <input type="text" id="inputEmail" class="form-control m-3 mx-auto" placeholder="Usuario" required=""
              autofocus="">
            <!-- password -->
            <label for="inputPassword"  class="sr-only">Contraseña</label>
            <input type="password" id="inputPassword" class="form-control m-3 mx-auto" placeholder="Contraseña"
              required="">

            <!-- <button class="btn btn-lg btn-primary btn-block" type="submit" onClick="return validar()">
              Ir </button> --><!-- doesnt working -->
              <input type="button" class="btn btn-lg btn-primary btn-block" value="Ir"
              onClick="return validar()">


            <p class="mt-5 mb-3 text-muted">© 2019-2022</p>
          </form>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>








  <!-- ---------------------------------------------------------------------------------------------------------END MODAL -->
  <!-- Masthead-->
  <header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
      <div class="row gx-4 gx-lg-5 h-100 align-items-center
          justify-content-center text-center">
        <div class="col-lg-8 align-self-end">
          <h1 class="text-white font-weight-bold main-text">
            Jardinería del Éden
          </h1>
          <hr class="divider" />
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 mb-5">Vive tu vida, ¡vive tus plantas!</p>
          <a class="btn btn-primary btn-xl" href="#about">¡Ver más!</a>
        </div>
      </div>
    </div>
  </header>

  <!-- static items -->
  <div class="whatsapp">
    <a href="https://wa.me/527861015488/?text=Hola, ¿Qué tal?" target="_blank">
      <img src="assets/img/whatsapp-icon.png" alt="" width="50px" /></a>
  </div>

  <!-- Products -->

  <section class="py-5">
    <h2 class="text-center mt-0">Nuestos prodcutos</h2>
    <hr class="divider" />
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4
          justify-content-center">
        <!-- Frist one -->

        <div class="col mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Fancy Product</h5>
                <!-- Product price-->
                $40.00 - $80.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="#">View options</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
              Sale
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning
                    mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                </div>
                <!-- Product price-->
                <span class="text-muted text-decoration-line-through">$20.00</span>
                $18.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
              Sale
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Sale Item</h5>
                <!-- Product price-->
                <span class="text-muted text-decoration-line-through">$50.00</span>
                $25.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About-->
  <section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Anuncio 1</h2>
          <hr class="divider divider-light" />
          <p class="text-white-75 mb-4">
            Start Bootstrap has everything you need to get your new website up
            and running in no time! Choose one of our open source, free to
            download, and easy to use themes! No strings attached!
          </p>
          <a class="btn btn-light btn-xl" href="#services">¡Dime más!</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Services-->
  <section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
      <h2 class="text-center mt-0">Te ofrecemos...</h2>
      <hr class="divider" />
      <div class="row gx-4 gx-lg-5">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <div class="mb-2">
              <!-- <i class="bi-gem fs-1 text-primary"></i> -->
              <i class="fa-brands fs-1 fa-pagelines"></i>
            </div>
            <h3 class="h4 mb-2">Sturdy Themes</h3>
            <p class="text-muted mb-0">
              Our themes are updated regularly to keep them bug free!
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <div class="mb-2">
              <!--  <i class="bi-laptop fs-1 text-primary"></i> -->
              <i class="fa-solid fs-1 fa-seedling"></i>
            </div>
            <h3 class="h4 mb-2">Up to Date</h3>
            <p class="text-muted mb-0">
              All dependencies are kept current to keep things fresh.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <div class="mb-2">
              <!--   <i class="bi-globe fs-1 text-primary"></i> -->
              <i class="fa-solid fs-1 fa-sun-plant-wilt"></i>
            </div>
            <h3 class="h4 mb-2">Ready to Publish</h3>
            <p class="text-muted mb-0">
              You can use this design as is, or you can make changes!
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <div class="mb-2">
              <!--   <i class="bi-heart fs-1 text-primary"></i> -->
              <i class="fa-solid fs-1 fa-plate-wheat"></i>
            </div>
            <h3 class="h4 mb-2">Made with Love</h3>
            <p class="text-muted mb-0">
              Is it really open source if it's not made with love?
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio-->
  <div id="portfolio">
    <div class="container-fluid p-0">
      <div class="row g-0">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="assets/img/portfolio/thumbnails/1.jpg" title="Maceta 501">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">Macetatas</div>
              <div class="project-name">Maceta x</div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="assets/img/portfolio/thumbnails/2.jpg" title="Project Name">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">Category</div>
              <div class="project-name">Project Name</div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="assets/img/portfolio/thumbnails/3.jpg" title="Project Name">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">Macetatas</div>
              <div class="project-name">Project Name</div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="assets/img/portfolio/thumbnails/4.jpg" title="Project Name">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">Category</div>
              <div class="project-name">Project Name</div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="assets/img/portfolio/thumbnails/5.jpg" title="Project Name">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">Macetatas</div>
              <div class="project-name">Project Name</div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="assets/img/portfolio/thumbnails/6.jpg" title="Project Name">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">Category</div>
              <div class="project-name">Project Name</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Call to action-->
  <!-- <section class="page-section bg-dark text-white">
      <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4">Noticia 1</h2>
        <p class="text-white">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Reprehenderit, sed veniam debitis reiciendis impedit omnis minima
          eveniet amet dicta aspernatur, doloribus quaerat repellendus. Nihil
          molestiae distinctio dolore similique animi voluptates?
        </p>
        <a
          class="btn btn-light btn-xl"
          href="https://startbootstrap.com/theme/creative/"
          >¡Dime más!</a
        >
      </div>
    </section> -->
  <!-- ----------------------------------------------------------------------------Nosotros -->
  <!-- About-->
  <section class="page-section" id="about">
    <div class="container">
      <div class="text-center">
        <!--  <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
        <h2 class="mt-0">Nosotros</h2>
        <hr class="divider" />
      </div>
      <ul class="timeline">
        <li>
          <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." />
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <!-- <h4>2009-2011</h4> -->
              <h4 class="subheading">Misión</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">Nuestra meta es lograr la satisfacción de nuestros clientes, siendo una empresa que
                decore los hogares mexicanos con <strong> creatividad, imaginación y diseño;</strong> proporcionando a
                los clientes macetas de calidad al mejor precio y que contribuyan a mejorar su entorno ecológico.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." />
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <!--  <h4>March 2011</h4> -->
              <h4 class="subheading">Visión</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">Convertirnos en un líder nacional en floricultura, brindar a los clientes productos
                y servicios de la mejor calidad, y <strong>asegurar siempre el bienestar de nuestros colaboradores,
                  clientes y proveedores. " </strong></p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." />
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <!-- <h4>December 2015</h4> -->
              <h4 class="subheading">Filosofía</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">Para nosotros, transmitir lo tus gustos con nuestras masetas es aquello que guía
                nuestro trabajo. Y si para ello tenemos que buscar a los mejores artesanos/fabricantes, visitar las
                ferias más importantes del sector, y formarnos continuamente en nuevas tendencias, lo hacemos.
                <strong>Y nos encanta.</strong>

              </p>

            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." />
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Julio 2019 - ♾️</h4>
              <h4 class="subheading">Nuestra historia</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">Lorem ipsum dolor
                sit amet, consectetur adipisicing elit. Sunt ut voluptatum
                eius sapiente, totam reiciendis temporibus qui quibusdam,
                recusandae sit vero unde, sed, incidunt et ea quo dolore
                laudantium consectetur!</p>
            </div>
          </div>
        </li>

      </ul>
    </div>
  </section>


























  <!-- Contact-->
  <section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-8 col-xl-6 text-center">
          <h2 class="mt-0">¡Contactanos!</h2>
          <hr class="divider" />
          <p class="text-muted mb-5">Queremos escuchar lo que pensas...</p>
        </div>
      </div>
      <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
        <div class="col-lg-6">
          <!-- * * * * * * * * * * * * * * *-->
          <!-- * * SB Forms Contact Form * *-->
          <!-- * * * * * * * * * * * * * * *-->
          <!-- This form is pre-integrated with SB Forms.-->
          <!-- To make this form functional, sign up at-->
          <!-- https://startbootstrap.com/solution/contact-forms-->
          <!-- to get an API token!-->
          <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <!-- Name input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="name" type="text" placeholder="Escribe tu nombre..."
                data-sb-validations="required" />
              <label for="name">Nombre completo</label>
              <div class="invalid-feedback" data-sb-feedback="name:required">
                Se requiere un nombre.
              </div>
            </div>
            <!-- Email address input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="email" type="email" placeholder="nombre@eejemplo.com"
                data-sb-validations="required,email" />
              <label for="email">Dirección de email</label>
              <div class="invalid-feedback" data-sb-feedback="email:required">
                Se requiere un email.
              </div>
              <div class="invalid-feedback" data-sb-feedback="email:email">
                El email no es valido.
              </div>
            </div>
            <!-- Phone number input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                data-sb-validations="required" />
              <label for="phone">Número de telefono</label>
              <div class="invalid-feedback" data-sb-feedback="phone:required">
                Se requiere un número de telefono.
              </div>
            </div>
            <!-- Message input-->
            <div class="form-floating mb-3">
              <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                style="height: 10rem" data-sb-validations="required"></textarea>
              <label for="message">Mensaje</label>
              <div class="invalid-feedback" data-sb-feedback="message:required">
                Se require un número de telefono.
              </div>
            </div>
            <!-- asunto -->
            <div class="form-floating mb-3">
              <select name="asunto" id="asunto" class="form-control">
                <option value="Negocios">Negocios</option>
                <option value="Compra">Compra</option>
                <option value="Otro...">Otro..</option>
              </select>
              <label for="asunto">Asunto</label>
              <!--  <div class="invalid-feedback" data-sb-feedback="message:required">Se require un número de telefono.</div> -->
            </div>

            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
              <div class="text-center mb-3">
                <div class="fw-bolder">
                  ¡Formulario enviado existosamente!
                </div>
                To activate this form, sign up at
                <br />
                <a
                  href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
              </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
              <div class="text-center text-danger mb-3">
                !Error enviando el mensaje!
              </div>
            </div>
            <!-- Submit Button-->
            <div class="d-grid">
              <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">
                Enviar
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-4 text-center mb-5 mb-lg-0">
          <i class="fa-solid fs-1 fa-mobile-screen-button"></i>
          <div>+52 (786) 1015488</div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <h1 class="text-center mt-0">Encuentranos aqui</h1>
    <hr class="divider" />
    <div class="map" id="contact">
      <iframe
        src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>

    </div>
  </section>


  <!-- meet the team -->
  <!-- Testimonials-->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">What people are saying...</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
            <h5>Margaret E.</h5>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
            <h5>Fred S.</h5>
            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice
              landing pages."</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
            <h5>Sarah W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Footer-->
  <!-- <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Jardinería del Éden</div></div>
        </footer> -->
  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>Contactanos</h4>
            <div class="contact_link_box">
              <a href="https://goo.gl/maps/AFLsBTwAWwEGr1636" target="_blank">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Ubicación </span>
              </a>
              <a href="https://wa.me/527861015488/?text=Hola, ¿Qué tal?" target="_blank">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span> Llama +52 786 1015488 </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> jardinera.eden@gmail.com </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo"> Jardinería del Éden </a>
            <p>Vive tu vida, vive tus plantas</p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>Horario</h4>
          <p>Todos los días</p>
          <p>10.00 Am - 10.00 Pm</p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> Todos los derecho reservados -
          <i>Jardinería del Éden</i>
          <!-- <a href="https://html.design/">Free Html Templates</a><br><br> -->
          <!--   &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a> -->
        </p>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- SimpleLightbox plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <!-- fonts -->
  <script src="https://kit.fontawesome.com/0c7e5557d4.js" crossorigin="anonymous"></script>
  <!-- login -->
  <script src="js/validar_login.js"></script>
</body>

</html>