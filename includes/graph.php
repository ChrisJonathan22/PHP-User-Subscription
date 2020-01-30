<?php
    include_once 'dbh.inc.php';
    // Select all users
    $getAllSubscribers = 'SELECT * FROM user_subscription;';
    $result = mysqli_query($conn, $getAllSubscribers);
    $resultCheck = mysqli_num_rows($result);

    // Select all deleted users
    $getAllDeletedSubscribers = 'SELECT * FROM deleted_users;';
    $deletedUsersResult = mysqli_query($conn, $getAllDeletedSubscribers);
    $deletedUsersResultCheck = mysqli_num_rows($deletedUsersResult);
?>