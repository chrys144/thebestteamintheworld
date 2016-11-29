<!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="modal-mysql-comandos" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Práctica base de datos</h2>
                                <p class="item-intro text-muted">Mysql comandos.</p>
                               
                                <p>Se muestra cómo crear y asignar permisos a un usuario en mysql. Y posteriormente crear, insertar y seleccionar tablas y bases de datos.</p>

                                <h4>Crear un usuario y asignar permisos</h4>
                                <p>Imagen obtenida de <a href="https://www.digitalocean.com/community/tutorials/crear-un-nuevo-usuario-y-otorgarle-permisos-en-mysql-es" target="_blank">https://www.digitalocean.com/community/tutorials/crear-un-nuevo-usuario-y-otorgarle-permisos-en-mysql-es</a></p>
                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcomando/crearusuario.PNG" alt="">

                                 <h4>Cambiamos al usuario creado</h4>
                                <p>En este caso se creó el usaurio "admin"</a></p>
                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcomando/cambiar-usuario-creado.PNG" alt="">

                                <h4>Creamos la base de datos</h4>
                                <p>La base de datos se llama practica</a></p>
                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcomando/crear-base-datos.PNG" alt="">

                                <h4>Cambiamos a la base de datos creada</h4>
                                <p>...</p>
                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcomando/cambiar-base-datos.PNG" alt="">

                                <h4>Creamos la tabla</h4>
                                <p>...</p>
                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcomando/noseencuestrachavo.jpg" alt="">

                                 <h4>Insertamos datos a la tabla</h4>
                                <p>...</p>
                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcomando/insertfromadmin.PNG" alt="">

                                <h4>Seleccionamos la tabla</h4>
                                <p>Y vemos que tiene los datos :O</a></p>
                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcomando/seleccionar-datos.PNG" alt="">

                                <h4>Y los borramos</h4>
                                <p>Entonces sólo queda un registro de los dos que había :(</a></p>
                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcomando/deletefromadmin.PNG" alt="">

                                <ul class="list-inline">
                                    <li>Fecha: Noviembre 11 2016</li>
                                    <li>Categoria: Base de datos</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Cerrar trabajo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="modal-mysql-cliente" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
    							 <h2>Práctica base de datos</h2>
                                <p class="item-intro text-muted">Mysql cliente remoto WorkBench.</p>
                               
                                <p>Se muestra cómo crear una base de datos y posteriormente tablas.</p>

                                <h4>Tecleamos la siguiente linea de comandos
                                sudo nano mysqld.cnf</h4>
                                <p>para poder acceder a una ventana donde modificaremos una ip.</p>

                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcliente/primero.jpg" alt="">

                                 <h4>Modificamos </h4>
                                 <p>En la parte inferior de la ventana que apareció, donde esté la ip de nuestro servidor web por 127.0.0.0 creo.</p>
                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcliente/segundo.jpg" alt="">

                                <h4>Después.</h4>
                                 <p>sólo tenemos que teclear la última linea de comando que apartece en pantalla para que los cambios realizados surgan efecto.<br/>El comando es: sudo service mysql restart</p>

                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcliente/tercero.jpg" alt="">

                                   <h4>Ahora ingresamos los datos necesarios para realizar la conexión SSH.</h4>
                                 <p>Ingresamos los datos necesarios en los campos conrrespondientes</p>

                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcliente/cuarto.jpg" alt="">

                                  <h4>Ultimo paso para accesder.</h4>
                                 <p>Ingresamos la contraseña mysql</p>

                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcliente/ingresarContrasena.PNG" alt="">


                                 <h4>Ahora creamos nuestro SHEMA o base de datos :).</h4>
                                 <p>Dando click izquierdo en un shema preterminado y se desplegara crear shema</p>

                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcliente/crearBaseDatos.png" alt="">

                                    <h4>Elegimos un nombre.</h4>
                                 <p>Cualquiera sirve. En este caso se le llamo práctica por fines prácticos.</p>

                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcliente/crearBaseDatos2.PNG" alt="">

                                   <h4>Poesterior a ésto.</h4>
                                 <p>Se debe de crear una tabla para poder trabajar.<br/> Damos click derecho en el shema creado, se abrira un menú, ahora sólo buscamos donde diga table y en ese apartado se procede a dar click izquierdo y se busca una opción que diga crear tabla o create table.</p>

                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcliente/crearTabla.png" alt="">

                                   <h4>Ahora.</h4>
                                 <p>Se tiene que ponder nombre a la tabla y nombrar de igual manera a los campos con sus correpondientes tipos de datos y quien será llave primaria, llave foranea etc...</p>

                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcliente/crearTabla2.PNG" alt="">


                                 <h4>Para finalizar</h4>
                                 <p>Damos click izquierdo en una tabla creada<br/>Y seleccionamos la opción<br/> 
                                 Select Rows - limit 1000</p>

                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcliente/select.png" alt="">

                                 <h4>Y solamente...</h4>
                                 <p>Se ingresan los datos directamente en las casilas.<br/>
                                 Y se oprime en el botón Apply</p>

                                <img class="img-responsive img-centered" src="<?= base_url() ?>plantilla/img/portfolio/mysqlcliente/insert&select.PNG" alt="">


                                <ul class="list-inline">
                                    <li>Fecha: Noviembre 28 2016</li>
                                    <li>Categoria: Base de datos</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
      
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
?>