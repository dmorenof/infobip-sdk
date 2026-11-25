<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Email\Resource1\Templates\ByTemplateId\Attachments;

final class ByAttachmentId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'attachmentId',
        'templateId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'attachmentId' => 'attachmentId',
            'templateId' => 'templateId',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $attachmentId;
    public int $templateId;
}
