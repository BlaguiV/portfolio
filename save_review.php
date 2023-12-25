<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $message = $_POST['message'] ?? '';

    if ($name && $message) {
        $reviewData = $name . '|' . $message . PHP_EOL;
        file_put_contents('reviews.txt', $reviewData, FILE_APPEND | LOCK_EX);
    }
}

header("Location: reviews.html");
exit;
?>
