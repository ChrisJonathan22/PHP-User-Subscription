<?php 
        // Include the DB connection
        include_once 'dbh.inc.php';

        // Receive user data and escape strings
        $first = mysqli_real_escape_string($conn, $_POST['first']);
        $last = mysqli_real_escape_string($conn, $_POST['last']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        // Create SQL query
        $addUser = "INSERT INTO user_subscription (user_first, user_last, user_email)
        VALUES ('$first', '$last', '$email');";
        
        mysqli_query($conn, $addUser);

        // Redirect users back to the front page
        header('Location: ../subscribers.php?signup=success');

?>