<?php

class MusicPlayer {
    private $stoppedState;
    private $playingState;
    private $pausedState;
    private $currentState;

    public function __construct() {
        $this->stoppedState = new StoppedState($this); //menginisialiasi state berhenti
        $this->playingState = new PlayingState($this);
        $this->pausedState = new PausedState($this);
        $this->currentState = $this->stoppedState; //mengatur state awal ke berhenti
    }

    public function setState(State $state): void {
        $this->currentState = $state; //mengatur state saat ini
    }

    public function getStoppedState(): State {
        return $this->stoppedState;
    }

    public function getPlayingState(): State {
        return $this->playingState;
    }

    public function getPausedState(): State {
        return $this->pausedState;
    }

    public function play(): void {
        $this->currentState->play();
    }

    public function pause(): void {
        $this->currentState->pause();
    }

    public function stop(): void {
        $this->currentState->stop();
    }
}
?>
