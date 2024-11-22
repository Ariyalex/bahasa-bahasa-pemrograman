<?php
class EventDispatcher {
    private $listeners = [];

    public function listen($event, callable $listener) {
        $this->listeners[$event][] = $listener;
    }

    public function dispatch($event, $data = null) {
        if (!isset($this->listeners[$event])) {
            return;
        }
        foreach ($this->listeners[$event] as $listener) {
            $listener($data);
        }
    }
}