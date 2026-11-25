<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Vocalize\Resource2\Campaigns;

final class Me extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'activeOnly' => 'activeOnly',
            'hasScores' => 'hasScores',
        ],
        'header' => [],
    ];

    public ?bool $activeOnly;
    public ?bool $hasScores;
}
