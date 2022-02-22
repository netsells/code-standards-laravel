<?php

namespace Netsells\CodeStandards\Laravel\Core;

use Composer\Script\Event as ScriptEvent;
use Composer\Installer\PackageEvent;
use Symfony\Component\Filesystem\Filesystem;

class Composer
{
    /**
     * We'll ensure that the quality tools for code standards are set up.
     */
    public static function postUpdate(ScriptEvent $event): void
    {
        // TODO: Return early if it was an install rather than update
        // \Symfony\Component\VarDumper\VarDumper::dump($event);

        $rootProjectDir = getcwd();
        $resourcesDir = __DIR__ . '/../resources/';

        (new Filesystem())->mirror($resourcesDir, $rootProjectDir);
    }

    public static function postPackageUpdate(PackageEvent $event): void
    {
        // Check if this package has been updated, and if so
        // we may need to run some "upgrade" logic here
    }
}
