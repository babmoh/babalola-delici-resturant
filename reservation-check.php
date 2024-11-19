<?php   
    session_start();
    include ('connect.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $pnumber = $_POST["pnumber"];
        $persons = $_POST["persons"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $message = $_POST["message"];

        $query="SELECT * From reservation_form where name='$name'";
        $result = mysqli_query($data, $query);
        if (mysqli_num_rows($result) > 0) {
           echo "Name Already Exists !";
        }
          if (mysqli_num_rows($result) == 0) {
      
      
        $query="INSERT INTO reservation_form (name,  pnumber, persons, date, time, message) VALUES ('$name', '$pnumber', '$persons', '$date', '$time', '$message')";
        mysqli_query($data, $query);

        // Set a success message
        $_SESSION['message'] = "Booking done successful!";
        header("Location: index.php");
        exit;
    } else {
        // Name has been used, set an error message
        $_SESSION['message'] = "Already Booked!";
        header("Location: index.php");
      }
    } else {
      // Guest code is invalid, set an error message
      $_SESSION['message'] = "Sorry, Contact Admin!";
      header("Location: index.php");
    }
    
    ?>
