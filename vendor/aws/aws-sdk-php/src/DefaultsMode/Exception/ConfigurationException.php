<?php
namespace Aws\DefaultsMode\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;
use RuntimeException;

/**
 * Represents an error interacting with configuration mode
 */
class ConfigurationException extends RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
