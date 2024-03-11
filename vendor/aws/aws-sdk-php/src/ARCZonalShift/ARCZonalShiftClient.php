<?php
namespace Aws\ARCZonalShift;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS ARC - Zonal Shift** service.
 * @method Result cancelZonalShift(array $args = [])
 * @method Promise cancelZonalShiftAsync(array $args = [])
 * @method Result createPracticeRunConfiguration(array $args = [])
 * @method Promise createPracticeRunConfigurationAsync(array $args = [])
 * @method Result deletePracticeRunConfiguration(array $args = [])
 * @method Promise deletePracticeRunConfigurationAsync(array $args = [])
 * @method Result getManagedResource(array $args = [])
 * @method Promise getManagedResourceAsync(array $args = [])
 * @method Result listAutoshifts(array $args = [])
 * @method Promise listAutoshiftsAsync(array $args = [])
 * @method Result listManagedResources(array $args = [])
 * @method Promise listManagedResourcesAsync(array $args = [])
 * @method Result listZonalShifts(array $args = [])
 * @method Promise listZonalShiftsAsync(array $args = [])
 * @method Result startZonalShift(array $args = [])
 * @method Promise startZonalShiftAsync(array $args = [])
 * @method Result updatePracticeRunConfiguration(array $args = [])
 * @method Promise updatePracticeRunConfigurationAsync(array $args = [])
 * @method Result updateZonalAutoshiftConfiguration(array $args = [])
 * @method Promise updateZonalAutoshiftConfigurationAsync(array $args = [])
 * @method Result updateZonalShift(array $args = [])
 * @method Promise updateZonalShiftAsync(array $args = [])
 */
class ARCZonalShiftClient extends AwsClient {}
