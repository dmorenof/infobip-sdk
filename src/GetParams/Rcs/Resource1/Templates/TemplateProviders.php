<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Rcs\Resource1\Templates;

final class TemplateProviders extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'countryCode' => 'countryCode',
        'sender' => 'sender',
    ],
    'header' => [],
];

    public ?string $countryCode;
    public ?string $sender;
}
