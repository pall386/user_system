<?php
	require_once 'assets/php/header.php';
	require_once 'assets/php/sensors_data.php';
	$sensor = new Sensor();
	$temp = $sensor-> sensor_temp();
	$moisture = $sensor-> sensor_moisture();	
?>

<script type="text/javascript">
      google.charts.load('visualization', "1", {
          packages: ['corechart']
      });
  </script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div class="row">
	<div class="col-lg-12">
		<div class="card-deck my-3">
			<div class="card border-danger">
				<div class="card-header bg-danger text-center text-white lead">
					Διάγραμμα Θερμοκρασίας
				</div>
				<div id="chartDept" style="width: 99%; height: 400px;"></div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card-deck my-3">
			<div class="card border-info">
				<div class="card-header bg-info text-center text-white lead">
					Διάγραμμα Υγρασίας
				</div>
				<div id="chartΜoisture" style="width: 99%; height: 400px;"></div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(lineChart);

      function lineChart() {
        var data = google.visualization.arrayToDataTable([
        	['Ώρες', 'Θερμοκρασία'],
			<?php
				foreach($temp as $row){
					echo '["'.$row['sensors_data_time'].'",'.$row['sensors_temperature_data'].'],';
				}	
			?>
        ]);
		 
        var options = {
          title: 'Arduino Sensors',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chartDept'));
        chart.draw(data, options);
      }
    </script>	


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(lineChart);

      function lineChart() {
        var data = google.visualization.arrayToDataTable([
        	['Ώρες', 'Υγρασία'],
			<?php
				foreach($moisture as $row){
					echo '["'.$row['sensors_data_time'].'",'.$row['sensors_data_moisture'].'],';
				}	
			?>
        ]);
		 
        var options = {
          title: 'Arduino Sensors',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chartMoisture'));
        chart.draw(data, options);
      }
    </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
</body>
</html>
