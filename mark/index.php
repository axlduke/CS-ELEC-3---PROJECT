<?php 
    include 'includes/connection.php';
    session_start();
?>
<form method="POST">
    <p>
        <input type="text" name="current_location" placeholder="Enter your current location">
        <input type="text" name="current_latitude" placeholder="Enter your current latitude">
        <input type="text" name="current_longitude" placeholder="Enter your current longitude">
    </p>
    

    <p>
        <input type="text" name="first_location" placeholder="Enter the location">
        <input type="text" name="first_latitude" placeholder="Enter latitude">
        <input type="text" name="first_longitude" placeholder="Enter longitude">
    </p>
    

    <p>
        <input type="text" name="second_location" placeholder="Enter the location">
        <input type="text" name="second_latitude" placeholder="Enter latitude">
        <input type="text" name="second_longitude" placeholder="Enter longitude">
    </p>
 
    <input type="submit" name="submit_coordinates">

</form>
<?php
    include "hillclimb.php";
    if (isset($_POST['submit_coordinates'])) {
        $current_location = $_POST['current_location'];
        $current_latitude = $_POST['current_latitude'];
        $current_longitude = $_POST['current_longitude'];
        $first_location = $_POST['first_location'];
        $first_latitude = $_POST['first_latitude'];
        $first_longitude = $_POST['first_longitude'];
        $second_location = $_POST['second_location'];
        $second_latitude = $_POST['second_latitude'];
        $second_longitude = $_POST['second_longitude'];

        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $current_latitude; ?>,<?php echo $current_longitude; ?>&output=embed"></iframe>
 
        <?php
        try
    {
        $tsp = TspBranchBound::getInstance();
        $tsp->addLocation(array('id'=>$current_location, 'latitude'=>$current_latitude, 'longitude'=>$current_longitude));
        $tsp->addLocation(array('id'=>$first_location, 'latitude'=>$first_latitude, 'longitude'=>$first_longitude));
        $tsp->addLocation(array('id'=>$second_location, 'latitude'=>$second_latitude, 'longitude'=>$second_longitude));
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