<?php
session_start();
if (!empty($_SESSION["id"])) {
    header("./login.php");
}else{
    if ((time() - $_SESSION['time']) > 40) {
        header("location: ./login.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./CSS/style.css">
    <title>KIP Serie 71</title>

    <!--FRAMEWORK BOOSTSTRAP-->
    <link rel="stylesheet" href="./CSS/framework/bootstrap.css">
    <!--FRAMEWORK BOOSTSTRAP-->

</head>
<body>
    
    <nav>
        <div class="logo">
            <a href="./panel_gc.php">Virtual Technical Education</a>
        </div>
        <ul id="menuList">
            <li></li>
            <li><a href="./serie_71_.php">KIP Serie 71</a></li>
            <li><a href="./sistema_kip_k.php">Sistema KIP K</a></li>

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <?php
                echo $_SESSION["surname"];
                ?>  
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
                </ul>
              </div>
              
        </ul>
        <div class="menu-icon">
            <i class="bx bx-menu" onclick="toggleMenu()"></i>
        </div>
    </nav>

    <script>
        let menuList = document.getElementById("menuList")
        menuList.style.maxHeight = "0px";

        function toggleMenu(){
            if(menuList.style.maxHeight == "0px")
            {
                menuList.style.maxHeight = "300px";
            }
            else{
                menuList.style.maxHeight = "0px";
            }
        }
    </script>

        
        <div class="header-img-kip-serie">
            <p>DOCUMENTACTIÓN</p>
            <H1>FORMACIÓN-TÉCNICA</H1>
        </div>


        <div class="title-boletin">
            <h4>Boletines Técnicos</h4>
        </div>
        
        <div class="container-general-guias">
            
            <div class="card mb-3" style="max-width: 500px; max-height: 300px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img width="100%" src="./IMG/file.svg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Manual de Servicio</h5>
                    <p class="card-text">Este manual de servicio incluye información básica sobre la impresora multifunción KIP serie 71</p>
                    <a href="https://drive.google.com/file/d/17XtEFPBwMqjBi0UdsGY-c61qOtJnydct/view?usp=drive_link"><small class="text-body-secondary">Echar un Vistazo</small></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="linear"></div>

            <div class="card mb-3" style="max-width: 500px; max-height: 300px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img width="100%" src="./IMG/file.svg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Introducción Tecnológica</h5>
                    <p class="card-text">Este manual de servicio incluye información básica Introducción y Educación Tecnológica</p>
                    <a href="./General_guias/TB-K134G-001+Intro-Tech+Education.pdf"><small class="text-body-secondary">Echar un Vistazo</small></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="linear"></div>

            <div class="card mb-3" style="max-width: 500px; max-height: 300px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img width="100%" src="./IMG/file.svg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Software KIP System K</h5>
                    <p class="card-text">Este manual de servicio incluye información TB-K134G-002 Software KIP System K versión 3.1</p>
                    <a href="./General_guias/TB-K134G-002+KIP+System+K+Software+Ver+3.1.pdf"><small class="text-body-secondary">Echar un Vistazo</small></a>
                    </div>
                </div>
                </div>
            </div>

            <!--SPACE-->

            <div class="card mb-3" style="max-width: 500px; max-height: 300px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img width="100%" src="./IMG/file.svg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Mejora de Producto</h5>
                    <p class="card-text">Este manual de servicio incluye información básica sobre TB-K134G-006 Mejora del producto - Pantalla táctil</p>
                    <a href="./General_guias/TB-K134G-006+Product+Enhancement+-+Touchscreen.pdf"><small class="text-body-secondary">Echar un Vistazo</small></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="linear"></div>

            <div class="card mb-3" style="max-width: 500px; max-height: 300px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img width="100%" src="./IMG/file.svg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Panel Táctil</h5>
                    <p class="card-text">Este manual de servicio incluye información básica sobre TB-K134G-008a Panel táctil - Respuesta aleatoria sin contacto</p>
                    <a href="./General_guias/TB-K134G-008a+Touch+panel+Random+no+touch+response.pdf"><small class="text-body-secondary">Echar un Vistazo</small></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="linear"></div>

            <div class="card mb-3" style="max-width: 500px; max-height: 300px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img width="100%" src="./IMG/file.svg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Firmware</h5>
                    <p class="card-text">Este manual de servicio incluye información básica sobre TB-K134G-004 Firmware de la impresora FWU-04</p>
                    <a href="./General_guias/TB-K134G-004+Printer+Firmware+FWU-04.pdf"><small class="text-body-secondary">Echar un Vistazo</small></a>
                    </div>
                </div>
                </div>
            </div>


            
        </div>



        <!--START CARDS-->
        
        <div class="title-boletin">
            <h4>Videos Técnicos</h4>
        </div><br>
        <br>

        
        <div class="container-card-mp4">
        
            <div class="card" style="width: 18rem;">
            <a href="https://youtu.be/Dzdeo2kmVMw">
                <img src="./IMG/PRUE.png" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">Desembalaje</p>
            </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="https://youtu.be/dPgcRiXtoro">
                <img src="./IMG/PRUE.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Roll Off</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="https://youtu.be/27af0162AgY">
                <img src="./IMG/PRUE.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Machine Setup</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="https://youtu.be/SZKncXz_X0w">
                <img src="./IMG/PRUE.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Cutter Removal</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="https://youtu.be/WZDsFNx5dvE">
                <img src="./IMG/PRUE.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Developer Unit</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="https://youtu.be/l4BKHyaqD6Q">
                <img src="./IMG/PRUE.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Drum Removal</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>
          
          <div class="card" style="width: 18rem;">
            <a href="https://youtu.be/OWynRNpC7tE">
                <img src="./IMG/PRUE.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Fuser</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="https://youtu.be/XrYvF3TX_Lo">
                <img src="./IMG/PRUE.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Image Corona</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="https://youtu.be/9MCNuBRATRs">
                <img src="./IMG/PRUE.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">LED Head Removal</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="https://youtu.be/goBymh2RvyU">
                <img src="./IMG/PRUE.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Trasfer-Separation</p>
                </a>
                </div>
          </div>

         

        </div>
          <!--END CARDS-->




          <!--START FOOTER-->
          <div class="container-fluid" style="display: flex; justify-content: center; margin-top: 50px;">
            <div class="row">
                <div class="">
                    <p style="color: black;" class="m-0">Support Kip 71
                        &copy;  Todos los derechos reservados. XDV® | Designed by <a href="" style="color: blue;">XDV</a>
                    </p>
                    <br>
                    <div class="linear"></div>
                    <div style="display: flex; justify-content: center;" class="icons">
                        <img style="width: 40px;" src="./IMG/linkdin.svg" alt="">
                        <img style="width: 40px;" src="./IMG/wp.svg" alt="">
                        <img style="width: 40px;" src="./IMG/instagram.svg" alt="">                                
                    </div>

                </div>
            </div>
        </div>
        <!--START FOOTER-->





        <!--SCRIPT JS-->
        <script src="./JS/nav.js"></script>
        <script src="./JS/main.js"></script>
        <script src="./JS/Bootstrap.js"></script>
        <!--SCRIPT JS-->
</body>
</html>