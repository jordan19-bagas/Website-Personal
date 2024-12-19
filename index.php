<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tebak angka</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    


    <img src="gambar 1.jpg" width ="100px" height="140px">
    <div class="game-container">
        <h2>Tebak Angka</h2>
        <div class="game">
            <p>Tebak angka dari 1 sampai 100</p>
            <form action="index.php" method="post">
                <input type="number" name="guess" placeholder="Masukkan angka" required>
                <button type="submit" name="submit">Cek</button>
            </form>
            <?php include 'guess.php'; ?>
            
        </div>
    </div>
    <div class="video">
            <a href="video 1.mp4"> JANGAN DI KLIK (KHUSUS ⚠18+⚠)</a>
            </div>
</body>
</html>
