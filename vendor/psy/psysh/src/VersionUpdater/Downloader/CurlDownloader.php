<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2023 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\VersionUpdater\Downloader;

use Psy\Exception\ErrorException;
use Psy\Shell;
use Psy\VersionUpdater\Downloader;
use function curl_close;
use function curl_error;
use function curl_exec;
use function curl_init;
use function curl_setopt;
use function curl_setopt_array;
use function fclose;
use function file_exists;
use function fopen;
use function rename;
use function sys_get_temp_dir;
use function tempnam;
use function unlink;
use const CURLOPT_FAILONERROR;
use const CURLOPT_FILE;
use const CURLOPT_FOLLOWLOCATION;
use const CURLOPT_HEADER;
use const CURLOPT_HTTPHEADER;
use const CURLOPT_TIMEOUT;
use const CURLOPT_URL;

class CurlDownloader implements Downloader
{
    private $tempDir = null;
    private $outputFile = null;

    /** {@inheritDoc} */
    public function setTempDir(string $tempDir)
    {
        $this->tempDir = $tempDir;
    }

    /** {@inheritDoc} */
    public function download(string $url): bool
    {
        $tempDir = $this->tempDir ?: sys_get_temp_dir();
        $this->outputFile = tempnam($tempDir, 'psysh-archive-');
        $targetName = $this->outputFile.'.tar.gz';

        if (!rename($this->outputFile, $targetName)) {
            return false;
        }

        $this->outputFile = $targetName;

        $outputHandle = fopen($this->outputFile, 'w');
        if (!$outputHandle) {
            return false;
        }
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_FAILONERROR    => true,
            CURLOPT_HEADER         => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT        => 10,
            CURLOPT_FILE           => $outputHandle,
            CURLOPT_HTTPHEADER     => [
                'User-Agent' => 'PsySH/'.Shell::VERSION,
            ],
        ]);
        curl_setopt($curl, CURLOPT_URL, $url);
        $result = curl_exec($curl);
        $error = curl_error($curl);
        curl_close($curl);

        fclose($outputHandle);

        if (!$result) {
            throw new ErrorException('cURL Error: '.$error);
        }

        return (bool) $result;
    }

    /** {@inheritDoc} */
    public function getFilename(): string
    {
        return $this->outputFile;
    }

    /** {@inheritDoc} */
    public function cleanup()
    {
        if (file_exists($this->outputFile)) {
            unlink($this->outputFile);
        }
    }
}
