<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\NumberRegistration\Resource1;

final class Brands extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'body',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [],
    'header' => [
        'X-Resource-Request-Id' => 'XResourceRequestId',
    ],
];

    protected const array PROPERTY_MAP = [
    'X-Resource-Request-Id' => 'XResourceRequestId',
];
    protected const array WIRE_PROPERTY_MAP = [
    'XResourceRequestId' => 'X-Resource-Request-Id',
];

    public const bool OPERATION_BODY = true;

    public ?string $XResourceRequestId;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Brand $body;
}
