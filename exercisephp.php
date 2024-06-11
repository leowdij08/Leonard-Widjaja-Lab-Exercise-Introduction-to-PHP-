<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise PHP</title>
</head>
<body>
    <?php
    echo "<h1>Leonard W</h1>";

    // Menampilkan "Hello World"
    echo "<h2>Hello World</h2>";

    // Menampilkan 10 baris "Hello World"
    echo "<h2>10 Baris 'Hello World'</h2>";
    for ($i = 0; $i < 10; $i++) {
        echo "Hello World<br>";
    }

    // Menampilkan 10 baris text "Hello World", dengan setiap baris genap ditambah text "Hello World - [no baris]"
    echo "<h2>10 Baris 'Hello World' dengan Baris Genap Ditandai</h2>";
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo "Hello World - $i<br>";
        } else {
            echo "Hello World<br>";
        }
    }

    // Array berisi nama bulan
    $months = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    echo "<h2>Nama Bulan</h2>";
    echo "<ul>";
    foreach ($months as $month) {
        echo "<li>$month</li>";
    }
    echo "</ul>";

    // Tampilkan array 2 dimensi yang menyimpan nama bulan dan hari libur nasional 
    $months_and_holidays = array(
        "Januari" => "Tahun Baru",
        "Februari" => "Imlek",
        "Maret" => "Nyepi",
        "April" => "Paskah",
        "Mei" => "Hari Buruh",
        "Juni" => "Hari Lahir Pancasila",
        "Juli" => "Idul Adha",
        "Agustus" => "Hari Kemerdekaan",
        "September" => "Tahun Baru Islam",
        "Oktober" => "Maulid Nabi",
        "November" => "Hari Pahlawan",
        "Desember" => "Natal"
    );

    echo "<h2>Hari Libur Nasional</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nama Bulan</th><th>Hari Libur</th></tr>";
    foreach ($months_and_holidays as $month => $holiday) {
        echo "<tr><td>$month</td><td>$holiday</td></tr>";
    }
    echo "</table>";

    // 4 operasi aritmatika
    function tambah($a, $b) {
        return $a + $b;
    }

    function kurang($a, $b) {
        return $a - $b;
    }

    function kali($a, $b) {
        return $a * $b;
    }

    function bagi($a, $b) {
        return $a / $b;
    }

    // Contoh penggunaan fungsi aritmatika
    echo "<h2>Operasi Aritmatika</h2>";
    echo "Hasil penjumlahan 20 dan 5 adalah " . tambah(20, 5) . "<br>";
    echo "Hasil pengurangan 20 dan 5 adalah " . kurang(20, 5) . "<br>";
    echo "Hasil perkalian 20 dan 5 adalah " . kali(20, 5) . "<br>";
    echo "Hasil pembagian 20 dan 5 adalah " . bagi(20, 5) . "<br>";
    ?>
    <h2>Formulir</h2>
    <form action="#" method="post">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
