<?php
function regen_energy($last_energy, $last_timestamp, $energy_time)
{
	//Algoritma regen_energy
	$reqTime = time() - $last_timestamp;
	$temp = floor($reqTime / 180);
	$totalEnergy = $last_energy+$temp;	
	//Return current energy
	return $totalEnergy;
}
