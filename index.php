<?php 
    include_once './includes/graph.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <title>User Subscription</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">User Subscription</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <!-- Live -->
                <!-- <a class="nav-link" href="/PHP-User-Subscription/subscribers.php">Subscribers</a> -->
            <!-- Live -->
            <!-- Offline -->
                <a class="nav-link" href="/subscribers.php">Subscribers</a>
            <!-- Offline -->
            </li>
            </ul>
        </div>
    </nav>
    <div class='container'>
        <h1 class='text-center'>Please subscribe for more news!</h1>
        <form action='includes/signup.inc.php' method='POST'>
            <div class="form-group">
                <label for="fistname">Firstname</label>
                <input type="text" class="form-control" name='first' id="firstname" placeholder='Firstname' >
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" name='last' id="lastname" placeholder='Lastname'>
            </div>
            <div class='form-group'>
                <label for='email'>Email</label>
                <input type="email" class="form-control" name='email' id="email" aria-describedby="emailHelp" placeholder='Email'>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <button type='submit' name='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
    <p id="subscriberCount" hidden><?php echo $resultCheck ?></p>
    <p id="deletedSubscriberCount" hidden><?php echo $deletedUsersResultCheck ?></p>
    <canvas id="myChart" width="100px" height="100px"></canvas> 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./scripts/script.js"></script>
</body>
</html>