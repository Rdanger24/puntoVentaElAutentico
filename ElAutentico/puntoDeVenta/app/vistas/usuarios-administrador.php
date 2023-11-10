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
    <!--Import materialize.css
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->
    <!-- ====================== JS ==================== -->
    <script src="../../public/js"></script>
    
    <script src="../../public/js/jquery-3.7.1.min.js"></script>
    <script src="../../public/js/scripts.js"></script>
    <script src="../../public/js/js-maestro.js"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    
</head>

    <body  onload="inicializar()">
 
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
                    <input type="text" placeholder="Buscar usuario">
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
                        <div class="rounded-buttons-container">
                            <button class="boton-pagar" onclick="mostrarPopup()">Añadir usuario</button>  
                            <button class="boton-pagar2" onclick="mostrarPopup2()">Roles</button>         
                            <p></p>                 
                        </div>  
                    </thead>
                    <tbody>
                        <div id="mostrarTrabajadores"></div> <!-- div que mostrará el contenido del ajax -->
                    </tbody>
                </table>
            </div>
        </main>
        <!-- El contenedor del popup (inicialmente oculto) -->
        <div class="popup" id="popup">
            <div class="popup-contenido">
                <h2>Añadir usuario:</h2>
                <p></p>
                <form action="" id="formAgregarTrabajador" class="formAgregarTrabajador" method="POST">
                    
                <div class="form-element">
                    <label for="nombre-apellido">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                </div>
                    
                <div class="form-element"><label for="nombre-apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Apellido" required>
                </div>

                <div class="form-element">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" required>
                </div>

                <div class="form-element">
                    <label for="clave">Contraseña:</label>
                    <input type="password" name="clave" id="clave" placeholder="Contraseña" required>
                </div>
                    
                <div id="mostrarRoles" class="form-element"><label for="rol">Tipo de usuario:</label>
                   
                </div>
                </form>
                <p></p>
                <button class="boton-pagar-mas" type="submit" name="agregar" onclick="agregarTrabajador()" value="Agregar"><ion-icon name="add-circle-outline"></ion-icon></button>
                <div class="cerrar-popup" onclick="cerrarPopup()"><ion-icon name="close-circle"></ion-icon></div>
            </div>
        </div>


        <!--------------------------------------------------------------------------------------------------------------------------------------->
        <!----------------------------------------------             MOSTRAR ROLES                ----------------------------------------------->
        <!--------------------------------------------------------------------------------------------------------------------------------------->


        <div class="popup" id="popup2">
            <div class="popup-contenido">
                <h2>Roles</h2>
                <p></p>
                <div class="formulario">
                    <hr>
                    <div class="row text-center">
                        <div class="col">
                            <label for="buscador">Crear nuevo ROL: </label>
                            <input type="text" name="buscador" id="buscador" class="form-control">
                            <div class="row"> <button class="boton-pagar" type="submit" name="agregar" value="Agregar Rol" onclick="gestionarRol(1);"  onmouseout="gestionarRol(2);"><ion-icon name="add-circle-outline"></ion-icon></button>              
                         </div>
                    
                    </div>
            
                    <hr>
                    <div class="row justify-content-md-center">		
                        <div class="col-md-8">
                            <div id="mostrar_mensaje"></div> <!-- div que mostrará el contenido del ajax -->
                        </div>
                    </div>
        </div>
                    
                <div class="cerrar-popup" onclick="cerrarPopup2()"><ion-icon name="close-circle"></ion-icon></div>
                
                </div>
        </div>

    </body>
        
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

            </script>
            
            
            <script>
                function inicializar(){
                    gestionarRol(2);
                    listarTrabajadores();
                }


                function  mostrarRoles(){
                    alert("mostrar roles");
                    var parametros = 
                    {
                        "opcion" : "mostrar"
                    };
                
                    $.ajax({
                        data : parametros,
                        url: 'gestion/gestion_rol.php',
                        type: 'POST',
                        beforeSend: function() {
                            $('#mostrarTrabajadores').html("No hay trabajadores para mostrar");
                        },
                        success: function(mensaje) {
                            $('#mostrarTrabajadores').html(mensaje);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error('Error en la solicitud AJAX:', textStatus, errorThrown); //ver errores
                        }
                    });
                }
            </script>
            

            <!--------------------------------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------------           GESTION TRABAJADORES           ----------------------------------------------->
            <!--------------------------------------------------------------------------------------------------------------------------------------->

            <script>

            function listarTrabajadores() {

                var parametros = 
                {
                    "opcion" : "mostrar"
                };
                
                $.ajax({
                    data : parametros,
                    url: 'gestion/gestion_trabajador.php',
                    type: 'POST',
                    beforeSend: function() {
                        $('#mostrarTrabajadores').html("No hay trabajadores para mostrar");
                    },
                    success: function(mensaje) {
                        $('#mostrarTrabajadores').html(mensaje);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('Error en la solicitud AJAX:', textStatus, errorThrown); //ver errores
                    }
                });
            }

            function editarUsuario(id){

                var rutSpan = document.getElementById('rutSpan'+id);
                var nombreSpan = document.getElementById('nombreSpan'+id);
                var apellidoSpan = document.getElementById('apellidoSpan'+id);
                var usuarioSpan = document.getElementById('usuarioSpan'+id);
                var claveSpan = document.getElementById('claveSpan'+id);
                var estadoSpan = document.getElementById('estadoSpan'+id);
                var rolSpan = document.getElementById('rolSpan'+id);
                var btnUserEdit = document.getElementById('btnUserEdit'+id);
                var verClave = document.getElementById('verClave'+id);

                var rutTxt = document.getElementById('rutTxt'+id);
                var nombreTxt = document.getElementById('nombreTxt'+id);
                var apellidoTxt = document.getElementById('apellidoTxt'+id);
                var usuarioTxt = document.getElementById('usuarioTxt'+id);
                var claveTxt = document.getElementById('claveTxt'+id);
                var estadoSelect = document.getElementById('estadoSelect'+id);
                var rolSelect = document.getElementById('rolSelect'+id);
                var guardarUsuarioEdit = document.getElementById('guardarUsuarioEdit'+id);

                // Mostrar el campo de texto y ocultar el span

                rutSpan.style.display = 'none';
                nombreSpan.style.display = 'none';
                apellidoSpan.style.display = 'none';
                usuarioSpan.style.display = 'none';
                claveSpan.style.display = 'none';
                estadoSpan.style.display = 'none';
                rolSpan.style.display = 'none';
                btnUserEdit.style.display = 'none';
                verClave.style.display = 'none';

                rutTxt.style.display = 'inline';
                nombreTxt.style.display = 'inline';
                apellidoTxt.style.display = 'inline';
                usuarioTxt.style.display = 'inline';
                claveTxt.style.display = 'inline';
                estadoSelect.style.display = 'inline';
                rolSelect.style.display = 'inline';
                guardarUsuarioEdit.style.display = 'inline';

                // Agregar el valor del texto al valor original del span
                
                rutTxt = rutSpan.innerText;
                nombreTxt = nombreSpan.innerText;
                apellidoTxt = apellidoSpan.innerText;
                usuarioTxt = usuarioSpan.innerText;
                claveTxt = claveSpan.innerText;

            }

            function guardarUsuarioEdit(id){

                var rutSpan = document.getElementById('rutSpan'+id);
                var nombreSpan = document.getElementById('nombreSpan'+id);
                var apellidoSpan = document.getElementById('apellidoSpan'+id);
                var usuarioSpan = document.getElementById('usuarioSpan'+id);
                var claveSpan = document.getElementById('claveSpan'+id);
                var estadoSpan = document.getElementById('estadoSpan'+id);
                var rolSpan = document.getElementById('rolSpan'+id);
                var btnUserEdit = document.getElementById('btnUserEdit'+id);
                var verClave = document.getElementById('verClave'+id);

                var rutTxt = document.getElementById('rutTxt'+id);
                var nombreTxt = document.getElementById('nombreTxt'+id);
                var apellidoTxt = document.getElementById('apellidoTxt'+id);
                var usuarioTxt = document.getElementById('usuarioTxt'+id);
                var claveTxt = document.getElementById('claveTxt'+id);
                var estadoSelect = document.getElementById('estadoSelect'+id);
                var rolSelect = document.getElementById('rolSelect'+id);
                var guardarUsuarioEdit = document.getElementById('guardarUsuarioEdit'+id);


                var parametros = 
                {
                    "id" : id,
                    "rut" : rutTxt.value,
                    "nombre" : nombreTxt.value,
                    "apellido" : apellidoTxt.value,
                    "usuario" : usuarioTxt.value,
                    "clave" : claveTxt.value,
                    "estado" : estadoSelect.value,
                    "rol" : rolSelect.value,
                    "opcion" : 'U'
                };

                //volver inputs a su estado anterior

                rutSpan.style.display = 'inline';
                nombreSpan.style.display = 'inline';
                apellidoSpan.style.display = 'inline';
                usuarioSpan.style.display = 'inline';
                claveSpan.style.display = 'inline';
                estadoSpan.style.display = 'inline';
                rolSpan.style.display = 'inline';
                btnUserEdit.style.display = 'inline';
                verClave.style.display = 'inline';
                
                rutTxt.style.display = 'none';
                nombreTxt.style.display = 'none';
                apellidoTxt.style.display = 'none';
                usuarioTxt.style.display = 'none';
                claveTxt.style.display = 'none';
                estadoSelect.style.display = 'none';
                rolSelect.style.display = 'none';
                guardarUsuarioEdit.style.display = 'none';
                

            $.ajax({
                    data : parametros,
                    url: 'gestion/gestion_trabajador.php',
                    type: 'POST',
                beforeSend: function()
                {
                $('#mostrarTrabajadores').html("Error de comunicación");
                listarTrabajadores();
                },
        
                success: function(mensaje)
                {
                $('#mostrarTrabajadores').html(mensaje);
                listarTrabajadores();
                }
                

            });

            }

            function eliminarUsuario(id){
                
            }

            function mostrarClave(id) {

                var claveSpan = document.getElementById('claveSpan'+id);
                var iconoVer = document.getElementById('ver'+id);

                if (claveSpan.style.display === 'none') {
                    claveSpan.style.display = 'inline';
                    iconoVer.setAttribute('name', 'eye-off-outline');
                } else {
                    claveSpan.style.display = 'none';
                    iconoVer.setAttribute('name', 'eye-outline');
                }
            }



            function agregarTrabajador()
            { 
                formulario = document.getElementById('formAgregarTrabajador');

            $.ajax({
                data: formulario,
                url: 'gestion/gestion_trabajador.php',
                type: 'POST',
                
                beforeSend: function()
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
            <!--------------------------------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------------               GESTION ROLES              ----------------------------------------------->
            <!--------------------------------------------------------------------------------------------------------------------------------------->



            <script>
        
            function gestionarRol(opcion)
            { 
                buscar = document.getElementById('buscador').value;
            var parametros = 
            {
                "nombre" : buscar,
                "opcion" : opcion
            };
        
            $.ajax({
                data: parametros,
                url: 'gestion/gestion_rol.php',
                type: 'POST',
                
                beforesend: function()
                {
                $('#mostrar_mensaje').html("Error de comunicación");
                },
        
                success: function(mensaje)
                {
                $('#mostrar_mensaje').html(mensaje);
                }
            });
            }


            function editarRol(id_rol) {

                var rolSpan = document.getElementById('nombre_rolSpan'+id_rol);
                var rolTxt = document.getElementById('nombre_rolTxt'+id_rol);
                var btnOK = document.getElementById('guardarEdit'+id_rol);
                var btnEdit = document.getElementById('btnEdit'+id_rol);

                // Mostrar el campo de texto y ocultar el span
                rolSpan.style.display = 'none';
                rolTxt.style.display = 'inline';
                btnEdit.style.display = 'none';
                btnOK.style.display = 'inline';

                // Agregar el valor del texto al valor original del span
                rolTxt.value = rolSpan.innerText;

            }

            function guardarRolEdit(id_rol){

                var rolSpan = document.getElementById('nombre_rolSpan'+id_rol);
                var rolTxt = document.getElementById('nombre_rolTxt'+id_rol);
                var btnOK = document.getElementById('guardarEdit'+id_rol);
                var btnEdit = document.getElementById('btnEdit'+id_rol);
                var parametros = 
                {
                    "id" : id_rol,
                    "nombre" : rolTxt.value,
                    "opcion" : 'U'
                };

                rolSpan.style.display = 'inline';
                rolTxt.style.display = 'none';
                btnEdit.style.display = 'inline';
                btnOK.style.display = 'none';
                gestionarRol(2);
        
            $.ajax({
                data: parametros,
                url: 'gestion/gestion_rol.php',
                type: 'POST',
                
                beforeSend: function()
                {
                $('#mostrar_mensaje').html("Error de comunicación");
                gestionarRol(2);
                },
        
                success: function(mensaje)
                {
                $('#mostrar_mensaje').html(mensaje);
                gestionarRol(2);
                }
                

            });

                
            }

            function eliminarRol(id_rol){

                var confirmacion = confirm("¿Estás seguro de que deseas eliminar el rol: "+id_rol+"?");

                if (confirmacion) {
                    
                    var parametros = 
                    {
                        "id" : id_rol,
                        "opcion" : 'D'
                    };                

                    $.ajax({
                    data: parametros,
                    url: 'gestion/gestion_rol.php',
                    type: 'POST',
                    
                    beforeSend: function()
                    {
                    $('#mostrar_mensaje').html("Error! No se puede realizar la operación.");
                    $('#mostrar_mensaje').css('color', 'red');
                    gestionarRol(2);
                    },

                    success: function(mensaje)
                    {
                    $('#mostrar_mensaje').html(mensaje);
                    gestionarRol(2);
                    }
                    
                    });

                }
                    


            }




        </script>



    
</html>