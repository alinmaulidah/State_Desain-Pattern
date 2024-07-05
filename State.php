<?php

interface State {
    public function play(): void; //mendeklarasikan method
    public function pause(): void;
    public function stop(): void;
}
?>
