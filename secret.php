<?php
require_once 'app/init.php';

if (!$user->premium) {
    header('Location: index.php');
    exit();
}