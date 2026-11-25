<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName;

final class Status extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'sender',
        'templateName',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'sender' => 'sender',
            'templateName' => 'templateName',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $sender;
    public string $templateName;
}
