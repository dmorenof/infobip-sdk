<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\ResourceManagement\Resource1;

final class InboundMessageConfigurations extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'channel',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'channel' => 'channel',
        'configurationKey' => 'configurationKey',
        'countryCode' => 'countryCode',
        'keyword' => 'keyword',
        'number' => 'number',
        'numberKey' => 'numberKey',
        'resource' => 'resource',
        'resourceKey' => 'resourceKey',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'countryCode' => [
        'pattern' => '^[A-Z]{2}$',
    ],
    'keyword' => [
        'minLength' => 0,
        'maxLength' => 50,
    ],
];

    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ConfigurationType $channel;
    public ?string $configurationKey;
    public ?string $countryCode {
        set {
            $this->assigning('countryCode', $value);
            $this->countryCode = $value;
        }
    }
    public ?string $keyword {
        set {
            $this->assigning('keyword', $value);
            $this->keyword = $value;
        }
    }
    public ?string $number;
    public ?string $numberKey;
    public ?string $resource;
    public ?string $resourceKey;
}
