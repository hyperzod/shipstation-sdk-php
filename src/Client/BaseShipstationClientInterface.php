<?php

namespace Hyperzod\ShipstationSdkPhp\Client;

/**
 * Interface for a Shipstation client.
 */
interface BaseShipstationClientInterface
{
   /**
    * Gets the API key used by the client to send requests.
    *
    * @return null|string the API key used by the client to send requests
    */
   public function getApiKey();

   /**
    * Gets the base URL for Shipstation's API.
    *
    * @return string the base URL for Shipstation's API
    */
   public function getApiBase();
}
