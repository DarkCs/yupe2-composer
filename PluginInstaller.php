<?php

namespace yupe\composer;

use Composer\Installer\LibraryInstaller;
use Composer\IO\IOInterface;
use Composer\Composer;
use Composer\Package\PackageInterface;

class PluginInstaller extends LibraryInstaller
{
    public function supports($packageType)
    {
        echo "$packageType\n";
        return false;
    }
}
