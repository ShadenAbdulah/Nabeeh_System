<?php
namespace Aws\Retry\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;
use RuntimeException;

/**
 * Represents an error interacting with retry configuration
 */
class ConfigurationException extends RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
