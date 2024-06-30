<?php

class Context {
    private $state;

    public function __construct($state) {
        $this->state = $state;
    }

    public function request() {
        if ($this->state == 'A') {
            echo "State A handling request and transitioning to State B\n";
            $this->state = 'B';
        } elseif ($this->state == 'B') {
            echo "State B handling request and transitioning to State A\n";
            $this->state = 'A';
        } else {
            echo "Unknown state\n";
        }
    }
}

// Client code
$context = new Context('A');
$context->request();  // Output: State A handling request and transitioning to State B
$context->request();  // Output: State B handling request and transitioning to State A

