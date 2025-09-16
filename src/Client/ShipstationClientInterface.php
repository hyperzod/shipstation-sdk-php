<?php

namespace Hyperzod\ShipstationSdkPhp\Client;

/**
 * Interface for a Shipstation client.
 */
interface ShipstationClientInterface extends BaseShipstationClientInterface
{
   /**
    * Sends a request to Shipstation's API.
    *
    * @param string $method the HTTP method
    * @param string $path the path of the request
    * @param array $params the parameters of the request
    */
   public function request($method, $path, $params);
}
