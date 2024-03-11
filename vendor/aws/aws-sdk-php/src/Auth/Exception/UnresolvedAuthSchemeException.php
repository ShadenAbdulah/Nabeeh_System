<?php

namespace Aws\Auth\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;
use RuntimeException;

/**
 * Represents an error when attempting to resolve authentication.
 */
class UnresolvedAuthSchemeException extends RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
