<?php 
    include_once './includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Subscribers</title>
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
                <a class="nav-link" href="#">Subscribers</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class='container'>
        <h1 class='text-center title'>List of Subscribers haha</h1>
        <div class='card'>
            <form action ='./deleteUser.inc.php' method = 'POST'>
                <ul class='list-group list-group-flush'>
                    <?php 

                        // Select all users
                        $getAllSubscribers = 'SELECT * FROM user_subscription;';
                        $result = mysqli_query($conn, $getAllSubscribers);
                        $resultCheck = mysqli_num_rows($result);
                        
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $first = $row['user_first'];
                                $last = $row['user_last'];
                                $email = $row['user_email'];
                                echo "<input type='checkbox' hidden class='form-control' name='email' id=$email value=$email>";
                                echo  "<li class='list-group-item'><label for=$email>" . $first . " " . $last . " - " . $email . "</label></li>";
                            }
                        }
                    ?>
                </ul>
                <div class='text-center pt-10 delete-btn'>
                    <button type='submit' name='submit' class='btn btn-danger'>Delete</button>
                </div>
            </form>
        </div>
        <p class="subscriber_count"><?php echo "This is the number of subscribers $resultCheck."; ?></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./scripts/script.js"></script>
</body>
</html>