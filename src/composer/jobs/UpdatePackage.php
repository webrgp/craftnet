<?php

namespace craftnet\composer\jobs;

use craft\queue\BaseJob;
use craftnet\Module;

class UpdatePackage extends BaseJob
{
    public $name;
    public $force = false;
    public $dumpJson = false;

    public function execute($queue)
    {
        Module::getInstance()->getPackageManager()->updatePackage($this->name, $this->force, false, $this->dumpJson);
    }

    protected function defaultDescription()
    {
        return 'Update '.$this->name;
    }
}
