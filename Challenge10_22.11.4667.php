<!DOCTYPE html>
<html>
<head>
    <title>Form Penjumlahan PHP</title>
</head>
<body>
    <h3>Raihan Aly Zaky</h3>
    <h3>22.11.4667</h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama"><br><br>
        Angka 1: <input type="number" name="angka1"><br><br>
        Angka 2: <input type="number" name="angka2"><br><br>
        <input type="submit" name="submit" value="Jumlahkan">
    </form>
    <br>
    <?php
    // Cek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari form
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $nama = $_POST['nama'];

        // Validasi jika kedua nilai adalah angka
        if (is_numeric($angka1) && is_numeric($angka2)) {
            // Hitung jumlahnya
            $jumlah = $angka1 + $angka2;
            $kurang = $angka1 - $angka2 ;
            $perkalian = $angka1 * $angka2 ;
            $pembagian = $angka1 / $angka2 ;
            $modulus = $angka1 % $angka2 ;
            // Tampilkan hasilnya
            echo "<h2>Halo, $nama. </h2>";
            echo "Hasil penjumlahan dari $angka1 + $angka2 adalah $jumlah. <br>";
            echo "Hasil penjumlahan dari $angka1 - $angka2 adalah $kurang.<br>";
            echo "Hasil penjumlahan dari $angka1 * $angka2 adalah $perkalian.<br>";
            echo "Hasil penjumlahan dari $angka1 / $angka2 adalah $pembagian.<br>";
            echo "Hasil penjumlahan dari $angka1 % $angka2 adalah $modulus.";
        } else {
            // Jika salah satu atau kedua nilai bukan angka
            echo "Mohon masukkan dua angka yang valid.";
        }
    }
    ?>
</body>
</html>

