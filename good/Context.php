<?php

class Context {
    private $state;

    public function __construct(State $state) {
        $this->state = $state;
    }

    public function setState(State $state) {
        $this->state = $state;
    }

    public function request() {
        $this->state->handle($this);
    }
}
