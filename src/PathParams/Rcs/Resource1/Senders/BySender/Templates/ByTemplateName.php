<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates;

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

    protected const array VALIDATION = [
    'templateName' => [
        'minLength' => 1,
        'maxLength' => 20,
    ],
];

    public string $sender;
    public string $templateName {
        set {
            $this->assigning('templateName', $value);
            $this->templateName = $value;
        }
    }
}
