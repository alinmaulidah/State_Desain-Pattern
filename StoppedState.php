<?php

class StoppedState implements State {
    private $player;

    public function __construct(MusicPlayer $player) {
        $this->player = $player;
    }

    public function play(): void {
        echo "Playing music from stopped state.\n";
        $this->player->setState($this->player->getPlayingState());
    }

    public function pause(): void {
        echo "Cannot pause. Music is already stopped.\n";
    }

    public function stop(): void {
        echo "Music is already stopped.\n";
    }
}
?>
