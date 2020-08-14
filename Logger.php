<?php declare(strict_types=1);

class Logger implements LoggerInterface {
    public function log(string $level, string $message, array $context = []): void {
        // ...
    }

    public function __call(string $level, array $args) {
        $this->log($level, $args[0], $args[1]);
    }
}
