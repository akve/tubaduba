<?php

include('../../../wp-load.php');

//include('testinit.php');
$action = $_REQUEST['action'];

$country = $_REQUEST['country'];


# kill it if there's no action
if (!$action || $action == "") exit();

//var_dump($_REQUEST);
$GLOBALDATA = json_decode(file_get_contents('php://input'), true);
class REMOTE {
	public function test() {
		echo "test ok";
	}

	public function load($data, $country){
		$filename = "store.json";
		if ($country == "ru") {
			$filename = "store_ru.json";
		}
		echo(file_get_contents($filename));
	}

	public function save($data, $country){
		$filename = "store.json";
		if ($country == "ru") {
			$filename = "store_ru.json";
		}
		copy($filename, "backup/".time().".json");
		echo file_put_contents($filename, $data["data"]);
	}
}

$remote = new REMOTE();
$remote->$action($GLOBALDATA, $country);
?>