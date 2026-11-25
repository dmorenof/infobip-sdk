<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\Provisioning\Resource1\Applications;

final class ByApplicationId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'failOnLinkedResources' => 'failOnLinkedResources',
    ],
    'header' => [],
];

    public ?bool $failOnLinkedResources;
}
