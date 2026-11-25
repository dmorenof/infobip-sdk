<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\Email\Resource1;

final class Content extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'XContentId',
    'XMediaType',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [],
    'header' => [
        'X-Content-Id' => 'XContentId',
        'X-Media-Type' => 'XMediaType',
        'X-Validity-Period-Minutes' => 'XValidityPeriodMinutes',
    ],
];

    protected const array PROPERTY_MAP = [
    'X-Content-Id' => 'XContentId',
    'X-Media-Type' => 'XMediaType',
    'X-Validity-Period-Minutes' => 'XValidityPeriodMinutes',
];
    protected const array WIRE_PROPERTY_MAP = [
    'XContentId' => 'X-Content-Id',
    'XMediaType' => 'X-Media-Type',
    'XValidityPeriodMinutes' => 'X-Validity-Period-Minutes',
];

    public const bool OPERATION_BODY = true;

    public string $XContentId;
    public string $XMediaType;
    public ?string $XValidityPeriodMinutes;
    public string|\Psr\Http\Message\StreamInterface|null $body;
}
