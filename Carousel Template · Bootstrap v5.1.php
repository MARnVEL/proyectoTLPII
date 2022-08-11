<?php

include "php/conexion.php";

// $id_seccion = (isset($_POST['id_seccion'])) ? $_POST['id_seccion'] : 1;

// $sql = "Select * From seccion";
// $secciones = $conn->query($sql)->fetchAll(); 

// $sql = "Select * From noticia Where rela_idseccion = $id_seccion";
// $noticias = $conn->query($sql)->fetchAll(); 

?>



<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html" ; charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Compañeros de viaje</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
  <link rel="stylesheet" href="css/log in estilo.css">


  <!-- Bootstrap core CSS -->
  <link href="./Carousel Template · Bootstrap v5.1_files/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
      crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png"
     sizes="180x180">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" 
    sizes="32x32" type="image/png">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" 
    sizes="16x16" type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg"
     color="#7952b3">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="./Carousel Template · Bootstrap v5.1_files/carousel.css" rel="stylesheet">

</head>

<body>

  <!-- MODAL PARA ALERTA -->

  <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FELICITACIONES REGISTRO EXITOSO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-success" role="alert">
          Bienvenido!!! Ahora inicia sesión para poder encontrar un compañero de viaje
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- MODAL DE REGISTRO -->
  <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdrop2Label" style="color: #000;">Registrate para cargar tus viajes</h5>
          <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close" id="botonRegistro"></button>
        </div>
        <div class="modal-body">
          <section class="h-100 bg-ligth">

            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                  <div class="card card-registration my-4">
                    <div class="row g-0">
                      <div class="col-xl-6 d-none d-xl-block">
                        <img src="media/img/empresas-que-envian-equipaje2.jpg" alt="Sample photo" class="img-responsive fit-image" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                      </div>
                      <div class="col-sm-6">
                        <div class="card-body p-md-5 text-black">
                          <h3 class="mb-5 text-uppercase">Registro</h3>

                          <form id="formularioRegistro" action="./php/registro.php" method="post">
                            <div class="row">
                              <div class="form-outline">
                                <div class="form-outline">
                                  <input type="text" id="nombreUsuario" name="nombreUsuario" class="form-control form-control-lg" />
                                  <label class="form-label" for="nombreUsuario">Nombre/s</label>
                                </div>
                              </div>
                              <div class="form-outline">
                                <div class="form-outline">
                                  <input type="text" id="apellidoUsuario" name="apellidoUsuario" class="form-control form-control-lg"/>
                                  <label class="form-label" for="apellidoUsuario">Apellido/s</label>
                                </div>
                              </div>
                            </div>

                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                            </div>

                            

                            <!-- <div class="col-md-4 mb-4">
                              <select class="select" onclick="cargarSelect()">
                                <option value="1">Tipo de usuario</option>
                                <option value="2">Pasajero</option>
                                <option value="3">Conductor</option>
                              </select>
                            </div> -->

                            <div class="form-outline mb-4">
                              <input type="text" id="email" class="form-control form-control-lg" name="email" />
                              <label class="form-label" for="email">Email</label>
                            </div>

                            <div class="row">
                              <div class="form-outline mb-4">
                                <div class="form-outline">
                                  <input type="password" id="password" class="form-control form-control-lg" name="password" />
                                  <label class="form-label" for="password">Contraseña</label>
                                </div>
                              </div>
                              <div class="form-outline mb-4">
                                <div class="form-outline">
                                  <input type="password" id="passwordConfirm" class="form-control form-control-lg" name="passwordConfirm" />
                                  <label class="form-label" for="passwordConfirm">Repetir contraseña</label>
                                </div>
                              </div>
                            </div>

                            <div class="d-flex justify-content-center pt-3">
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                              <button type="submit" id="botonRegistro" class="btn btn-primary btn-lg ms-2">Registrarse</button>
                            </div>
                          </form>

                          <div class="mt-3" id="respuestaRegistro">

                          </div>


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>


  <!-- MODAL DE INICIO DE SESIÓN -->
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">INICIAR SESIÓN</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="./php/login.php" method="post">
            <div class="mb-1" style="display: flex; justify-content:center">
              <label for="userName" class="form-label">
                <p class="mb-1">Usuario:</p>
                <input type="text" class="form-control" id="userNameMail" aria-describedby="userHelp" placeholder="E-mail o Usuario" name="email">
                <div id="userlHelp" class="form-text">Ingrese el nombre de su usuario o su e-mail</div>
              </label>
            </div>

            <div class="mb-1" style="display: flex; justify-content:center">
              <label for="exampleInputPassword1" class="form-label">
                <p class="mb-1">Contraseña:</p>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="password">
                <div id="pwdlHelp" class="form-text">Ingrese su contraseña</div>
              </label>

            </div>
            
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Recordar E-mail</label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CANCELAR</button>
              <input type="submit" value="INGRESAR" class="btn btn-primary" name="ingresar">
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>


  <header>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong fixed-top">
      <div class="container-fluid">
        <a style="color: #f79600;" class="navbar-brand" href="#">We Travel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a style="color: #f79600;" class="nav-link active" aria-current="page" href="institucional.html">Sobre Nosotros</a>
            </li>
            
          </ul>
          <button type="buton" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">INICIAR SESIÓN</button>
          <!-- <div class="d-flex">
            
          </div>
          <form>
            <button type="buton class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">INICIAR SESIÓN</button>
          </form> -->
        </div>
      </div>
    </nav>



  </header>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      
      <div class="carousel-inner">
        <div style="height: 46.3rem;" class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777"></rect>
          </svg>
          <img style="height: 47rem;" src="./media/img/rutaFondo.jpg" alt="Ruta y desierto" srcset="">

          <div class="container">
            <div class="carousel-caption">
              <h1 style="color: black;">Te acompañamos en tu camino</h1>
              <p style="color: black;">Elige la forma en la que quieres viajar:</p>
              <p style="margin-bottom: 15rem;">

                <a class="btn btn-lg btn-success" href="tarjetasParaPasajeros.html" target="a_blank">Acompañante</a>
                <a class="btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" href="#">
                  Conductor</a>
              </p>
            </div>
          </div>
        </div>
        <!-- <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777"></rect>
          </svg>
          <img src="./media/img/camionetaYGente.jpeg" alt="Personas al lado de una camioneta gris" srcset="">

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Browse
                  gallery</a></p>
            </div>
          </div>
        </div> -->
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->

    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <h2>Testimonios</h2>
        <div class="col-lg-4">
          <img style="border-radius: 150px;" src="media/img/Diego.png" alt="">

          <h2>Diego</h2>
          <p>Como estudiante no cuento con mucho dinero para viajar, pero gracias a We Travel encontre personas que me lleven al interior a un buen precio.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img style="border-radius: 150px;" src="media/img/Maria.png" alt="">

          <h2>Maria</h2>
          <p>Trabajo en la ciudad y me gusta ir los fines de semana al interior para visitar a mis nietos, We Travel me ayudo a encontrar personas que viajan al interior y necesitan compañia.
          </p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img style="border-radius: 150px;" src="media/img/Evaristo.jpg" alt="">

          <h2>Evaristo</h2>
          <p>Todos los dias voy desde la ciudad hasta el interior, estaba buscando como generar ingresos y descubri We Travel, ahora viajo con personas, gano dinero y no viajo solo.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Una manera economica de viajar. <span class="text-muted">Cuidamos tu economia.</span>
          </h2>
        </div>
        <div class="col-md-5">
          <img src="media/img/chica viaje.png" alt="">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Genera ingresos conduciendo. <span class="text-muted">viaja acompañado.</span></h2>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="media/img/mano billetes.jpg" alt="">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Conectamos a los que quieren viajar.
            <span class="text-muted">De forma segura y pagando con dinero o servicios.</span>
          </h2>
        </div>
        <div class="col-md-5">
          <img src="media/img/Conductor con acompañante.png" alt="">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p>© 2022 EMY Core, Inc. · <a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Privacy</a> · <a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Terms</a></p>
    </footer>

  </main>


  <script src="./Carousel Template · Bootstrap v5.1_files/bootstrap.bundle.min.js.descarga" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <!-- <script src="js/validaciones.js"></script> -->
  <!-- <script src="js/selects.js"></script> -->
  <script src="js/selects.js"></script>

  <script src="js/validaciones.js"></script>





</body>

</html>