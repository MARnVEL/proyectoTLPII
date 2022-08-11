<?php

    include "php/conexion.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conductores</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link rel="stylesheet" href="css/log in estilo.css">

    <!-- Bootstrap core CSS -->
    <link href="./Carousel Template · Bootstrap v5.1_files/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png"
        sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32"
        type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16"
        type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg"
        color="#7952b3">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    


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

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong fixed-top">
            <div class="container-fluid">
                <a style="color: #f79600;" class="navbar-brand"
                    href="Carousel Template · Bootstrap v5.1.php">We Travel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a style="color: #f79600;" class="nav-link active" aria-current="page"
                                href="institucional.html"> Sobre Nosotros </a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #f79600;" class="nav-link"
                                href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #f79600;" class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop2">
                    AGREGAR VIAJE
                    </button>
                    <button type="buton" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">CERRAR SESIÓN</button>
                    <!-- <div class="d-flex">
                  
                </div>
                <form>
                  <button type="buton class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">INICIAR SESIÓN</button>
                </form> -->
                </div>
            </div>
        </nav>
    </header>

    <!-- MODAL PARA AGREGAR VIAJE -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdrop2Label">DATOS DEL VIAJE</h5>
                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form id="form">

                        <div class="mb-1">
                            <label for="userName" class="form-label">
                                <p class="mb-1">Apellido y Nombre:</p>
                                <input type="text" class="form-control" id="userName" aria-describedby="userHelp"
                                    placeholder="Apellido/s, Nombre/s">
                                <div id="userHelp" class="form-text">Ingrese su/s Apellido/s y
                                    Nombres/s</div>
                                <!-- <input type="text" hidden> -->
                            </label>
                        </div>
                        
                        <!-- <section>
                            <div class="selector" id="selectorOrigen">
                                <h3 style="color: #000;">Indíquenos desde donde viajará</h3>
                                <div class="col-md-4 mb-4">
                                    <select class="select" onclick="cargarSelect()" id="provinciasOrigen">
                                    </select>
                                  </div>
                                  <div class="col-md-4 mb-4">
                                    <select class="select" id="departamentosOrigen"></select>
                                  </div>
                                  <div class="col-md-4 mb-4">
                                    <select class="select" id="localidadesOrigen"></select>
                              </div>
                            </div>
    
                            <div class="selector" id="selectorDestino">
                                <h3 style="color: #000;">Indíquenos cuál es su orígen</h3>
                                <div class="col-md-4 mb-4">
                                    <select class="select" onclick="cargarSelect()" id="provinciasDestino">
                                    </select>
                                  </div>
                                  <div class="col-md-4 mb-4">
                                    <select class="select" id="departamentosDestino"></select>
                                  </div>
                                  <div class="col-md-4 mb-4">
                                    <select class="select" id="localidadesDestino"></select>
                              </div>
                            </div>
                        </section> -->
                        

                        <div class="mb-1">
                            <fieldset>
                                <label for="descripcionViaje" class="form-label">
                                    <p class="mb-1">Decribe el viaje: </p>
                                    <textarea name="comentarios" id="textArea" cols="30" rows="10"
                                        placeholder="Viajo a ... para..."></textarea><br>
                                    <!-- <input type="text" class="form-control" id="descripcionTarea" aria-describedby="tarealHelp" placeholder="TAREA"> -->
                                    <div id="descripcionTarea" class="form-text">Ingrese una descripción 
                                        vije!
                                    </div>
                                </label>
                            </fieldset>
                        </div>


                        <div>
                            <p class="mb-1">COSTO: </p>
                            <label for="selectorCostoViaje">
                                <select class="form-select" aria-label="Default select example" id="selectorCostoViaje"
                                    aria-describedby="selectorCostoViajeHelp">

                                    <option value="Efectivo">Efectivo</option>
                                    <option value="Otro">Otro</option>
                                    <option value="Gratis">Gratis</option>

                                </select>
                            </label>

                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="botonViaje" data-bs-dismiss="modal">
                        AGREGAR VIAJE</button>
                    <button type="button" class="btn btn-secondary" id="botonDescartar"
                        data-bs-dismiss="modal">DESCARTAR</button>

                </div>
            </div>
        </div>
    </div>

    <!-- MODAL PARA EDITAR CONDUCTOR -->
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdrop3Label">TAREA A EDITAR</h5>
                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form id="formularioEditar">

                        <div class="mb-1">
                            <label for="userNameEditar" class="form-label">
                                <p class="mb-1">Apellido y Nombre:</p>
                                <input type="text" class="form-control" id="userNameEditar" aria-describedby="userHelp"
                                    placeholder="Apellido/s, Nombre/s">
                                <div id="userHelp" class="form-text">Ingrese su/s Apellido/s
                                    y Nombres/s</div>
                                <!-- <input type="text" hidden> -->
                            </label>
                        </div>




                        <div class="mb-1">
                            <fieldset>
                                <label for="descripcionTareaEditar" class="form-label">
                                    <p class="mb-1">Tarea: </p>
                                    <textarea name="comentarios" id="descripcionTareaEditar" cols="30" rows="10"
                                        placeholder="Tareas..."></textarea><br>
                                    <!-- <input type="text" class="form-control" id="descripcionTarea" aria-describedby="tarealHelp" placeholder="TAREA"> -->
                                    <div id="descripcionTareaEditar" class="form-text">Ingrese
                                        la
                                        descripción de la tarea</div>
                                </label>
                            </fieldset>



                        </div>


                        <div>
                            <p class="mb-1">ESTADO: </p>
                            <label for="selectorEditarEstadoTarea">
                                <select class="form-select" aria-label="Default select example"
                                    id="selectorEditarEstadoTarea" aria-describedby="selectorEstadoHelp">

                                    <option value="Pendiente">Pendiente</option>
                                    <option value="En progreso">En progreso</option>
                                    <option value="Completado">Completado</option>

                                </select>
                            </label>

                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="botonEditar" data-bs-dismiss="modal">GUARDAR
                        CAMBIOS</button>
                    <button type="button" class="btn btn-secondary" id="botonDescartar"
                        data-bs-dismiss="modal">DESCARTAR CAMBIOS</button>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content page-container" id="page-content">
        <div class="padding">
            
        </div>
    </div>

    <main>

        
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div style="height: 46.3rem;" class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777"></rect>
                    </svg>
                    <img style="height: 47rem;" src="./media/img/rutaFondo.jpg" alt="Ruta y desierto" srcset="">
                </div>
                <div class="row container d-flex justify-content-center">
                    <div class="col-lg-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 style="color: #000;">TUS VIAJES</h3>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="htmlTable" class="table">
                                    </table>  
                                </div>

                                <div id="cardMartin" style="display: flex !important">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


            
        </div>
        
        
        <!-- FOOTER -->
        <footer class="container">
            <p>© 2022 EMY Core, Inc. · <a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Privacy</a> · <a
                    href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Terms</a></p>
        </footer>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uuid/8.3.2/uuid.min.js"></script>

    <script src="./Carousel Template · Bootstrap v5.1_files/bootstrap.bundle.min.js.descarga"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->


    <script src="js/agregarTarjeta.js"></script>

    
    
</body>
</html>