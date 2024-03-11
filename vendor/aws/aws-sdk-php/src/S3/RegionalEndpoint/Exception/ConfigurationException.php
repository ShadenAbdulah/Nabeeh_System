<?php
namespace Aws\S3\RegionalEndpoint\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;
use RuntimeException;

/**
 * Represents an error interacting with configuration for sts regional endpoints
 */
class ConfigurationException extends RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
