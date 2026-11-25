<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Biometrics\Resource1\Kyc;

final class Sessions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'XSessionId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [],
        'header' => [
            'X-Session-Id' => 'XSessionId',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'X-Session-Id' => 'XSessionId',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'XSessionId' => 'X-Session-Id',
    ];

    public string $XSessionId;
}
