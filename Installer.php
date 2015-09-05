<?php

namespace yupe\composer;

use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    public function supports($packageType)
    {
        echo "$packageType\n";
        return false;
    }
}
