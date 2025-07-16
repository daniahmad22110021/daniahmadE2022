<?php
include 'koneksi.php';
$nickname = $_GET['nickname'];
$data = mysqli_query($conn, "SELECT * FROM hasil_diagnosa WHERE nickname = '$nickname' ORDER BY id DESC LIMIT 1");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Diagnosa</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Hasil Diagnosa untuk <?php echo $row['nickname']; ?></h2>
    <p><strong>Tier:</strong> <?php echo $row['tier']; ?></p>
    <p><strong>Winrate:</strong> <?php echo $row['winrate']; ?>%</p>
    <p><strong>Jumlah Hero:</strong> <?php echo $row['jumlah_hero']; ?></p>
    <p><strong>Role:</strong> <?php echo $row['role']; ?></p>
    <p><strong>Diagnosa:</strong><br><?php echo $row['hasil']; ?></p>

    <canvas id="chart" width="400" height="200"></canvas>
    <script>
        const ctx = document.getElementById('chart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Winrate', 'Jumlah Hero'],
                datasets: [{
                    label: 'Statistik',
                    data: [<?php echo $row['winrate']; ?>, <?php echo $row['jumlah_hero']; ?>],
                    backgroundColor: ['rgba(75, 192, 192, 0.5)', 'rgba(255, 206, 86, 0.5)']
                }]
            }
        });
    </script>
    <br><a href="index.php">🔁 Diagnosa Ulang</a>
</body>
</html>