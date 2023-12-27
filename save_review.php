<?php
  // Підключення до бази даних та збереження відгуку
  $connection = mysqli_connect('localhost', 'username', 'password', 'database_name');

  // Перевірка, чи були відправлені дані форми
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $review = $_POST['message'];

    // Додавання нового відгуку до бази даних
    $query = "INSERT INTO reviews (name, message) VALUES ('$name', '$review')";
    mysqli_query($connection, $query);
  }

  // Перенаправлення назад на сторінку відгуків
  header("Location: reviews.php");
?>
