<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <img src="crested.jpg">
    <?php
        $conn = mysqli_connect('localhost','root','','hodowla');
        $kw4 = mysqli_query($conn,"SELECT `rasa` FROM `rasy`");

            echo "<ol>";
            while($tab = mysqli_fetch_array($kw4)){
                echo "<li>$tab[0]</li>";
            }
            echo "</ol>";

        $kw2 = mysqli_query($conn,"SELECT DISTINCT `data_ur`, `miot`, rasy.rasa FROM `swinki` INNER JOIN rasy ON swinki.rasy_id = rasy.id WHERE rasy_id = 1; ");
            $sk2 = mysqli_fetch_array($kw2);
            echo "<h2>Rasa: $sk2[0]</h2>";
            echo "<p>Data urodzenia: $sk2[1]</p>";
            echo "<p>Oznaczenie miotu: $sk2[2]</p>";

        $kw3 = mysqli_query($conn,"SELECT `imie`, `cena`, `opis` FROM `swinki` WHERE `rasy_id` = 1; ");
            while($sk3 = mysqli_fetch_array($kw3)){
                echo "<h3>$sk3[0] - $sk3[1]</h3>";
                echo "<p>$sk3[2]</p>";
            }
            mysqli_close($conn);
    ?>
</body>
</html>