<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\NumberReputation\Resource1\Businesses\ByBusinessId;

final class Numbers extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'jobName' => 'jobName',
            'phoneNumbers' => 'phoneNumbers',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'phoneNumbers' => [
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    public ?string $jobName;
    /** @var list<string>|null */
    public ?array $phoneNumbers;
}
