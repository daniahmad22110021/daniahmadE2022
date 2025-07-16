<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Diagnosa Kekalahan ML</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Form Diagnosa Kekalahan Mobile Legends</h2>
    <form method="POST" action="proses.php">
        <label>Nickname:</label>
        <input type="text" name="nickname" required><br><br>

        <label>Tier Rank:</label>
        <select name="tier">
            <option value="Warrior">Warrior</option>
            <option value="Elite">Elite</option>
            <option value="Master">Master</option>
            <option value="Grandmaster">Grandmaster</option>
            <option value="Epic">Epic</option>
            <option value="Legend">Legend</option>
            <option value="Mythic">Mythic</option>
        </select><br><br>

        <label>Winrate Hero Favorit (%):</label>
        <input type="number" name="winrate" min="0" max="100"><br><br>

        <label>Jumlah Hero yang Dikuasai:</label>
        <input type="number" name="jumlah_hero"><br><br>

        <label>Role Favorit:</label>
        <select name="role">
            <option value="Tank">Tank</option>
            <option value="Support">Support</option>
            <option value="Marksman">Marksman</option>
            <option value="Assassin">Assassin</option>
            <option value="Fighter">Fighter</option>
            <option value="Mage">Mage</option>
        </select><br><br>

        <input type="submit" value="Diagnosa Sekarang">
    </form>
</body>
</html>