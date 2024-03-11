<?php
namespace Aws\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;
use RuntimeException;

class UnresolvedEndpointException extends RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
