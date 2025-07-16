<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nickname = $_POST['nickname'];
    $tier = $_POST['tier'];
    $winrate = $_POST['winrate'];
    $jumlah_hero = $_POST['jumlah_hero'];
    $role = $_POST['role'];

    $diagnosa = "";

    if ($winrate < 45) {
        $diagnosa .= "Winrate terlalu rendah.<br>";
    }

    if ($jumlah_hero < 5) {
        $diagnosa .= "Terlalu sedikit hero yang dikuasai.<br>";
    }

    if (in_array($tier, ['Warrior', 'Elite', 'Master'])) {
        $diagnosa .= "Tingkatkan mekanik dasar dan makro.<br>";
    }

    if ($role == 'Assassin' && $winrate < 50) {
        $diagnosa .= "Pertimbangkan role lain selain Assassin.<br>";
    }

    if ($diagnosa == "") {
        $diagnosa = "Tidak ada penyebab signifikan ditemukan.";
    }

    mysqli_query($conn, "INSERT INTO hasil_diagnosa (nickname, tier, winrate, jumlah_hero, role, hasil) 
    VALUES ('$nickname', '$tier', $winrate, $jumlah_hero, '$role', '$diagnosa')");

    header("Location: hasil.php?nickname=" . urlencode($nickname));
}
?>