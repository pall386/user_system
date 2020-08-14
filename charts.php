<?php
	require_once 'assets/php/header.php';
	require_once 'assets/php/sensors_data.php';
	$result = new Sensor();
?>

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
			<div class="card border-danger">
				<div class="card-header bg-danger text-center text-white lead">
					Διάγραμμα Θερμοκρασίας
				</div>
				<div id="chartMoisture" style="width: 99%; height: 400px;"></div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

	//chart Temperature
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(lineChartTemp);

    function lineChartTemp() {
        var data = google.visualization.arrayToDataTable([
        	['Ώρες', 'Θερμοκρασία'],
			<?php
				$temp = $result-> sensor_temp();
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

	google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(lineChartMoisture);

    function lineChartMoisture() {
        var data = google.visualization.arrayToDataTable([
    	    ['Ώρα', 'Υγρασία'],
			<?php
				$moisture = $result-> sensor_moisture();
				foreach($moisture as $row){
					echo '["'.$row['moisture_time'].'",'.$row['moisture_data'].'],';
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

<!--Footer...-->	
</div>
</div>
</div>
<!--...Area-->

</body>
</html>
