<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних з форми
    $name = $_POST["name"];
    $review = $_POST["message"];

    // Формування рядка для запису у файл
    $reviewData = "Name: $name\nReview: $review\n\n";

    // Відкриття файлу reviews.txt для дозаписування
    $file = fopen("reviews.txt", "a");

    if ($file) {
        // Запис даних у файл
        fwrite($file, $reviewData);

        // Закриття файлу
        fclose($file);

        // Повернення користувача на попередню сторінку
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    } else {
        echo "Помилка при відкритті файлу для запису!";
    }
}
?>
