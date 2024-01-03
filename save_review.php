<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $review = $_POST["message"];

  
    $reviewData = "Name: $name\nReview: $review\n\n";

   
    $file = fopen("reviews.txt", "a");

    if ($file) {
        
        fwrite($file, $reviewData);

       
        fclose($file);

      
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    } else {
        echo "Помилка при відкритті файлу для запису!";
    }
}
?>
