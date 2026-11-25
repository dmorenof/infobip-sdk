<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Resource2\Conversations\ByConversationId;

final class Form extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'formId' => 'formId',
    ],
    'header' => [],
];

    public ?string $formId;
}
