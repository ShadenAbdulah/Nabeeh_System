<?php
namespace Aws\QLDB;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon QLDB** service.
 * @method Result cancelJournalKinesisStream(array $args = [])
 * @method Promise cancelJournalKinesisStreamAsync(array $args = [])
 * @method Result createLedger(array $args = [])
 * @method Promise createLedgerAsync(array $args = [])
 * @method Result deleteLedger(array $args = [])
 * @method Promise deleteLedgerAsync(array $args = [])
 * @method Result describeJournalKinesisStream(array $args = [])
 * @method Promise describeJournalKinesisStreamAsync(array $args = [])
 * @method Result describeJournalS3Export(array $args = [])
 * @method Promise describeJournalS3ExportAsync(array $args = [])
 * @method Result describeLedger(array $args = [])
 * @method Promise describeLedgerAsync(array $args = [])
 * @method Result exportJournalToS3(array $args = [])
 * @method Promise exportJournalToS3Async(array $args = [])
 * @method Result getBlock(array $args = [])
 * @method Promise getBlockAsync(array $args = [])
 * @method Result getDigest(array $args = [])
 * @method Promise getDigestAsync(array $args = [])
 * @method Result getRevision(array $args = [])
 * @method Promise getRevisionAsync(array $args = [])
 * @method Result listJournalKinesisStreamsForLedger(array $args = [])
 * @method Promise listJournalKinesisStreamsForLedgerAsync(array $args = [])
 * @method Result listJournalS3Exports(array $args = [])
 * @method Promise listJournalS3ExportsAsync(array $args = [])
 * @method Result listJournalS3ExportsForLedger(array $args = [])
 * @method Promise listJournalS3ExportsForLedgerAsync(array $args = [])
 * @method Result listLedgers(array $args = [])
 * @method Promise listLedgersAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result streamJournalToKinesis(array $args = [])
 * @method Promise streamJournalToKinesisAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateLedger(array $args = [])
 * @method Promise updateLedgerAsync(array $args = [])
 * @method Result updateLedgerPermissionsMode(array $args = [])
 * @method Promise updateLedgerPermissionsModeAsync(array $args = [])
 */
class QLDBClient extends AwsClient {}
