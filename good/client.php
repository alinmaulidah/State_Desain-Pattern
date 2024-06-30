<?php

require_once 'ConcreteStateA.php';
require_once 'ConcreteStateB.php';
require_once 'Context.php';

// Client code
$context = new Context(new ConcreteStateA());
$context->request();  // Output: State A handling request and transitioning to State B
$context->request();  // Output: State B handling request and transitioning to State A

