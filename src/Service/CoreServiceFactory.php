<?php

namespace Hyperzod\ShipstationSdkPhp\Service;

/**
 * Service factory class for API resources in the root namespace.
 * @property JobService $jobService
 */
class CoreServiceFactory extends AbstractServiceFactory
{
    /**
     * @var array<string, string>
     */
    private static $classMap = [
        'addresses' => AddressesService::class,
        'rates' => RatesService::class,
        'labels' => LabelsService::class,
        'tracking' => TrackingService::class
    ];

    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
