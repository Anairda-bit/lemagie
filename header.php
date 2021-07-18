<!-- Codigo que tiene el header -->
<header>
    <a href='index.php'><img src="./assets/img/logo.ico" class="logo"></a>
    <ul>

        <?php
        if (isset($_SESSION['nick'])) { //si la sesion no esta cerrada
            $nick = $_SESSION['nick'];
            echo "<li>Hola!  " . $nick . "</li>";
            echo "<li><a href='logout.php'>Log out</a></li>"; //la opcion para cerrar sesion
            echo "<li><a href='areaUsuario.php'>Area Usuario</a></li>"; //la opcion para cerrar sesion

        } else {
            echo "<li><a href='SignIn.php'>Login</a></li>";
        }
        ?>
    </ul>

</header>