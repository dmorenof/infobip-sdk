<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Resource2\ConversationForms;

final class Fields extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'limit' => 'limit',
        'orderBy' => 'orderBy',
        'page' => 'page',
        'title' => 'title',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'limit' => [
        'maximum' => 999,
    ],
];

    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $orderBy;
    public ?int $page;
    public ?string $title;
}
