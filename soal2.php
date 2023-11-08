<!DOCTYPE html>
<html>
<head>
    <title>Generate Pattern</title>
</head>
<body>
    <form method="post">
        <label for="rows">Masukkan jumlah baris: </label>
        <input type="number" name="rows" id="rows">
        <input type="submit" value="Generate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = $_POST["rows"];

        if ($rows > 1) {
            for ($i = 2; $i <= $rows; $i++) {
                $output = "*";

                for ($j = 2; $j < $i; $j++) {
                    $output .= "#%";
                }
                

                echo $output . "<br>";
            }
        } else {
            echo "Masukkan jumlah baris yang valid.";
        }
    }
    ?>
</body>
</html>
