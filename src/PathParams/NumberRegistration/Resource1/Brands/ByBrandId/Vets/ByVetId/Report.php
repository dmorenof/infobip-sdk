<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\NumberRegistration\Resource1\Brands\ByBrandId\Vets\ByVetId;

final class Report extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'brandId',
    'vetId',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'brandId' => 'brandId',
        'vetId' => 'vetId',
    ],
    'query' => [],
    'header' => [],
];

    public string $brandId;
    public string $vetId;
}
