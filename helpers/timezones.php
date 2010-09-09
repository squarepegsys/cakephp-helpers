<?php
class TimezonesHelper extends AppHelper {
	
	function show() {
		$zones = array(

			  'America/New_York'=>'EDT',
			  'America/Chicago'=>'CDT',
			  'America/Boise'=>'MDT',
			  'America/Phoenix'=>'MST (Arizona)',
			  'America/Los_Angeles'=>'PDT', 

		);
		$dateTime = new DateTime('now');
		foreach($zones as $zone => $name) {
			$zoneObject = new DateTimeZone($zone);
			$dateTime->setTimezone($zoneObject);
			$zones[$zone] = "Current time in ".$name." is ".$dateTime->format('H:i');
		}
		return $zones;
	}
	
}
?>
