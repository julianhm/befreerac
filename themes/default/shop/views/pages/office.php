<style>

    .office-form.wthree {
    width: 100%;
    margin: 0 auto;
    padding: 40px;
    -webkit-box-shadow: 3px 3px 13px rgba(0, 0, 0, 0.5);
    -moz-box-shadow:3px 3px 13px rgba(0, 0, 0, 0.5);
    box-shadow: 3px 3px 13px rgba(0, 0, 0, 0.5);
    }


    ul.sidenav_offcie {
    list-style-type: none;
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: auto;
    
  }
  
  ul.sidenav_offcie li {
    float: left;
  }
  
  ul.sidenav_offcie li a {
    display: block;
    margin-left: 5px;
    /*color: rgb(15, 15, 15);*/
    padding: 8px 16px;
    text-decoration: none;
    /*background-color: #e3e3e3;*/
  }
   
  ul.sidenav_offcie li a.active {
    /*background-color: #f44336;
    color: #fff;*/
  }
  
  ul.sidenav_offcie li a:hover:not(.active) {
   /* background-color: #000;
    color: white;*/
  }

</style>

<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<section class="page-contents">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <div class="row">
                    <div class="col-sm-9 col-md-10">

                        <div class="panel panel-default margin-top-lg">
                            <div class="panel-heading text-bold">
                                <i class="fa fa-briefcase margin-right-sm"></i> <?= lang('referral_earn'); ?>
                            </div>
                            <div class="panel-body">

                                <div class="panel-heading text-bold">
                                    <?= lang('referral_code_link'); ?>
                                </div>

                                <div style="background-color: #f5f5f5;border: 1px solid #e3e3e3;padding: 19px;">

                                
                                    <div id="myTooltip" style="display: none; position: absolute; width: 20%; text-align: center; margin: auto; left: 50%; padding: 10px; background-color: #2196f3d6; color: #fff; border-radius: 8px;"> </div>
                                    
                                    <div>
                                        <?= lang('referral_code'); ?>
                                    </div>

                                    <label id="code" style="cursor: pointer;" onclick="copyContent(id)"><?= $loggedInUser->referral_code; ?></label>
                                    

                                    <div style="margin-top: 20px;">
                                        <?= lang('referral_link'); ?>
                                    </div>
                                    
                                    <label id="link" style="cursor: pointer;" onclick="copyContent(id)"><?= site_url('register') . '/' . $loggedInUser->referral_code; ?></label>

                                    <script>
                                        
                                        // Only works with the HTTPS protocol using SSl
                                        // Funcion para copiar el texto, mostrar cartel que se ha copiado el texto y despues desaparecer cartel
                                        function copyContent(get) {
                                            // Get the text
                                            let copyText = document.getElementById(get).innerHTML;
                                            // Copy the text 👇️
                                            navigator.clipboard.writeText(copyText);
                                            // se encarga de mostrar que esta copiado el texto
                                            var tooltip = document.getElementById("myTooltip");
                                            tooltip.innerHTML = "Texto copiado!";
                                            // muestra el div con el texto copiado
                                            tooltip.style.display = "block";
                                            // muestra el texto por 2 segundos (2000 milisegundos)
                                            setTimeout(() => {
                                                tooltip.style.display = "none";
                                            }, 2000);
                                            
                                        }

                                    </script>

                                </div>


                                <div style="background-color: #f5f5f5;border: 1px solid #e3e3e3;padding: 19px;margin-top: 20px;">
                                    
                                    <div>
                                        Mi consumo minimo: 01 Marzo 2023 - 31 Marzo 2023
                                    </div>
                                    <br>
                                    <div class="progress">
                                        
                                        <?php
                                            echo ' <div class="progress-bar progress-bar-success" style="width: ' . (($loggedInUser->progress_cm)*100) . '%;">' . (($loggedInUser->progress_cm)*100) .'%</div>';
                                        ?> 
                                    </div>
                                    
                                </div>

                                <script>
                                    //funcion para ocultar mostrar/ocultar las estadisticas o los niveles
                                    function showTable(tableId) {
                                        //ocultamos todas las tablas
                                        document.getElementById("nivel0").style.display = "none"; //tabla estadisticas
                                        document.getElementById("nivel1").style.display = "none";
                                        document.getElementById("nivel2").style.display = "none";
                                        document.getElementById("nivel3").style.display = "none";
                                        document.getElementById("nivel4").style.display = "none";
                                        document.getElementById("nivel5").style.display = "none";
                                        document.getElementById("nivel6").style.display = "none";
                                        //removemos la clase "active" de todos los botones que muestran las tablas
                                        document.getElementById("btn_lv0").classList.remove("active"); //boton estadisticas
                                        document.getElementById("btn_lv1").classList.remove("active");
                                        document.getElementById("btn_lv2").classList.remove("active");
                                        document.getElementById("btn_lv3").classList.remove("active");
                                        document.getElementById("btn_lv4").classList.remove("active");
                                        document.getElementById("btn_lv5").classList.remove("active");
                                        document.getElementById("btn_lv6").classList.remove("active");
                                        //mostramos la tabla que queremos y agregamos la clase "active" al boton de dicha tabla
                                        document.getElementById('nivel'+tableId).style.display = "";
                                        document.getElementById('btn_lv'+tableId).classList.add("active");
                                    }

                                </script>

                                <ul class="sidenav_offcie" style="margin-bottom: 20px;margin-top: 20px;">
                                    <li><a id="btn_lv0" onclick="showTable(0)" class="btn btn-primary active" href="#office">Estadísticas de referidos</a></li>
                                    <li><a id="btn_lv1" onclick="showTable(1)" class="btn btn-primary" href="#office">1.er Nivel</a></li>
                                    <li><a id="btn_lv2" onclick="showTable(2)" class="btn btn-primary" href="#office">2.do Nivel</a></li>
                                    <li><a id="btn_lv3" onclick="showTable(3)" class="btn btn-primary" href="#office">3.er Nivel</a></li>
                                    <li><a id="btn_lv4" onclick="showTable(4)" class="btn btn-primary" href="#office">4.to Nivel</a></li>
                                    <li><a id="btn_lv5" onclick="showTable(5)" class="btn btn-primary" href="#office">5.to Nivel</a></li>
                                    <li><a id="btn_lv6" onclick="showTable(6)" class="btn btn-primary" href="#office">6.to Nivel</a></li>
                                </ul>


                                <!-- Estadisticas generales  -->    
                                <div class="row">
                                    <div class="col-md-4" style="text-align: center;">
                                        <label>55</label>
                                        <div># referidos</div>
                                    </div>

                                    <div class="col-md-4" style="text-align: center;">
                                        <label>$23.300</label>
                                        <div>Valor de compra personal (VCP)</div>
                                    </div>
                                    
                                    <div class="col-md-4" style="text-align: center;">
                                        <label>$150.300</label>
                                        <div>Valor de compra grupal (VCG)</div>
                                    </div>
                                </div>
                                <!-- //Estadisticas generales  -->


                               
                                <!-- Tabla de estadisticas  -->
                                <table id="nivel0" class="table table-bordered" style="margin-top: 20px; color: #000">
                                    <thead>
                                        <tr style="background-color: #ff5722;">
                                            <th>Nivel</th>
                                            <th>Total referidos</th>
                                            <th>Total VCP</th>
                                            <th>Total VCG</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>1</td>
                                            <td>10</td>
                                            <td>$25.000</td>
                                            <td>$120.000</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>2</td>
                                            <td>20</td>
                                            <td>$35.000</td>
                                            <td>$140.000</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>20</td>
                                            <td>$15.000</td>
                                            <td>$10.000</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>$5.000</td>
                                            <td>$25.000</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>$0</td>
                                            <td>$0</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>0</td>
                                            <td>$0</td>
                                            <td>$0</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- //Tabla de estadisticas  -->

                                <!-- Tabla de niveles 1  -->
                                <table id="nivel1" class="table table-bordered" style="margin-top: 20px; color: #000; display: none">
                                    <thead>
                                        <tr style="background-color: #ff5722;">
                                            <th>Nombre</th>
                                            <th>Total VCP</th>
                                            <th>Total VCG</th>
                                            <th>Invitado por</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        foreach ($referrals as $order) 
                                        {
                                            //Persona invitada de nivel 1
                                            if ($order->plan_comp_id == 1) 
                                            {       
                                    ?>
                                        <tr>
                                            <td><?= $order->referido_id ?></td>
                                            <td><?= $order->t_vcp ?></td>
                                            <td><?= $order->t_vcg ?></td>
                                            <td><?= $order->invited_by ?></td>
                                        </tr>
                                       
                                    <?php
                                            }
                                        }
                                    ?>  
                                   
                                    </tbody>
                                </table>
                                <!-- //Tabla de niveles 1  -->

                                <!-- Tabla de niveles 2  -->
                                <table id="nivel2" class="table table-bordered" style="margin-top: 20px; color: #000; display: none">
                                    <thead>
                                        <tr style="background-color: #ff5722;">
                                            <th>Nombre</th>
                                            <th>Total VCP</th>
                                            <th>Total VCG</th>
                                            <th>Invitado por</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        foreach ($referrals as $order) 
                                        {
                                            //Persona invitada de nivel 2
                                            if ($order->plan_comp_id == 2) 
                                            {
                                    ?>
                                        <tr>
                                            <td><?= $order->referido_id ?></td>
                                            <td><?= $order->t_vcp ?></td>
                                            <td><?= $order->t_vcg ?></td>
                                            <td><?= $order->invited_by ?></td>
                                        </tr>
                                       
                                    <?php
                                            }
                                        }
                                    ?>  
                                   
                                    </tbody>
                                </table>
                                <!-- //Tabla de niveles 2  -->

                                <!-- Tabla de niveles 3  -->
                                <table id="nivel3" class="table table-bordered" style="margin-top: 20px; color: #000; display: none">
                                    <thead>
                                        <tr style="background-color: #ff5722;">
                                            <th>Nombre</th>
                                            <th>Total VCP</th>
                                            <th>Total VCG</th>
                                            <th>Invitado por</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        foreach ($referrals as $order) 
                                        {
                                            //Persona invitada de nivel 3
                                            if ($order->plan_comp_id == 2) 
                                            {
                                    ?>
                                        <tr>
                                            <td><?= $order->referido_id ?></td>
                                            <td><?= $order->t_vcp ?></td>
                                            <td><?= $order->t_vcg ?></td>
                                            <td><?= $order->invited_by ?></td>
                                        </tr>
                                       
                                    <?php
                                            }
                                        }
                                    ?>  
                                   
                                    </tbody>
                                </table>
                                <!-- //Tabla de niveles 3  -->

                                <!-- Tabla de niveles 4  -->
                                <table id="nivel4" class="table table-bordered" style="margin-top: 20px; color: #000; display: none">
                                    <thead>
                                        <tr style="background-color: #ff5722;">
                                            <th>Nombre</th>
                                            <th>Total VCP</th>
                                            <th>Total VCG</th>
                                            <th>Invitado por</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        foreach ($referrals as $order) 
                                        {
                                            //Persona invitada de nivel 4
                                            if ($order->plan_comp_id == 2) 
                                            {
                                    ?>
                                        <tr>
                                            <td><?= $order->referido_id ?></td>
                                            <td><?= $order->t_vcp ?></td>
                                            <td><?= $order->t_vcg ?></td>
                                            <td><?= $order->invited_by ?></td>
                                        </tr>
                                       
                                    <?php
                                            }
                                        }
                                    ?>  
                                   
                                    </tbody>
                                </table>
                                <!-- //Tabla de niveles 4  -->

                                <!-- Tabla de niveles 5  -->
                                <table id="nivel5" class="table table-bordered" style="margin-top: 20px; color: #000; display: none">
                                    <thead>
                                        <tr style="background-color: #ff5722;">
                                            <th>Nombre</th>
                                            <th>Total VCP</th>
                                            <th>Total VCG</th>
                                            <th>Invitado por</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        foreach ($referrals as $order) 
                                        {
                                            //Persona invitada de nivel 5
                                            if ($order->plan_comp_id == 2) 
                                            {
                                    ?>
                                        <tr>
                                            <td><?= $order->referido_id ?></td>
                                            <td><?= $order->t_vcp ?></td>
                                            <td><?= $order->t_vcg ?></td>
                                            <td><?= $order->invited_by ?></td>
                                        </tr>
                                       
                                    <?php
                                            }
                                        }
                                    ?>  
                                   
                                    </tbody>
                                </table>
                                <!-- //Tabla de niveles 5  -->

                                <!-- Tabla de niveles 6  -->
                                <table id="nivel6" class="table table-bordered" style="margin-top: 20px; color: #000; display: none">
                                    <thead>
                                        <tr style="background-color: #ff5722;">
                                            <th>Nombre</th>
                                            <th>Total VCP</th>
                                            <th>Total VCG</th>
                                            <th>Invitado por</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        foreach ($referrals as $order) 
                                        {
                                            //Persona invitada de nivel 6
                                            if ($order->plan_comp_id == 2) 
                                            {
                                    ?>
                                        <tr>
                                            <td><?= $order->referido_id ?></td>
                                            <td><?= $order->t_vcp ?></td>
                                            <td><?= $order->t_vcg ?></td>
                                            <td><?= $order->invited_by ?></td>
                                        </tr>
                                       
                                    <?php
                                            }
                                        }
                                    ?>  
                                   
                                    </tbody>
                                </table>
                                <!-- //Tabla de niveles 6  -->
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    
   