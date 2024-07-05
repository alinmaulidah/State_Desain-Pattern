<?php

require_once 'State.php';
require_once 'StoppedState.php';
require_once 'PlayingState.php';
require_once 'PausedState.php';
require_once 'MusicPlayer.php';

// Membuat instance MusicPlayer
$player = new MusicPlayer();

// Fungsi untuk menampilkan menu dan membaca input dari pengguna
function showMenu() {
    echo "\nMenu Perintah:\n";
    echo "1. play\n";
    echo "2. pause\n";
    echo "3. stop\n";
    echo "4. exit\n";
    echo "Masukkan Perintah: ";
}

while (true) {
    showMenu();
    $input = trim(fgets(STDIN));

    switch ($input) {
        case 'play':
            $player->play();
            break;
        case 'pause':
            $player->pause();
            break;
        case 'stop':
            $player->stop();
            break;
        case 'exit':
            exit("Keluar dari Music Player...\n");
        default:
            echo "Perintah tidak valid, coba ketik 'play', 'pause', 'stop', atau 'exit'.\n";
    }
}
