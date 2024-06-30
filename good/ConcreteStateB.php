<?php

require_once 'State.php';
require_once 'Context.php';

class ConcreteStateB implements State {
    public function handle(Context $context) {
        echo "State B handling request and transitioning to State A\n";
        $context->setState(new ConcreteStateA());
    }
}
