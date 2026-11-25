<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Signals\Resource2\Configs\Blocking\ByConfigId\TrustedNumbers;

final class ByPhoneNumber extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'configId',
        'phoneNumber',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'configId' => 'configId',
            'phoneNumber' => 'phoneNumber',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'configId' => [
            'minLength' => 32,
            'maxLength' => 32,
        ],
    ];

    public string $configId {
        set {
            $this->assigning('configId', $value);
            $this->configId = $value;
        }
    }
    public string $phoneNumber;
}
