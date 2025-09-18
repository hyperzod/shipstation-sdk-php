<?php

namespace Hyperzod\ShipstationSdkPhp\Service;

use Hyperzod\ShipstationSdkPhp\Enums\HttpMethodEnum;

class RatesService extends AbstractService
{
   /**
    * Get rates on shipstation
    *
    * @param array $params
    *
    * @throws \Hyperzod\ShipstationSdkPhp\Exception\ApiErrorException if the request fails
    *
    */
   public function getRates(array $params)
   {
      return $this->request(HttpMethodEnum::POST, '/rates', $params);
   }
}
