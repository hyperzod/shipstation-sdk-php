<?php

namespace Hyperzod\ShipstationSdkPhp\Service;

use Hyperzod\ShipstationSdkPhp\Enums\HttpMethodEnum;

class TrackingService extends AbstractService
{
   /**
    * Track a package with label id on shipstation
    *
    * @param array $params
    *
    * @throws \Hyperzod\ShipstationSdkPhp\Exception\ApiErrorException if the request fails
    *
    */
   public function trackPackage(array $params)
   {
      return $this->request(HttpMethodEnum::GET, '/tracking?carrier_code=' . $params['carrier_code'] . '&tracking_number=' . $params['tracking_number'], []);
   }
}
