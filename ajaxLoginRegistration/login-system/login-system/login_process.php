<?php

include_once'session.php';
include_once 'dbconfig.php';

$user_email = filter_input(INPUT_POST, 'user_email', FILTER_SANITIZE_EMAIL);
$user_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$query = 'SELECT * FROM reg_users
        WHERE user_email = :email';
$stmt = $db->prepare($query);
$stmt->bindParam(':email', $user_email);
$stmt->execute();
$results = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt->closeCursor();



if (count($results) > 0 && password_verify($user_password, $results['user_password'])) {

    $_SESSION['id'] = filter_var($results['user_id']);
    echo 'Ok';
} else { {
        echo 'Email or password does not exist';
    }
}

