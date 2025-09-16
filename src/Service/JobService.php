<?php

namespace Hyperzod\ShipstationSdkPhp\Service;

use Hyperzod\ShipstationSdkPhp\Enums\HttpMethodEnum;

class JobService extends AbstractService
{
   /**
    * Create a job on shipstation
    *
    * @param array $params
    *
    * @throws \Hyperzod\ShipstationSdkPhp\Exception\ApiErrorException if the request fails
    *
    */
   public function create(array $params)
   {
      return $this->request(HttpMethodEnum::POST, '/jobs', $params);
   }
}
