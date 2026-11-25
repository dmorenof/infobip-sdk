<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Calls\Resource1\SipTrunks\ServiceAddresses\Countries;

final class Regions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'countryCode',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'countryCode' => 'countryCode',
    ],
    'header' => [],
];

    public string $countryCode;
}
