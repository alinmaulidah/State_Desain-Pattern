<?php

require_once 'State.php';
require_once 'StoppedState.php';
require_once 'PlayingState.php';
require_once 'PausedState.php';
require_once 'MusicPlayer.php';

$player = new MusicPlayer();

// $player->play();  // Output: Playing music from stopped state.
// $player->pause(); // Output: Pausing the music.
// $player->play();  // Output: Resuming the music.
$player->stop(); 
$player->stop(); // Output: Stopping the music.
// $player->pause(); // Output: Cannot pause. Music is already stopped.
?>
