<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\NumberRegistration\Resource1;

final class Documents extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationId' => 'applicationId',
        'entityId' => 'entityId',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    public ?string $applicationId;
    public ?string $entityId;
    public ?\InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\UploadDocumentApiDoc $body;
}
