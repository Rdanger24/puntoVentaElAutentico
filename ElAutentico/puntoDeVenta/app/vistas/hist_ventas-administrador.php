<?php 
    session_start();
    ob_start();

    if($_SESSION['sesion'] <>1)
    {
      header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../public/imagenes/LogoFoodTruck.jpg">
    <script src="../../public/js/jquery-3.7.1.min.js"></script>
    <script src="../../public/js/logOut.js"></script>
    

    <title>Historial ventas Administrador</title>

    <!-- ====================== ESTILOS CSS ==================== -->
    <link rel="stylesheet" href="../../public/css/ccs/carta-administrador.css">
    <!-- ====================== JS ==================== -->
    <script src="../../public/js"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>

<body>
 
    <!-- -------- BARRA DE NAVEGACION ------- -->
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="logo">
                <a href="../../app/vistas/carta-administrador.php" class="nav-link-menu">
                    <span class="link-icon"><ion-icon name="menu-outline"></ion-icon></i></span>
                    <span class="link-text">Menu</span>
                </a>
            </li>

            <!-- -------- ITEMS DE BARRA DE NAVEGACION ------- -->
            <li class="nav-item">
                <a href="../../app/vistas/carta-administrador.php" class="nav-link">
                    <span class="link-icon"><ion-icon name="fast-food-outline"></ion-icon></i></span>
                    <span class="link-text">Carta</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../app/vistas/inventario-administrador.php" class="nav-link">
                    <span class="link-icon"><ion-icon name="clipboard-outline"></ion-icon></i></span>
                    <span class="link-text">Inventario</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../app/vistas/hist_ventas-administrador.php" class="nav-link">
                    <span class="link-icon-io"><ion-icon name="book-outline"></ion-icon></i></span>
                    <span class="link-text">Historial Ventas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../app/vistas/usuarios-administrador.php" class="nav-link">
                    <span class="link-icon"><ion-icon name="body"></ion-icon></i></span>
                    <span class="link-text">Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../app/vistas/reporte_ventas-administrador.php" class="nav-link">
                    <span class="link-icon"><ion-icon name="document"></ion-icon></i></span>
                    <span class="link-text">Reporte Ventas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../app/vistas/carta-vendedor.php" class="nav-link">
                    <span class="link-icon"><ion-icon name="person-outline"></ion-icon></i></span>
                    <span class="link-text">Vista vendedor</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="confirmarCerrarSesion();">
                    <span class="link-icon"><ion-icon name="log-in-outline"></ion-icon></i></span>
                    <span class="link-text">Cerrar Sesión</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Contenido principal que deseas desenfocar -->
    <main class="contenido-a-desenfocar">

        <!-- Barra de busqueda y usuario -->
        <div class="barra-busqueda">
            <div class="entrada-busqueda">
                <input type="text" placeholder="Buscar por fecha">
                <ion-icon name="search" class="icono-busqueda"></ion-icon>
            </div>
            <div class="vendedor">
                <ion-icon name="person" class="icono-vendedor"></ion-icon>
                <span class="nombre-vendedor"><?php echo $_SESSION['nombre'].' '.$_SESSION['apellido'] ?></span>
            </div>
        </div>

        <div class="tabla-inventario">
            
            <table class="table">
                <thead>
                    <tr>
                        <th>Id Venta</th>
                        <th>Nombre Vendedor</th>
                        <th>Fecha</th>
                        <th>Monto</th>
                        <th>Medio de pago</th>
                        <th colspan="2"></th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Juan Villegas</td>
                        <td>10-10-2023</td>
                        <td>$10123</td>
                        <td>Efectivo</td>
                        <td><ion-icon name="ellipsis-vertical-outline" class="icono-editar"></ion-icon></td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Juan Villegas</td>
                        <td>10-10-2023</td>
                        <td>$10123</td>
                        <td>Debito</td>
                        <td><ion-icon name="ellipsis-vertical-outline" class="icono-editar"></ion-icon></td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Juan Villegas</td>
                        <td>10-10-2023</td>
                        <td>$10123</td>
                        <td>Transferencia</td>
                        <td><ion-icon name="ellipsis-vertical-outline" class="icono-editar"></ion-icon></td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Juan Villegas</td>
                        <td>10-10-2023</td>
                        <td>$10123</td>
                        <td>Credito</td>
                        <td><ion-icon name="ellipsis-vertical-outline" class="icono-editar"></ion-icon></td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Juan Villegas</td>
                        <td>10-10-2023</td>
                        <td>$10123</td>
                        <td>Efectivo</td>
                        <td><ion-icon name="ellipsis-vertical-outline" class="icono-editar"></ion-icon></td>
                    </tr>
                </tbody>
            </table>
        </div>

        
    </main>
</body>
</html>