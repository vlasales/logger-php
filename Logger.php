<?php declare(strict_types=1);

class Logger implements LoggerInterface {
    public function log(string $level, string $message, array $context = []): void {
        // ...
    }

    public function __call(string $level, array $args) {
        assert(in_array($level, [info', 'notice', 'warning', 'error', 'critical']));
        assert(gettype($args[0]) === "string");
        assert(gettype($args[1]) === "string");
        $this->log($level, $args[0], $args[1]);
    }
}
