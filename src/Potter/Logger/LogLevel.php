<?php

declare(strict_types=1);

namespace Potter\Logger;

use \Psr\Log\LogLevel as PsrLogLevel;

final class LogLevel extends PsrLogLevel
{
    public const string EMERGENCY = 'emergency';
    public const string ALERT     = 'alert';
    public const string CRITICAL  = 'critical';
    public const string ERROR     = 'error';
    public const string WARNING   = 'warning';
    public const string NOTICE    = 'notice';
    public const string INFO      = 'info';
    public const string DEBUG     = 'debug';
}