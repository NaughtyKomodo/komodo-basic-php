<?php

$nama = "Abid Faiz";
$alamat = "Jember";
$golDarah = "AB";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h1>Halo Bosku, <?php echo $nama; ?></h1>
        <h2>Alamat: <?php echo $alamat; ?></h2>
        <h2>Golongan Darah: <?php echo $golDarah; ?></h2>
    </section>

</body>

</html>


<!-- string -->

<?php
$nama = "Abid Faiz Saladin";
$alamat = "<h1>Jember</h1>";

echo $nama;
// dia bakal nyetak baris baru
echo "<br>";
echo $alamat;
?>