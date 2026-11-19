<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesin Pencari</title>
</head>
<body>
    <h1>Mesin Pencarian - Jurusan RPL</h1>
    <form action="pencarian.php" method="get">
        <input type="text" name="kata_kunci" placeholder="Cari Sesuatu...">
        <button type="submit">Cari</button>
    </form>
    <hr>
    <?php
    if (isset($_GET['kata_kunci'])) {
        $cari = $_GET['kata_kunci'];
        echo "<p>Menampilkan hasil pencarian untuk: <br>
        <b>$cari</b></p>";
    }
    ?>
</body>
</html>