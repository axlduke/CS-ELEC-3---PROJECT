<?php
    include '../includes/connection.php';
    include "../hillclimb.php";
    session_start();
    $id = $_SESSION['session_id'];
    if (isset($_POST["submit_coordinates"]))
    {
    $current_location = trim(mysqli_real_escape_string($connection, $_POST['current_location']));
    $first_location = trim(mysqli_real_escape_string($connection, $_POST['first_location']));
    $second_location = trim(mysqli_real_escape_string($connection, $_POST['second_location']));

        $get_current_location="SELECT * FROM locations WHERE name = '$current_location'";
    $result = $connection->query($get_current_location);
    if ($result->num_rows > 0) {
      while($current = $result->fetch_assoc()) {
        $_SESSION['session_current_name'] = $current["name"];
        $_SESSION['session_current_latitude'] = $current["latitude"];
        $_SESSION['session_current_longitude'] = $current["longitude"];

    }

    }
    $get_first_location="SELECT * FROM locations WHERE name = '$first_location'";
    $result = $connection->query($get_first_location);
    if ($result->num_rows > 0) {
      while($first = $result->fetch_assoc()) {
        $_SESSION['session_first_name'] = $first["name"];
        $_SESSION['session_first_latitude'] = $first["latitude"];
        $_SESSION['session_first_longitude'] = $first["longitude"];

    }

    }
    $get_second_location="SELECT * FROM locations WHERE name = '$second_location'";
    $result = $connection->query($get_second_location);
    if ($result->num_rows > 0) {
      while($second = $result->fetch_assoc()) {
        $_SESSION['session_second_name'] = $second["name"];
        $_SESSION['session_second_latitude'] = $second["latitude"];
        $_SESSION['session_second_longitude'] = $second["longitude"];

    }

    }
    header("Location: ../compute.php");
    }
?>
    
}   