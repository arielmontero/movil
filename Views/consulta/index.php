
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
  } else {
  $us=$_SESSION["idUser"];
  $per=$request->getControlador();
  $res=$consulta->ControlPermiso($us,$per);
  if ($res== 1) {
?>

<div class="container-fluid">
  <div class="text-xl-center mb-5">
    <h3> Estadisticas </h3>
  </div>
  <div class="container d-flex justify-content-evenly">
    <div class="shadow p-3 mb-5 bg-body rounded border-2" id="piechart"></div>  
    <div class="shadow p-3 mb-5 bg-body rounded border-2" id="barchart"></div>  
  </div>
  <div class="my-5 container">
    <div class="shadow-sm p-3 mb-5 bg-body rounded" id="areachart"></div>  
  </div>
  <div class="container-xxl my-5 d-flex justify-content-center">
    <div class="row">
      <div class="shadow p-3 m-5 bg-body rounded border-2" style="max-width: 18rem">
        <div class="card-body">
          <h5 class="card-title">Primary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="shadow p-3 m-5 bg-body rounded border-2" style="max-width: 18rem">
        <div class="card-body">
          <h5 class="card-title">Primary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="shadow p-3 m-5 bg-body rounded border-2" style="max-width: 18rem">
        <div class="card-body">
          <h5 class="card-title">Primary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
	}
}
?>
