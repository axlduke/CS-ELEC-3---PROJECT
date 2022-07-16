<?php 
    include 'includes/connection.php';
    session_start();
    if (!isset($_SESSION['session_id'])){
        echo '<script>window.alert("PLEASE LOGIN FIRST!!")</script>';
        echo '<script>window.location.replace("login.php");</script>';
    }
?>
<form method="POST" action="auth/submit_place_button.php">
<!--         <span>Hi, <?php echo $_SESSION['session_email'];?></span> -->
        <label>Current Place</label>
        <select name="current_location">
            <?php 
                    $sql = "SELECT * FROM `locations`";
                    $all_location = mysqli_query($connection,$sql);
                    while ($location = mysqli_fetch_array(
                        $all_location,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $location["name"];?>"><?php echo $location["name"];?></option>
            <?php 
                endwhile; 
            ?>
        </select>

        <label>1st Place</label>
        <select name="first_location">
            <?php 
                    $sql = "SELECT * FROM `locations`";
                    $all_location = mysqli_query($connection,$sql);
                    while ($location = mysqli_fetch_array(
                        $all_location,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $location["name"];?>"><?php echo $location["name"];?></option>
            <?php 
                endwhile; 
            ?>
        </select>

        <label>2nd Place</label>
        <select name="second_location">
            <?php 
                    $sql = "SELECT * FROM `locations`";
                    $all_location = mysqli_query($connection,$sql);
                    while ($location = mysqli_fetch_array(
                        $all_location,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $location["name"];?>"><?php echo $location["name"];?></option>
            <?php 
                endwhile; 
            ?>
        </select>

    <input type="submit" name="submit_coordinates">

</form>