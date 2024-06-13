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
    <title>Partner support_kip</title>


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
                <button type="submit" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    echo $_SESSION["surname"];

                    ?>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./CONTROLLER//close.php">Cerrar Sesion</a></li>
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



        

        <div class="header-img-kip-learning">
            <p>DOCUMENTACTIÓN</p>
            <H1>FORMACIÓN-TÉCNICA</H1>
        </div>


        <!--start public -->
        <div class="container-public">
            <div class="img-cont">
                <img src="./IMG/kip-71.png" alt="">
            </div>
            
            <div class="text">
                <h2 class="mb-4">71G SERIES</h2>
                <br>
                <p class="mb-4">Brillantemente compacto: diseño que ahorra espacio
                    Máxima calidad de construcción para una durabilidad permanente
                    Construcción de marco de acero
                    Dura más que muchas impresoras rápidas de inyección 
                    de tinta de plástico
                    Incluye el software System K de KIP
                    Actualizaciones de software gratuitas
                    Acceso las 24 horas del día, los 7 días de la semana a tutoriales de 
                    software fáciles e informativos basados en la web
                    Capacitación virtual en vivo sobre productos para mantener a su 
                    equipo productivo</p>
                <br>
                <p>Las tecnologías de avanzada incorporadas a las impresoras KIP 
                    establecen el punto de referencia para una calidad y rendimiento 
                    comprobados. Esto garantiza que nuestras impresoras ofrezcan 
                    la máxima calidad y el mínimo costo de operación para ayudar a 
                    que su compañía sea más eficiente, productiva y rentable.
                </p>
            </div>
        </div>
        <!--end public-->

       












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