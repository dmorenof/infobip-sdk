<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Zalo\Resource1\Sender\BySender\Templates;

final class ByTemplateName extends \Dmorenof\SdkRuntime\DTO
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
    public int $templateName;
}
