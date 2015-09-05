<?php

namespace yupe\composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class Installer extends LibraryInstaller
{
    public function supports($packageType)
    {
        return $packageType === 'yupe2-plugin';
    }

    protected function getPackageBasePath(PackageInterface $package)
    {
        $this->initializeVendorDir();

        return ($this->vendorDir ? $this->vendorDir . '/_plugins' : '') . $package->getPrettyName();
    }
}
