<!DOCTYPE html>
<html lang="en">
<head>
 
</head>
<body>
  <h1>Reviews Page</h1>

 
  <form action="save_review.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="message">Review:</label><br>
    <textarea id="message" name="message" rows="4" required></textarea><br><br>
    <input type="submit" value="Submit Review">
  </form>
<div class="reviews-content">
    <!-- Вміст відгуків -->
    <p>Відгук 1</p>
    <p>Відгук 2</p>
    <!-- Інші відгуки -->
</div>

  <hr>

  <h2>Previous Reviews:</h2>
  
 <?php
  $file = 'reviews.txt';

  if (file_exists($file)) {
      $reviews = file_get_contents($file);
      $comments = explode("\n", $reviews);

      foreach ($comments as $comment) {
          echo "<p>$comment</p>";
      }
  } else {
      echo "Файл з відгуками не знайдено!";
  }
  ?>
 
</body>
</html>
 
</body>
</html>

