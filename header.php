<!-- Codigo que tiene el header -->
<header>
    <!-- Icono que redirecciona al index -->
    <a href='index.php'><img src="./assets/img/logo.ico" class="logo"></a>
    <!-- div con la clase toggle -la hamburgesita-  -->
    <div class="toggle" onclick="toggleMenu();"></div>
    <ul class="navigation">

        <?php
        if (isset($_SESSION['nick'])) { //si la sesion no esta cerrada
            // guardamos en la variable nick el contenido guardado en la variable SESSION
            $nick = $_SESSION['nick'];
            // Saludamos al usuario logeado
            echo "<li>Hola!  " . $nick . "</li>";
            echo "<li><a href='logout.php'>Log out</a></li>"; //la opcion para cerrar sesion
            echo "<li><a href='areaUsuario.php'>Area Usuario</a></li>"; //la opcion para cerrar sesion
            echo "<li><a href='servicios.php'>Servicios</a></li>"; //la opcion para cerrar sesion

        } else { //en Caso de que la sesion no este iniciada
            // link al login
            echo "<li><a href='SignIn.php'>Login</a></li>";
        }
        ?>
    </ul>
    <!-- script del toggle -la hamburgesita-  -->
    <script type="text/javascript" src="./assets/Js/toggle.js"></script>
</header>