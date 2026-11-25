<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\Camara\NumberVerification\V2;

final class Verify extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'body',
    ];
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

    public const bool OPERATION_BODY = true;

    public ?string $XCorrelator;
    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\NumberVerifyV2RequestDto $body;
}
