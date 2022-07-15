<?php
include "hillclimb.php";
$sql = "SELECT id,name,latitude,longitude FROM locations";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  	$_SESSION['session_name'] = $row['name'];
    $_SESSION['session_id'] = $row['id'];
    $_SESSION['session_latitude'] = $row['latitude'];
    $_SESSION['session_longitude'] = $row['longitude'];
	}
	try
	{
		$tsp = TspBranchBound::getInstance();
		$tsp->addLocation(array('id'=>$_SESSION['session_name'], 'latitude'=>$_SESSION['session_latitude'], 'longitude'=>$_SESSION['session_latitude']));
		$tsp->addLocation(array('id'=>'manchester', 'latitude'=>53.480712, 'longitude'=>-2.234377));
		$tsp->addLocation(array('id'=>'london', 'latitude'=>51.500152, 'longitude'=>-0.126236));
		$tsp->addLocation(array('id'=>'birmingham', 'latitude'=>52.483003, 'longitude'=>-1.893561));
		$ans = $tsp->solve();
		echo "\nTotal cost: " . ceil($ans['cost']) . "\n\n";
	}
	catch (Exception $e)
	{
		echo $e;
		exit;
			}
		
	}
?>