<?php

declare(strict_types=1);

use Doctrine\Persistence\Mapping\ClassMetadata;
use Doctrine\Persistence\ObjectManager;

if (!class_exists('Doctrine\Common\Persistence\Mapping\ClassMetadata')) {
    class_alias(ClassMetadata::class, 'Doctrine\Common\Persistence\Mapping\ClassMetadata');
}

if (!class_exists('Doctrine\Common\Persistence\ObjectManager')) {
    class_alias(ObjectManager::class, 'Doctrine\Common\Persistence\ObjectManager');
}
