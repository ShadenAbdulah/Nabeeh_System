<?php
namespace Aws\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;
use RuntimeException;

class TokenException extends RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
