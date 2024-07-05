<?php

class PausedState implements State {
    private $player;

    public function __construct(MusicPlayer $player) {
        $this->player = $player;
    }

    public function play(): void {
        echo "Resuming the music.\n";
        $this->player->setState($this->player->getPlayingState());
    }

    public function pause(): void {
        echo "Music is already paused.\n";
    }

    public function stop(): void {
        echo "Stopping the music from paused state.\n";
        $this->player->setState($this->player->getStoppedState());
    }
}
?>
