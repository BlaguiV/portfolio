<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reviews Page</title>
  <!-- Додайте ваші стилі або зовнішні таблиці стилів -->
</head>
<body>
  <h1>Reviews Page</h1>

  <!-- Форма для додавання нового відгуку -->
  <form action="save_review.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="message">Review:</label><br>
    <textarea id="message" name="message" rows="4" required></textarea><br><br>
    <input type="submit" value="Submit Review">
  </form>

  <hr>

  <h2>Previous Reviews:</h2>

  <!-- Виведення попередніх відгуків -->
  <?php
    // Підключення до бази даних та вибірка відгуків
    $connection = mysqli_connect('localhost', 'username', 'password', 'database_name');
    $query = "SELECT * FROM reviews";
    $result = mysqli_query($connection, $query);

    // Виведення відгуків у вигляді списку
    if (mysqli_num_rows($result) > 0) {
      echo '<ul>';
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<li><strong>Name:</strong> ' . $row['name'] . '<br>';
        echo '<strong>Review:</strong> ' . $row['message'] . '</li><br>';
      }
      echo '</ul>';
    } else {
      echo 'No reviews yet.';
    }

    // Закриття з'єднання з базою даних
    mysqli_close($connection);
  ?>
</body>
</html>
