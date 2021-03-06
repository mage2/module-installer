<?php

namespace AvoRed\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * AvoRed E commerce Module installer
 *
 * @author Purvesh Patel <ind.purvesh@gmail.com>
 */
class AvoRedModule implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $avoredInstaller = new AvoRedInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($avoredInstaller);

    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
        //@todo implement this method

    }

} 
