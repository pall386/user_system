<?php
	require_once 'assets/php/header.php';
	require_once 'assets/php/sensors_data.php';
	$sensor = new Sensor();
	$temp = $sensor-> temp();
	$moisture = $sensor-> moisture(); 
?> 
	
<div class="row">
	<div class="col-lg-12"> 
		<div class="card-deck mt-3 text-light text-center font-weight-bold">
			<div class="card bg-danger">
				<div class="card-header">θερμοκρασία</div>
				<div class="card-body">
					<h1 class="display-4" required><?=$temp['sensors_temperature_data'];?>°C</h1>
				</div>
			</div>
			<div class="card bg-info">
				<div class="card-header">Υγρασία</i></div>
				<div class="card-body">
				<h1 class="display-4" required><?=$moisture['moisture_data'];?>%</h1>
				</div>
			</div>
			<div class="card bg-success">
				<div class="card-header">...</div>
				<div class="card-body">
					<h1 class="display-4">...</h1>
				</div>
			</div>
		</div>	
	</div>	
</div>

<!--Footer...-->	
</div>
</div>
</div>
<!--...Area-->	

</script>
</body>
</html>