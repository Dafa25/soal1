<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Huruf Berdasarkan Score</title>
</head>
<body>
    <form method="post" action="">
        Masukkan Score: <input type="text" name="score">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $score = intval($_POST["score"]);

        
        function getGrade($score) {
            if ($score >= 90) {
                return 'A';
            } elseif ($score >= 80) {
                return 'B';
            } elseif ($score >= 70) {
                return 'C';
            } elseif ($score >= 60) {
                return 'D';
            } else {
                return 'F';
            }
        }

  
        $grade = getGrade($score);
        echo "Nilai Anda: $score, Anda mendapatkan Nilai: $grade";
    }
    ?>
</body>
</html>
