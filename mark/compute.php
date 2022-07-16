<?php
session_start();
include "includes/connection.php";
include "hillclimb.php";
        $currentname= $_SESSION['session_current_name'];
        $currentlatitude=$_SESSION['session_current_latitude'];
        $currentlongitude=$_SESSION['session_current_longitude'];
        $firstname= $_SESSION['session_first_name'];
        $firstlatitude=$_SESSION['session_first_latitude'];
        $firstlongitude=$_SESSION['session_first_longitude'];
        $secondname= $_SESSION['session_second_name'];
        $secondlatitude=$_SESSION['session_second_latitude'];
        $secondlongitude=$_SESSION['session_second_longitude'];



        $currentname = str_replace(" ", "+", $currentname);
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $currentname; ?>&output=embed"></iframe>
 
        <?php
  
        try
    {

        $tsp = TspBranchBound::getInstance();
        $tsp->addLocation(array('id'=>$currentname, 'latitude'=>$currentlatitude, 'longitude'=>$currentlongitude));
        $tsp->addLocation(array('id'=>$firstname, 'latitude'=>$firstlatitude, 'longitude'=>$firstlongitude));
        $tsp->addLocation(array('id'=>$secondname, 'latitude'=>$secondlatitude, 'longitude'=>$secondlongitude));
        $ans = $tsp->solve();
        echo "\nTotal cost: " . ceil($ans['cost']) . "\n\n";
    }
    catch (Exception $e)
    {
        echo $e;
        exit;
            } 

?>