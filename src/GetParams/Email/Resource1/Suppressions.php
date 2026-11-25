<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Email\Resource1;

final class Suppressions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'domainName',
        'type',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'createdDateFrom' => 'createdDateFrom',
            'createdDateTo' => 'createdDateTo',
            'domainName' => 'domainName',
            'emailAddress' => 'emailAddress',
            'page' => 'page',
            'recipientDomain' => 'recipientDomain',
            'size' => 'size',
            'type' => 'type',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page' => [
            'minimum' => 0,
        ],
        'size' => [
            'minimum' => 1,
            'maximum' => 1000,
        ],
    ];

    public ?string $createdDateFrom;
    public ?string $createdDateTo;
    public string $domainName;
    public ?string $emailAddress;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $recipientDomain;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public \InfobipSDK\Enums\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\ApiSuppressionType $type;
}
