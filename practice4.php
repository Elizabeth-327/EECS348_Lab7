<html>

<head>
</head>

<body>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num = $_POST["size"];
        if ($num > 0) {
            //Display multiplication table
            echo "<table border='1'>";
            
            //Display column indices
            echo "<tr><th>&times;</th>"; //Generates a table row with a single table header cell ('<th') containing the multiplication sign symbol "x" ('&times;')
            for ($i = 1; $i <= $num; $i++) { //Displays an entire column
                echo "<th>$i</th>"; 
            }
            echo "</tr>";

            for ($i = 1; $i <= $num; $i++) {
                echo "<tr>";
                #Display row index
                echo "<td><b>$i</b></td>"; 
                for ($j = 1; $j <= $num; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        else {
            echo "Please enter a positive number.";
        }
    }
    ?>
</body>

</html>