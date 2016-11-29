 <!-- Contact Section -->
    <section id="datos" class="bg-light-gray">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Datos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
               <table class="table">
                   <tbody id="tabla-datos">
                        <?php
                        echo "<tr>  
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Número</th>
                                    <th>Mensaje</th>
                             <tr>";
                            if ($seleccionar != false){
                                foreach ($seleccionar as $dato) {
                                    echo "<tr>";
                                        echo "<td class='td-id'>".$dato['id']."</td>";
                                        echo "<td class='td-nombre'>".$dato['nombre']."</td>";
                                        echo "<td class='td-correo'>".$dato['correo']."</td>";
                                        echo "<td class='td-numero'>".$dato['numero']."</td>";
                                        echo "<td class='td-mensaje'>".$dato['mensaje']."</td>";
                                    echo "</tr>";
                                }
                            }                     
                        ?>
                   </tbody>
               </table>
             </div>
        </div>
        </div>
    </section>