<?php

require_once 'State.php';
require_once 'Context.php';

class ConcreteStateA implements State {
    public function handle(Context $context) {
        echo "State A handling request and transitioning to State B\n";
        $context->setState(new ConcreteStateB());
    }
}

