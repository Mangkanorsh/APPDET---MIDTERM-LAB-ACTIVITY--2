<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Midterm Lab Activity #2</title>
  <style>
        body {
        background-color: #000; /* Black background */
        color: #33ff33; /* Green text */
        font-family: monospace, Consolas, "Courier New", Courier, sans-serif; /* Monospace font */
        }

        h1 {
        text-align: center;
        margin: 0;
        color: #0f0; /* Brighter green for title */
        }

        .content {
        padding: 20px;
        margin: 0 auto; /* Center horizontally */
        max-width: 800px; /* Wider content area */
        background-color: #111; /* Darker gray */
        border-radius: 5px; /* Add some rounded corners */
        color: #ccc; /* Lighter gray text for content */
        box-shadow: 0 0 5px rgba(0, 255, 0, 0.3); /* Green shadow */
        }

        .random-numbers {
        list-style: none; /* Remove default bullet points */
        padding: 0;
        margin: 0;
        color: #0f0; /* Brighter green for numbers */
        }

        .random-numbers ul {
            list-style-type: none;
        }


        .random-numbers li {
        margin-bottom: 5px;
        }

        .statistics {
        margin-top: 20px; /* Add space after the list */
        }

        .statistics b {
        font-weight: bold;
        color: #0f0; /* Brighter green for labels */
        }

  </style>
</head>
<body>
  <div class="content">
    <h1>MIDTERM LAB ACTIVITY #2<br>
      Control Structure and Arrays with sort( ) and rand( ) function</h1>
    <div class="random-numbers">
      <b>Generated random numbers:</b>
      <ul>
        <?php
        $random_numbers = []; // This array will store the randomly generated numbers
        for ($i = 0; $i < 20; $i++) { // loop that iterates 20 times
          $random_numbers[] = rand(1, 100); // each iteration generates a random number between 1 and 100 and appends it to the $random_numbers array
        }

        sort($random_numbers); // sorts the elements of the $random_numbers array in ascending order

        foreach ($random_numbers as $number) { // In each iteration, the current number is assigned to the variable $number.
          echo "<li>>  $number</li>";
        }
        ?>
      </ul>
    </div>
    <div class="statistics">
      <b for="lowest">Lowest number:</b> <?php echo min($random_numbers); // returns the lowest value from an array?> <br>
      <b for="highest">Highest number:</b> <?php echo max($random_numbers); // returns the highest value in an array?> <br>
      <b for="sum">Sum of all numbers:</b> <?php echo array_sum($random_numbers); // calculates the sum of all the numbers?> <br>
      <b for="average">Average of all numbers:</b> <?php echo array_sum($random_numbers) / count($random_numbers); // calculates the average of all the numbers in the array?> <br>
    </div>
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
