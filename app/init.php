<?php

session_start();

// Composer's autoloader
require_once 'vendor/autoload.php';

$_SESSION['user_id'] = 2;

$stripe = [
    'publishable' => 'pk_test_UUdG8vjaJegtkH460qaNPiGu',
    'private' => 'sk_test_Td2uOu5jyQZ2b7KdDjLJR8xk'
];

Stripe::setApiKey($stripe['private']);

$db = new PDO('mysql:host=192.168.99.100;dbname=website', 'root', 'mysql');

$userQuery = $db->prepare("
    SELECT id, username, email, premium
    FROM users
    WHERE id = :user_id
");

$userQuery->execute(['user_id' => $_SESSION['user_id']]);

$user = $userQuery->fetchObject();

