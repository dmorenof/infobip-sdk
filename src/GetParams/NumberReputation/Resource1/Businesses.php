<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\NumberReputation\Resource1;

final class Businesses extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'businessName' => 'businessName',
            'page' => 'page',
            'registeredFrom' => 'registeredFrom',
            'registeredTo' => 'registeredTo',
            'size' => 'size',
            'status' => 'status',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page' => [
            'format' => 'int32',
        ],
        'size' => [
            'format' => 'int32',
        ],
        'status' => [
            'items' => [
                'type' => 'string',
                'rules' => [
                    'enum' => [
                        'ERROR_DUNS_MISMATCH',
                        'PENDING',
                        'REGISTERED',
                        'UNKNOWN',
                    ],
                ],
            ],
        ],
    ];

    public ?string $businessName;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $registeredFrom;
    public ?string $registeredTo;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $status;
}
