<?php
session_start();

if (!isset($_SESSION['number'])) {
    $_SESSION['number'] = rand(1, 100);
    $_SESSION['attempts'] = 0;
}

if (isset($_POST['submit'])) {
    $guess = $_POST['guess'];
    $_SESSION['attempts']++;

    if ($guess == $_SESSION['number']) {
        echo "<p class='success'>Benar cuyy!! ".$_SESSION['attempts']." Percobaan:)</p>";
        unset($_SESSION['number']);
        unset($_SESSION['attempts']);
    } elseif ($guess < $_SESSION['number']) {
        echo "<p class='message'>kedikitan! Coba lagi.</p>";
    } else {
        echo "<p class='message'>Kebanyakan! Coba lagi.</p>";
    }
}
?>
