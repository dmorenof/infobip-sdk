<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\Ccaas\Resource2\Conversations\ByConversationId\Form;

final class Assign extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'formId',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'formId' => 'formId',
    ],
    'header' => [],
];

    public string $formId;
}
