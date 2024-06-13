<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLOSE</title>
</head>
<body>


        <?php
            session_start();
            session_destroy();
        
        ?>



        <h6>SE HA CERRADO LA SESION POR INACTIVIDAD</h6>
        <a href="./login.php">VOLVER A INGRESAR</a>


        
    
</body>
</html>