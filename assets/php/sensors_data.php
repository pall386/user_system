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
    }
?>