
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
<script type="text/javascript">  
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Nombre', 'Costo' , { role: 'style' }, { role: 'annotation' }],
      <?php

          while($row = mysqli_fetch_array($datos)){
            echo "['".$row['Nombre']."', ".$row['number'].", 'stroke-color: #76A7FA; stroke-width: 4; fill-color: #76A7FA', '".$row['number']."'],";
          }

      ?>
    ]);
    
    var options = {
        title: 'Planes Disponibles',
        width: 400,
        height: 250,
		is3D: true,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);


        var optionss = {
        title: 'Planes Disponibles',
        width: 400,
        height: 250,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
    };
    
    var chart = new google.visualization.BarChart(document.getElementById('barchart'));
    
    chart.draw(data, optionss);

                   var optionsa= {
                   title: 'Planes Disponibles',
                   curveType: 'function',
                   legend: { position: 'bottom' }
               };

               var chart = new google.visualization.AreaChart(document.getElementById('areachart'));
               chart.draw(data, optionsa);
}

</script>
<?php
if($_SESSION["autentica"] !== "SIP"){
?>
	<br>
	<h3 class="titulo"><a href="<?php echo URL;?>" class="btn btn-primary"><?php echo "INICIE SESIÓN"; ?></a></h3>

<?php 
}else{
	$us=$_SESSION["idUser"];
$per=$request->getControlador();
$res=$consulta->ControlPermiso($us,$per);


if ($res== 1) {
	?>
<div class="box-principal">
	<h3 class="titulo">Costo de Plan Por Nombre</h3>
		<div class="panel panel-success">
			<div class="panel-heading">

				<table class="table table-striped table-hover">
					<div class="panel-body">


           <div>  
                <div id="piechart"></div>  
     
                <div id="barchart"></div>  

                <div id="areachart"></div>  
           </div> 
				
			
			</div>

				</table>


        <div class="row">
 
    <div class="card text-white bg-primary mb-3 mx-1" style="max-width: 18rem">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-footer bg-transparent border-success">Footer</div>
</div>


<div class="card text-white bg-danger mb-3 mx-1"  style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Danger card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-footer bg-transparent border-success">Footer</div>
</div>

<div class="card text-white bg-warning mb-3 mx-1"  style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Danger card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-footer bg-transparent border-success">Footer</div>
</div>

<div class="card text-white bg-info mb-3 mx-1"  style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Danger card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-footer bg-transparent border-success">Footer</div>
</div>

</div>
			</div>

	    </div>
</div>
<?php 
	}
}
 ?>
