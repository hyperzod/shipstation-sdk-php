<?php

namespace Hyperzod\ShipstationSdkPhp\Service;

use Hyperzod\ShipstationSdkPhp\Enums\HttpMethodEnum;

class LabelsService extends AbstractService
{
   /**
    * Purchase a label with rate id on shipstation
    *
    * @param string $rate_id
    * @param array $params
    *
    * @throws \Hyperzod\ShipstationSdkPhp\Exception\ApiErrorException if the request fails
    *
    */
   public function purchaseLabelWithRateId(string $rate_id, array $params)
   {
      return $this->request(HttpMethodEnum::POST, '/labels/rates/' . $rate_id, $params);
   }
}
