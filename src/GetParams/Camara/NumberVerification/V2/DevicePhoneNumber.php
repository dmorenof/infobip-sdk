<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Camara\NumberVerification\V2;

final class DevicePhoneNumber extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [],
    'header' => [
        'X-Correlator' => 'XCorrelator',
    ],
];

    protected const array PROPERTY_MAP = [
    'X-Correlator' => 'XCorrelator',
];
    protected const array WIRE_PROPERTY_MAP = [
    'XCorrelator' => 'X-Correlator',
];

    public ?string $XCorrelator;
}
