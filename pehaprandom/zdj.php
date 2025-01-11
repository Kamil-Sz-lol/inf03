<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $conn = mysqli_connect('localhost','root','','wycieczki');
    $kw1 = mysqli_query($conn,"SELECT `id`, `dataWyjazdu`, `cel`, `cena` FROM `wycieczki` WHERE `dostepna` = 1; ");
    echo "<ul>";
    while($tab = mysqli_fetch_array($kw1)){
        echo "<li>$tab[0] dnia $tab[1] jedziemy do $tab[2], cena: $tab[3]</li>";
    }
    echo "</ul>";

    $kw2 = mysqli_query($conn,"SELECT `nazwaPliku`, `podpis` FROM `zdjecia` ORDER BY podpis DESC;");
    while($zdj = mysqli_fetch_array($kw2)){
        echo "<img src='$zdj[0]' alt='$zdj[1]'>";
    }
    mysqli_close($conn);
    ?>
</body>
</html>
