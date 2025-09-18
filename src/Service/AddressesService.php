<?php

namespace Hyperzod\ShipstationSdkPhp\Service;

use Hyperzod\ShipstationSdkPhp\Enums\HttpMethodEnum;

class AddressesService extends AbstractService
{
   /**
    * Validate an address on shipstation
    *
    * @param array $params
    *
    * @throws \Hyperzod\ShipstationSdkPhp\Exception\ApiErrorException if the request fails
    *
    */
   public function validate(array $params)
   {
      return $this->request(HttpMethodEnum::POST, '/addresses/validate', $params);
   }
}
