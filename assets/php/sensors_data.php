<?
    require_once 'config.php';
    class Sensor extends Database{
        public function sensor_temp(){
			$sql = "SELECT sensors_temperature_data, sensors_data_time FROM sensor_temperature";
			$stmt = $this-> conn-> prepare($sql);
			$stmt-> execute();
			$result = $stmt->fetchAll();
			return $result;
		}

		public function sensor_moisture(){
			$sql = "SELECT moisture_data, moisture_time FROM moisture_sensor";
			$stmt = $this-> conn-> prepare($sql);
			$stmt-> execute();
			$result = $stmt->fetchAll();
			return $result;
		}

		//last temperature 
		public function temp() {
			$sql = "SELECT sensors_temperature_data FROM sensor_temperature ORDER BY sensors_data_id DESC LIMIT 1;";
			$stmt = $this-> conn-> prepare($sql);
			$stmt-> execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;			
		}		

		//last Moisture 
		public function moisture() {
			$sql = "SELECT moisture_data FROM moisture_sensor ORDER BY moisture_id DESC LIMIT 1;";
			$stmt = $this-> conn-> prepare($sql);
			$stmt-> execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;			
		}		
    }
?>