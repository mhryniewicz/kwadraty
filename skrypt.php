<?php
$polaczenie = mysqli_connect("localhost", "root", "", "kwadraty");

if (!$polaczenie) {
    die("Nie udało się połączyć z kwadratami :(");
}

$sql = "SELECT pole, liczba_bokow, kolor FROM kwadraty";
$rezultat = mysqli_query($polaczenie, $sql);

if (mysqli_num_rows($rezultat) > 0) {
    while ($row = mysqli_fetch_assoc($rezultat)) {
        echo "Kolor: " . $row["kolor"] . ", Pole: " . $row["pole"] . " cm<sup>2</sup>, Liczba boków: " . $row["liczba_bokow"] . "<br>";
    }
} else {
    echo "Nie ma kwadratów :(";
}

mysqli_close($polaczenie);
?>
