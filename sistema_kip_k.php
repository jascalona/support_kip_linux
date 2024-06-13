<?php
session_start();
if (!empty($_SESSION["id"])) {
    header("./login.php");
} else {
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
    <title>Sistema KIP K</title>


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



        

        <div class="header-img-sistema-kip">
            <p>DOCUMENTACTIÓN</p>
            <H1>FORMACIÓN-TÉCNICA</H1>
        </div>


        <div class="title-boletin">
            <h4>Sistema KIP K</h4>
        </div>


        <!--START CARDS-->

        <div class="container-system">

        <div class="container-card-sistem-k">
        
            <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/INTERFAZ DE IMPRESION.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">Interfaz de Impresión</p>
            </a>
                </div>
          </div>
          <br>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/IMPRESION DE MUESTRAS.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Impresión de Muestra</p>
                </a>
                </div>
          </div>
          <br>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/IMPRESION SIMULTANEA.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Impresión Simultanea</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/VISTA EMERGENTE Y HERRAMIENTAS.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Vista Emergente y Herramientas</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/INSTALACION DE DRIVER.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Instalación de Driver</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/INSTALACION DE EQUIPO DEMO.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Instalación de Equipo Demo</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>
          
          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/ANIDAMIENTO.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Anidamiento</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/COMO ACTUALIZAR USANDO UN PARCHE DE SEGURIDAD.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Como Actualizar Usando Parche de Seguridad</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/CONFIGURACION DE KAC CONTABILIDAD.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Configuración KAC Contabilidad</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/CONFIGURACION DE KAC CONTABILIDAD LDAP.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Configuración KAC Contabilidad LDAP</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/Configuracion del buzon scan kip71.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Configuración de Buzón KIP</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/COPIA DE SEGURIDAD Y RESTAURACION.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Copia de Seguridad y Restauración</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/PLANTILLAS.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Creación de Plantillas</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/FUNCIONES DE CONFIGURACION Y SERVICIOS PARTE 1.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Funciones de Configuración y Servicios I </p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/FUNCIONES DE CONFIGURACION Y SERVICIOS PARTE 2.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Funciones de Configuración y Servicios II </p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/RESTAURACION INTERNA.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Restauración Interna</p>
                </a>
                </div>
          </div>

          <div class="linear"></div>

          <div class="card" style="width: 18rem;">
            <a href="./sistema_kip/PERZONALIZACION DE LA INTERFAZ DE USUARIO.pdf">
                <img src="./IMG/sistemk.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">PERZONALIZACION DE LA INTERFAZ DE USUARIO</p>
                </a>
                </div>
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