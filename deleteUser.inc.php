<?php 
    // Include the DB connection
    include_once './includes/dbh.inc.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <title>User deleted</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/PHP-User-Subscription/index.php">User Subscription</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/PHP-User-Subscription/index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/PHP-User-Subscription/subscribers.php">Subscribers</a>
            </li>
            </ul>
        </div>
    </nav>
    <h1 class='title text-center'>Deleted User</h1>
    <?php
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        // Receive user data and escape strings
        // $email = mysqli_real_escape_string($conn, $email);
        echo "<p class='text-center'>This email ( $email ) has been deleted from the database.<p>";

        // Create a SQL query to delete users
        $deleteUser = "DELETE FROM user_subscription WHERE user_email = '$email';";

        // Create a SQL query to keep track of deleted users
        $trackDeletedUsers = "INSERT INTO deleted_users (user_first, user_last, user_email)
        VALUES ('$first', '$last', '$email');";
        
        mysqli_query($conn, $trackDeletedUsers);
        mysqli_query($conn, $deleteUser);

        // Select all deleted users and print the amount of deleted users
        $getAllDeletedSubscribers = 'SELECT * FROM deleted_users;';
        $result = mysqli_query($conn, $getAllDeletedSubscribers);
        $resultCheck = mysqli_num_rows($result);
        $text = $resultCheck > 1 ? "users" : "user";
        echo "<p class='text-center'>You've deleted $resultCheck $text.</p>";

        // Redirect users back to the front page
        // header('Location: ../subscribers.php?user-deletion=success');
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>