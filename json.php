<?php
$file = 'reviews.txt';

if (file_exists($file)) {
    $reviews = file_get_contents($file);
    
    $reviewCount = substr_count($reviews, 'Review:');

    $data = array(
        'total_reviews' => $reviewCount
    );

    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    echo json_encode(array('error' => 'Файл з відгуками не знайдено!'));
}
?>
