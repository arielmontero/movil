<?php
$ID_Linea = $datos['ID_Linea'];
$ID_Plan = $datos['Plan_ID'];
$ID_Equipo = $datos['Equipo_ID'];
$ID_Sim= $datos['Sim_ID'];
$Usuario = $datos['Usuario'];
$Funcion = $datos['Funcion'];
$Organismo = $datos['organismo'];
$Area = $datos['area'];
$Fecha = $datos['Fecha'];
$plan = $linea->verplan($ID_Plan); 
$equipo = $linea->verequipo($ID_Equipo); 
$sim = $linea->versim($ID_Sim); 
$historial= $linea->verhistorial($ID_Linea); 
?>
<div class="box-principal">
  <div class="panel panel-success">
    <div class="panel-body">
      <h3 class="titulo"><?php echo $Usuario; ?><hr></h3>
      <div class="row">
        <div class="col-md-6">
          <table class="table table-striped table-hover">
          <tbody>
            <div class="panel-heading">
            <h3 class="panel-title">Funcion: <?php echo $Funcion; ?><hr><b></b></h3>
            </div>        
            <ul class="list-group col-sm-12">            
            <li class="list-group-item">
            <b>Organismo: </b><?php echo $Organismo; ?>
            </li>            
            </ul> 
            <ul class="list-group col-sm-12">            
            <li class="list-group-item">
            <b>Area: </b><?php echo $Area; ?>
            </li>            
            </ul>              
            <ul class="list-group col-sm-12">            
            <li class="list-group-item">
            <b>Fecha: </b><?php echo $Fecha; ?>
            </li>            
            </ul>               
            <ul class="list-group col-sm-12">                      
            </ul>                        
            <ul class="list-group col-sm-12">            
            <li class="list-group-item">
                        <a href="<?php echo URL;?>linea/editar/<?php echo $ID_Linea;?>" class="btn btn-dark">Editar</a>
            </li>            
            </ul>   
          </tbody>
          </table>
</div>
<div class="col-md-6">
    <table class="table table-striped table-hover">
    <tbody>

          <h3 class="titulo">Sim<hr></h3>
           <thead class="thead-dark">
            <th>Numero</th>
            <th>Imei</th>
            <th>Tipo</th>
            <th>Estado</th>
            <th>Referencia</th>
            <th>Periodo</th>
            <th>Editar</th>
          </thead>
            <?php
if ($ID_Sim== 1){ ?>
 
<td> <a href="<?php echo URL;?>linea/editarsim/<?php echo $ID_Sim;?>&Linea=<?php echo $ID_Linea;?>" class="btn btn-warning">Asignar</a> </

<?php
}else{
             while($riw = mysqli_fetch_array($sim)){ ?>
          <tr>
           <td  scope="row"> <?php echo $riw['Numero'];?></td> 
           <td> <?php echo $riw['Imei'];?></td> 
           <td> <?php echo $riw['Tipo'];?></td> 
            <td> <?php echo $riw['Estado'];?></td>
             <td> <?php echo $riw['referencia'];?></td>
           <td> <?php echo $riw['periodo'] . " Dias";?></td>
<?php  if ($riw['Numero']== 'N/A'){ ?>   

            <td> <a href="<?php echo URL;?>linea/editarsim/<?php echo $ID_Sim;?>&Linea=<?php echo $ID_Linea;?>" class="btn btn-warning">Asignar</a> </td>   
          </tr>
            <?php }else{ ?>

            <td> <a href="<?php echo URL;?>linea/editarsim/<?php echo $riw['ID_Sim'];?>&Linea=<?php echo $ID_Linea;?>" class="btn btn-danger">Liberar</a> </td>   
          </tr>
<?php 
}
} 
} 
?>
    </tbody>
   </table>
   </div> 


<div class="col-md-6">
  <table class="table table-striped table-hover">
    <tbody>
      <h3 class="titulo">Equipo<hr></h3>
                 <thead class="thead-dark">
            <th>Marca</th>
            <th>Tipo</th>
            <th>Modelo</th>
            <th>Imei</th>
            <th>Editar</th>
          </thead>
<?php
if ($ID_Equipo== 1){ ?>
 
<td> <a href="<?php echo URL;?>linea/editarequipo/<?php echo $ID_Equipo;?>&Linea=<?php echo $ID_Linea;?>" class="btn btn-warning">Asignar</a> </

<?php
}else{


             while($raw = mysqli_fetch_array($equipo)){ ?>
          <tr>
           <td  scope="row"> <?php echo $raw['Marca'];?></td> 
           <td> <?php echo $raw['Tipo'];?></td> 
           <td> <?php echo $raw['Modelo'];?></td> 
            <td> <?php echo $raw['Imei'];?></td>
          
<?php  if ($raw['Marca']== 'N/A'){ ?>

            <td> <a href="<?php echo URL;?>linea/editarequipo/<?php echo $ID_Equipo;?>&Linea=<?php echo $ID_Linea;?>" class="btn btn-warning">Asignar</a> </td>   
          </tr>
            <?php }else{ ?>

            <td> <a href="<?php echo URL;?>linea/editarequipo/<?php echo $raw['ID_Equipo'];?>&Linea=<?php echo $ID_Linea;?>" class="btn btn-danger">Liberar</a> </td>   
          </tr>


<?php
}
} 
}
?>



            
    </tbody>
   </table>
</div>    
<div class="col-md-6">
  <table class="table table-striped table-hover">
    <tbody>
    <h3 class="titulo">Plan<hr></h3>
          <thead class="thead-dark">
          <th>Nombre</th>
          <th>Minutos</th>
          <th>Datos</th>
          <th>Sms</th>
          <th>Cobertura</th>
          <th>Costo</th>
         
          </thead>
          <?php

           while ($row = mysqli_fetch_array($plan)){ ?>
          <div class="form-group col-md-6">
          <tr>
          <td  scope="row"> <?php echo $row['Nombre'];?></td> 
          <td> <?php echo $row['Minutos'];?></td>
          <td> <?php echo $row['Datos'];?></td>
          <td> <?php echo $row['Sms'];?></td>   
          <td> <?php echo $row['Cobertura'];?></td> 
          <td> <?php echo "$".$row['Costo'];?></td>   
          <!--<td>    <a href="<?php echo URL;?>linea/editarplan/<?php echo $row['ID_Plan'];?>" class="btn btn-dark">Editar</a></td>   -->
          </tr>
          </div>
          <?php } ?>
    </tbody>
  </table>
</div>

            <div class="col-md-12">
              <table class="table table-striped table-hover">
                <tbody>
                <h3 class="titulo">Historial<hr></h3>
                      <thead class="thead-dark">
                      <th>Entidad</th>
                      <th>Comentario</th>
                      <th>Fecha</th>
                     
                      </thead>
                      <?php

                       while ($rhw = mysqli_fetch_array($historial)){ ?>
                      <div class="form-group col-md-10">
                      <tr>
                      <td  scope="row"> <?php echo $rhw['Entidad'];?></td> 
                      <td> <?php echo $rhw['Comentario'];?></td>
                      <td> <?php echo $rhw['Fecha'];?></td>
                      <!--<td>    <a href="<?php echo URL;?>linea/editarplan/<?php echo $row['ID_Plan'];?>" class="btn btn-dark">Editar</a></td>   -->
                      </tr>
                      </div>
                      <?php } ?>
                </tbody>
              </table>
            </div>
      </div>
    </div>
  </div>
</div>