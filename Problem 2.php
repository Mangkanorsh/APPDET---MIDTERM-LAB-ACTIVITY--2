<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>MIDTERM LAB ACTIVITY #2<br>
      Control Structure and Arrays with sort( ) and rand( ) function</h1>
    <?php

    // Generate 10 random scores (50-100)
    $scores = [];
    for ($i = 0; $i < 10; $i++) {
        $scores[] = rand(50, 100);
    }

    // Display scores (original order)
    echo "<b>Original Scores:</b><br>";
    foreach ($scores as $score) {
        echo "$score ";
    }
    echo "<br><br>";

    // Display scores with red font color if the score is less than 75
    echo "<b>Marked Scores:</b><br>";
    foreach ($scores as $score) {
        if ($score < 75) {
            echo "<span style='color:red;'>$score </span>";
        } else {
            echo "$score ";
        }
    }
    echo "<br><br>";

    // Sort scores
    sort($scores);

    // Display scores (sorted order)
    echo "<b>Sorted Scores:</b><br>";
    foreach ($scores as $score) {
        echo "$score ";
    }
    echo "<br>";

    ?>

</body>
</html>