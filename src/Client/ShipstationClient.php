<?php

namespace Hyperzod\ShipstationSdkPhp\Client;

use Hyperzod\ShipstationSdkPhp\Service\CoreServiceFactory;

class ShipstationClient extends BaseShipstationClient
{
    /**
     * @var CoreServiceFactory
     */
    private $coreServiceFactory;

    public function __get($name)
    {
        if (null === $this->coreServiceFactory) {
            $this->coreServiceFactory = new CoreServiceFactory($this);
        }

        return $this->coreServiceFactory->__get($name);
    }
}
