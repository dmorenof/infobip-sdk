<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Resources\Resource1;

final class Requests extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationId' => 'applicationId',
        'countryCode' => 'countryCode',
        'entityId' => 'entityId',
        'id' => 'id',
        'page' => 'page',
        'senderNameLike' => 'senderNameLike',
        'size' => 'size',
        'sort' => 'sort',
        'status' => 'status',
        'type' => 'type',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'applicationId' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'countryCode' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'entityId' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'id' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'page' => [
        'format' => 'int32',
    ],
    'size' => [
        'format' => 'int32',
    ],
    'sort' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'status' => [
        'items' => [
            'type' => 'string',
            'rules' => [
                'enum' => [
                    'AUTOMATIC_VALIDATION',
                    'CANCELED',
                    'COMPLETED',
                    'EXPIRED',
                    'IN_PROGRESS',
                    'IN_REVIEW',
                    'PENDING',
                    'PENDING_REVIEW',
                    'REJECTED',
                    'UPDATE_REQUESTED',
                    'UPDATE_REQUESTED_BY_INTERNAL_REVIEWER',
                ],
            ],
        ],
    ],
    'type' => [
        'items' => [
            'type' => 'string',
            'rules' => [
                'enum' => [
                    'ALPHANUMERIC_REGISTRATION',
                    'NUMBER_PURCHASE',
                    'RCS_SENDER_LAUNCH',
                ],
            ],
        ],
    ],
];

    /** @var list<string>|null */
    public ?array $applicationId;
    /** @var list<string>|null */
    public ?array $countryCode;
    /** @var list<string>|null */
    public ?array $entityId;
    /** @var list<string>|null */
    public ?array $id;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $senderNameLike;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $sort;
    /** @var list<string>|null */
    public ?array $status;
    /** @var list<string>|null */
    public ?array $type;
}
