<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Viber\Resource1\Senders\BySender\Templates;

final class ByTemplateId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'sender',
        'templateId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'sender' => 'sender',
            'templateId' => 'templateId',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $sender;
    public string $templateId;
}
