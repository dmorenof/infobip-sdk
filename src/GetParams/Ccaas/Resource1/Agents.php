<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Resource1;

final class Agents extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'agentIds' => 'agentIds',
        'availability' => 'availability',
        'createdAfter' => 'createdAfter',
        'createdBefore' => 'createdBefore',
        'displayName' => 'displayName',
        'email' => 'email',
        'enabled' => 'enabled',
        'limit' => 'limit',
        'orderBy' => 'orderBy',
        'page' => 'page',
        'queueIds' => 'queueIds',
        'role' => 'role',
        'status' => 'status',
        'updatedAfter' => 'updatedAfter',
        'updatedBefore' => 'updatedBefore',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'agentIds' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'limit' => [
        'maximum' => 999,
    ],
    'queueIds' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
];

    /** @var list<string>|null */
    public ?array $agentIds;
    public ?\InfobipSDK\Enums\Ccaas\Resource1\Agents\Get\Query\QueryAvailabilityEnum $availability;
    public ?string $createdAfter;
    public ?string $createdBefore;
    public ?string $displayName;
    public ?string $email;
    public ?bool $enabled;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $orderBy;
    public ?int $page;
    /** @var list<string>|null */
    public ?array $queueIds;
    public ?\InfobipSDK\Enums\Ccaas\Resource1\Agents\Get\Query\QueryRoleEnum $role;
    public ?\InfobipSDK\Enums\Ccaas\Resource1\Agents\Get\Query\QueryStatusEnum $status;
    public ?string $updatedAfter;
    public ?string $updatedBefore;
}
