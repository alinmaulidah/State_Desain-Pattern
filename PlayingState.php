<?php

class PlayingState implements State {
    private $player;

    public function __construct(MusicPlayer $player) {
        $this->player = $player;
    }

    public function play(): void {
        echo "Music is already playing.\n";
    }

    public function pause(): void {
        echo "Pausing the music.\n";
        $this->player->setState($this->player->getPausedState());
    }

    public function stop(): void {
        echo "Stopping the music.\n";
        $this->player->setState($this->player->getStoppedState());
    }
}
?>
