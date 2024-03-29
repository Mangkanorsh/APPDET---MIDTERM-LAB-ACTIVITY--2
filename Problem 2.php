<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem #2</title>
    <style>
        body {background-color: #000; /* Black background */color: #0f0; /* Green text color */font-family: monospace; /* Monospaced font for hacker vibes */margin: 0;padding: 20px;display: flex;justify-content: center;align-items: center;min-height: 100vh;
        }.score-box {padding: 20px;margin: 0 auto; /* Center horizontally */max-width: 800px; /* Wider content area */background-color: #111; /* Darker gray */border-radius: 5px; /* Add some rounded corners */color: #ccc; /* Lighter gray text for content */box-shadow: 0 0 5px rgba(0, 255, 0, 0.3); /* Green shadow */
        }h1 {margin-bottom: 10px;color: #0f0; /* Brighter green for title */text-align: center; /* Center align heading */
        }.score {font-size: 18px;margin-bottom: 5px;margin-left: 5%;color: #0f0; /* Brighter green for title */
        }.low-score {color: #a00; /* Red for scores below 75 */
        }
    </style>
</head>
<body>
    <div class="score-box">

        <h1>MIDTERM LAB ACTIVITY #2<br>
        Control Structure and Arrays with sort( ) and rand( ) function</h1>

        <?php
            // Generate 10 random scores (50-100) and store them in an array
            $scores = array();
            for ($i = 0; $i < 10; $i++) {
                $scores[] = rand(50, 100);
            }

            // Display scores (original order)
            echo "Original Scores:<br><br>";
            foreach ($scores as $score) {
                echo "<span class='score'>> $score</span><br>";
            }

            // Display scores (with red font color if the score is less than 75)
            echo "<br>Marked Scores:<br><br>";
            foreach ($scores as $score) {
                if ($score < 75) {
                    $colorClass = 'low-score'; // if it is less than 75 $colorClass variable will have a string value of 'low-score'
                } else {
                    $colorClass = ''; // if not $colorClass variable will be an empty variable
                }
                echo "<span class='score $colorClass'>> $score</span><br>"; // display the $score varaiable 
            }

            // Sort scores in ascending order
            sort($scores);

            // Display scores (sorted order)
            echo "<br>Sorted Scores:<br><br>";
            foreach ($scores as $score) {
                echo "<span class='score'>> $score</span><br>";
            }
        ?>
    </div>
</body>
</html>

<!-- 
    NORSH DANIEL FRANCOIS LOPEZ 
    DANICA KASSANDRA LEPARDO
    FRANCIS SHANE LEE FLORES
    LORIE MAE QUIDADO
    CARMELITO CABALLERO
    MA. HANNAH RAFAELLA CABALLO
    AUREA RECTO
    JADE VILLAHERMOSA
 -->
