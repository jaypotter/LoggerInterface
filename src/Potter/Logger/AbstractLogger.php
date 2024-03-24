<?php

declare(strict_types=1);

namespace Potter\Logger;

abstract class AbstractLogger implements LoggerInterface
{
    abstract public function emergency(string $message, array $context = []): void;
    abstract public function alert(string $message, array $context = []): void;
    abstract public function critical(string $message, array $context = []): void;
    abstract public function error(string $message, array $context = []): void;
    abstract public function warning(string $message, array $context = []): void;
    abstract public function notice(string $message, array $context = []): void;
    abstract public function info(string $message, array $context = []): void;
    abstract public function debug(string $message, array $context = []): void;
    abstract public function log(mixed $level, string $message, array $context = []): void;
}