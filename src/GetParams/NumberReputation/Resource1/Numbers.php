<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\NumberReputation\Resource1;

final class Numbers extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'jobName' => 'jobName',
        'lastUpdatedFrom' => 'lastUpdatedFrom',
        'lastUpdatedTo' => 'lastUpdatedTo',
        'page' => 'page',
        'phoneNumbers' => 'phoneNumbers',
        'registeredFrom' => 'registeredFrom',
        'registeredTo' => 'registeredTo',
        'reputationAvailable' => 'reputationAvailable',
        'size' => 'size',
        'status' => 'status',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'page' => [
        'format' => 'int32',
    ],
    'phoneNumbers' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'reputationAvailable' => [
        'items' => [
            'type' => 'string',
            'rules' => [
                'enum' => [
                    'AVAILABLE',
                    'NOT_FOUND',
                    'UNAVAILABLE',
                    'UNKNOWN',
                ],
            ],
        ],
    ],
    'size' => [
        'format' => 'int32',
    ],
    'status' => [
        'items' => [
            'type' => 'string',
            'rules' => [
                'enum' => [
                    'ERROR_FRAUD',
                    'ERROR_INVALID',
                    'ERROR_REGISTERED',
                    'ERROR_UNEXPECTED',
                    'NOT_FOUND',
                    'PENDING',
                    'REGISTERED',
                    'UNKNOWN',
                ],
            ],
        ],
    ],
];

    public ?string $jobName;
    public ?string $lastUpdatedFrom;
    public ?string $lastUpdatedTo;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $phoneNumbers;
    public ?string $registeredFrom;
    public ?string $registeredTo;
    /** @var list<string>|null */
    public ?array $reputationAvailable;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $status;
}
