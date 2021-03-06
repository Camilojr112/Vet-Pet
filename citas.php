<?php
    include("tempade/cabecera.php"); 
?>

<?php
  $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
  $txtFecha=(strtotime($_POST['txtFecha']))?$_POST['txtFecha']:"";
  $txtHora=(isset($_POST['txtHora']))?$_POST['txtHora']:"";
  $txtPaciente=(isset($_POST['txtPaciente']))?$_POST['txtPaciente']:"";
  $txtMedico=(isset($_POST['txtMedico']))?$_POST['txtMedico']:"";
  $texMotivo=(isset($_POST['texMotivo']))?$_POST['texMotivo']:"";
  $txtestado=(isset($_POST['txtestado']))?$_POST['txtestado']:"";
  $accion=(isset($_POST['accion']))?$_POST['accion']:"";

  include("conexion/bd.php");


  switch($accion){
      case "agregar":
        $sentenciaSQL= $conexion->prepare("INSERT INTO `citasagg` (fecha, hora, paciente, medico, motivo, estado) VALUES (:fecha,:hora,:paciente,:medico,:motivo, :estado);");
        $sentenciaSQL->bindParam(':fecha',$txtFecha);
        $sentenciaSQL->bindParam(':hora',$txtHora);
        $sentenciaSQL->bindParam(':paciente',$txtPaciente);
        $sentenciaSQL->bindParam(':medico',$txtMedico);
        $sentenciaSQL->bindParam(':motivo',$texMotivo);
        $sentenciaSQL->bindParam(':estado',$txtestado);
        $sentenciaSQL->execute();
       
    break;
    case "borrar":
       echo "borrar" ;
       break;
  }

  $sentenciaSQL= $conexion->prepare("SELECT*FROM citasagg");
  $sentenciaSQL->execute();
  $listadeCitas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VPS - Módulo Hospedaje</title>
    
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/tabla.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    

</head>
<body>
    <main>

        <section>
           
            <div class="contenedor">
                <div class="header-tools">
                    <div class="titulo">
                    <h1>Citas</h1>
                    </div>
                      <div class="searhc">
                          <svg xmlns="http://www.w3.org/2000/svg" id="buscar" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                              <circle cx="10" cy="10" r="7" />
                              <line x1="21" y1="21" x2="15" y2="15" />
                            </svg><input type="text" class="search-input">
                      </div>
                      <div class="tools">
                          <ul>
                              <li>
                                  
                                  <button id="open"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="25" height="25" viewBox="0 0 24 24" stroke-width="3" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                      <line x1="12" y1="5" x2="12" y2="19" />
                                      <line x1="5" y1="12" x2="19" y2="12" />
                                    </svg> Nueva cita</button>
                                  
                              </li>
                          </ul>
                      
                  </div>
              </div>
              <!--tabla citas-->
                <table class="datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Paciente</th>
                            <th>Medico</th>
                            <th>Motivo</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listadeCitas as $cita){?>
                    <tr>
                        <td><?php echo $cita['id'];?></td>
                        <td><?php echo $cita['fecha'];?></td>
                        <td><?php echo $cita['hora'];?></td>
                        <td><?php echo $cita['paciente'];?></td>
                        <td><?php echo $cita['medico'];?></td>
                        <td><?php echo $cita['motivo'];?></td>
                        <td><?php echo $cita['estado'];?></td>
                        <td> 
                          
                         <form method="POST">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-pac" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5886E8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                      <circle cx="12" cy="12" r="2" />
                                      <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                </svg>
                            </a>
                        

                        
                            <a href="#" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-pac" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5886E8" fill="none" stroke-linecap="round" stroke-linejoin="round" id="editarPaciente"  onclick="getfocus()">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                      <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                                      <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                                </svg>
                            </a>
                        

                        
                            <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                            </a>
                            </form>
                        </td>
                     </tr>
                  
                     <?php } ?>
                     </div>  

                    </section>

                    <!--------------3. POP UP "AGREGAR PACIENTE" - 3.1. CONTENEDOR MASCOTA----------------------------->

                    <div class="Modal-container" id="modal_container">
                        <div class="modal">
                     <button class="bt1" id="close">
                     <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" id="close-vis-pac" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="12" r="9" />
                             <path d="M10 10l4 4m0 -4l-4 4" /></svg></button>
                            
                     <h3>Nueva cita</h3>
                        <div class="contenedor-modal" >
                    <form class="formulario3" method="POST" enctype="multipart/form-data">
                    <input type="number" id="txtID" name="txtID">
                    <div class="field" >
                        
                        <label>Fecha</label>
                        <input type="date" name="txtFecha" id="txtFecha">
                    </div>
                    <div class="field">
                        <label>hora</label>
                        <input type="time" name="txtHora" id="txtHora">
                    </div>
                    <div class="field">
                        <label>Paciente</label>
                        <input type="text" name="txtPaciente" id="txtPaciente">
                    </div>
                    <div class="field">
                        <label>Medico</label>
                        <input type="text" name="txtMedico" id="txtMedico">
                    </div>
                    <div class="field">
                        <label>Cirugia</label>
                        <input type="texMotivo" name="texMotivo" id="texMotivo">
                    </div>
                    <div class="field">
                        <label>Esado</label>
                        <select name="txtestado" id="txtestado" value="">
                        <option>Pendiente</option>
                        <option>Cancelada</option>
                        <option>Pospuesta</option>
                        </select>
                      </div>
                        <div>
                            <button class="bt2" type="submit" name="accion" value="cancelar">Cancelar</button>
                            <button class="bt2" type="submit" name="accion" value="agregar">Guardar registro</button>
                        </div>
                        </div>
                        
                    </form> 
                </div> 
        </div>
        </div>

                    <!--------------3. POP UP "VISUALIZAR PACIENTE" - 3.1. CONTENEDOR MASCOTA----------------------------->

        <div class="vis-pac-pop-up">

            <div class="vis-pac-pop-wrap html_to_pdf">

                    <div class="close-vis-pac flex alinear-derecha2">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" id="close-vis-pac-viv" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#432B8D" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <circle cx="12" cy="12" r="9" />
                                          <path d="M10 10l4 4m0 -4l-4 4" />
                                    </svg>
                                </a>
                                </div>   
                                <h5>Nueva cita</h5>
                                <div class="contenedor-form">

                                <form class="formulario">

                               
                                <div class="field">
                                    <label>Fecha</label>
                                    <input type="date">
                                </div>
                                <div class="field">
                                    <label>hora</label>
                                    <input type="time">
                                </div>
                                <div class="field">
                                    <label>Paciente</label>
                                    <input type="text">
                                </div>
                                <div class="field">
                                    <label>Medico</label>
                                    <input type="text">
                                </div>
                                <div class="field">
                                    <label>Motivo</label>
                                    <input type="text">
                                </div>
                                <div class="field">
                                  <label>Esado</label>
                                  <select name="" id="">
                                  <option value="">Pendiente</option>
                                  <option value="">Cancelada</option>
                                  <option value="">Pospuesta</option>
                                  </select>
                                </div>
                                    <div>
                                        <button class="bt2" type="submit">Cancelar</button>
                                        <button class="bt2" type="submit">Guardar registro</button>
                                    </div>
                                  </form> 
                                </div>
                            </div>
                                        
                                    
          
                     

                    </div>
                    
                
             

              <!--------------5. POP UP "EDITAR PACIENTE" - 5.1. CONTENEDOR MASCOTA----------------------------->

        <div class="vis-pac-pop-up-edit">

            <div class="vis-pac-pop-wrap-edit">

                    <div class="close-vis-pac-edit flex alinear-derecha">
                            
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" id="close-vis-pac-edit" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#432B8D" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <circle cx="12" cy="12" r="9" />
                                          <path d="M10 10l4 4m0 -4l-4 4" />
                                    </svg>
                                </a>
                           

                    </div>
                    <h4>Editar cita</h4>
                    <div class="contenedor-form2">
                        
                    <form class="formularioeditar">
                        
              
                      
                      <div class="field">
                          <label>Fecha</label>
                          <input type="date">
                      </div>

                      <div class="field">
                          <label>hora</label>
                          <input type="time">
                      </div>

                      <div class="field">
                          <label>Paciente</label>
                          <input type="text">
                      </div>

                      <div class="field">
                          <label>Medico</label>
                          <input type="text">
                      </div>

                      <div class="field">
                          <label>Motivo</label>
                          <input type="text">
                      </div>

                      <div class="field">
                        <label>Esado</label>
                        <select name="" id="">
                        <option value="">Pendiente</option>
                        <option value="">Cancelada</option>
                        <option value="">Pospuesta</option>
                        </select>
                      </div>


                          <div>
                              <button class="bt2" type="submit">Cancelar</button>
                              <button class="bt2" type="submit">Guardar registro</button>
                          </div>
                        </form>
                    </div>            
                                    </div> <!--contenedor-infopaciente--> 
          
                               
                      

                        </div>
                        
                    
</main>
<script src="js/main.js"></script>
</body>

</html>