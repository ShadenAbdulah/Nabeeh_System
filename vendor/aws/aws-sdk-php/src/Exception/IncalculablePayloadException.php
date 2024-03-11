<?php
namespace Aws\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;
use RuntimeException;

class IncalculablePayloadException extends RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
