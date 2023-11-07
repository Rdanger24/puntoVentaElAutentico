<?php 
    require_once ("../modelo/rol.php");     
    $rol = new Rol();
    $roles = $rol->listarRoles();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../public/imagenes/LogoFoodTruck.jpg">

    <title>Administracion de usuarios</title>
    <!-- ====================== ESTILOS CSS ==================== -->
    <link rel="stylesheet" href="../../public/css/ccs/carta-administrador.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- ====================== JS ==================== -->
    <script src="../../public/js"></script>
    <script src="../../public/js/scripts.js"></script>
    <script src="../../public/js/jquery-3.7.1.min.js"></script>
    <script src="../../public/js/js-maestro.js"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    
</head>

<body>
 
    <!-- -------- BARRA DE NAVEGACION ------- -->
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="logo">
                <a href="../../app/vistas/carta-administrador.html" class="nav-link-menu">
                    <span class="link-icon"><ion-icon name="menu-outline"></ion-icon></i></span>
                    <span class="link-text">Menu</span>
                </a>
            </li>

            <!-- -------- ITEMS DE BARRA DE NAVEGACION ------- -->
            <li class="nav-item">
                <a href="../../app/vistas/carta-administrador.html" class="nav-link">
                    <span class="link-icon"><ion-icon name="fast-food-outline"></ion-icon></i></span>
                    <span class="link-text">Carta</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../app/vistas/inventario-administrador.html" class="nav-link">
                    <span class="link-icon"><ion-icon name="clipboard-outline"></ion-icon></i></span>
                    <span class="link-text">Inventario</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../app/vistas/hist_ventas-administrador.html" class="nav-link">
                    <span class="link-icon"><ion-icon name="book-outline"></ion-icon></i></span>
                    <span class="link-text">Historial Ventas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../app/vistas/usuarios-administrador.html" class="nav-link">
                    <span class="link-icon-io"><ion-icon name="body"></ion-icon></i></span>
                    <span class="link-text">Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../app/vistas/reporte_ventas-administrador.html" class="nav-link">
                    <span class="link-icon"><ion-icon name="document"></ion-icon></i></span>
                    <span class="link-text">Reporte Ventas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../app/vistas/carta-vendedor.html" class="nav-link">
                    <span class="link-icon"><ion-icon name="person-outline"></ion-icon></i></span>
                    <span class="link-text">Vista vendedor</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../app/vistas/login.html" class="nav-link">
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
                <input type="search" placeholder="Buscar usuario">
                <ion-icon name="search" class="icono-busqueda"></ion-icon>
            </div>
            <div class="vendedor">
                <ion-icon name="person" class="icono-vendedor"></ion-icon>
                <span class="nombre-vendedor">Nombre administrador</span>
            </div>
        </div>
        <div class="tabla-inventario">

            <table class="table">
                <thead class="contenedor-datos">
                        <button class="boton-pagar" onclick="mostrarPopup()">Añadir usuario</button>
                        <p></p>                     
                    <tr>
                        <th>Id usuario</th>
                        <th>Nombre y apellido</th>
                        <th>Tipo de usuario</th>
                        <th colspan="2"></th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Jose Jaramillo</td>
                        <td>Administrador</td>
                        <td><ion-icon name="pencil-outline" class="icono-editar"></ion-icon></td>
                        <td><ion-icon name="trash-outline" class="icono-eliminar"></ion-icon></td> 
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Jose Jaramillo</td>
                        <td>Administrador</td>
                        <td><ion-icon name="pencil-outline" class="icono-editar"></ion-icon></td>
                        <td><ion-icon name="trash-outline" class="icono-eliminar"></ion-icon></td>  
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Jose Jaramillo</td>
                        <td>Administrador</td>
                        <td><ion-icon name="pencil-outline" class="icono-editar"></ion-icon></td>
                        <td><ion-icon name="trash-outline" class="icono-eliminar"></ion-icon></td> 
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Jose Jaramillo</td>
                        <td>Administrador</td>
                        <td><ion-icon name="pencil-outline" class="icono-editar"></ion-icon></td>
                        <td><ion-icon name="trash-outline" class="icono-eliminar"></ion-icon></td> 
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Jose Jaramillo</td>
                        <td>Administrador</td>
                        <td><ion-icon name="pencil-outline" class="icono-editar"></ion-icon></td>
                        <td><ion-icon name="trash-outline" class="icono-eliminar"></ion-icon></td> 
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
        <!-- El contenedor del popup (inicialmente oculto) -->
        <div class="popup" id="popup">
            <div class="popup-contenido">
                <h2>Añadir usuario:</h2>
                <form action="#" id="formAgregarTrabajador" class="formAgregarTrabajador" method="POST">
          
                    <label for="nombre-apellido">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>

                    <label for="nombre-apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Apellido" required>

                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" required>
          
                    <label for="clave">Contraseña:</label>
                    <input type="password" name="clave" id="clave" placeholder="Contraseña" required>
                    
                    <label for="rol">Tipo de usuario:</label>
                    <select id="rol" name="tipo-usuario" required>
                        <?php 
                            if ($roles->num_rows > 0) {
                                // Recorrer almacenes presentes
                                while ($dato = $roles->fetch_assoc()) {
                                    echo '<option value="' . $dato['id_rol'] . '">' . $dato['nombre_rol'] . '</option>';
                                }
                            } else {
                                echo '<option value="0">Sin datos</option>';
                            }
                        ?>                                 
                    </select>
                </form>
                <button class="boton-pago" type="submit" name="agregar" onclick="agregarTrabajador()" value="Agregar">Agregar usuario</button>
                <div class="cerrar-popup" onclick="cerrarPopup()"><ion-icon name="close-circle"></ion-icon></div>
            </div>
        </div>         
        
        <!-- JavaScript para manejar el evento de clic y agregar/eliminar la clase "seleccionado" al elemento seleccionado. -->
        <script>
        // Obtenemos todos los elementos de categoría
        const itemsCategoria = document.querySelectorAll('.item-categoria'); 
        // Agregamos un controlador de eventos de clic a cada elemento de categoría    
        itemsCategoria.forEach(item => {
            item.addEventListener('click', () => {        
                // Eliminamos la clase 'seleccionado' de todos los elementos
                itemsCategoria.forEach(otherItem => otherItem.classList.remove('seleccionado'));
                // Agregamos la clase 'seleccionado' solo al elemento seleccionado
                item.classList.add('seleccionado');
            });
        });
        </script>
        <script>
        // Función para mostrar el popup
        function mostrarPopup() {
            const popup = document.getElementById('popup');
            popup.style.display = 'flex';
        }


        function cerrarPopup() {
            const popup = document.getElementById('popup');
            popup.style.display = 'none';
        
        }

        function agregarTrabajador()
        { 
            formulario = document.getElementById('formAgregarTrabajador');

       /* var parametros = 
        {
            "formulario" : formulario
        }; */

        $.ajax({
            data: formulario,
            url: '../gestion/gestion_trabajador.php',
            type: 'POST',
            
            beforesend: function()
            {
            //$('#mostrar_mensaje').html("Error de comunicación");
            alert("Error!/nNo se pudo agregar el usuario: " + document.getElementById('nombre').value);
            },

            success: function(mensaje)
            {
            //$('#mostrar_mensaje').html(mensaje);
            alert("Se a agregado el usuaro: " + mensaje);
            }
        });
        }
        
        </script>

</body>
</html>