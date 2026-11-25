<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Vocalize\Resource2\Scores;

final class Stats extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'campaignId',
        'userId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'campaignId' => 'campaignId',
            'userId' => 'userId',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'userId' => [
            'minLength' => 1,
        ],
    ];

    public string $campaignId;
    public string $userId {
        set {
            $this->assigning('userId', $value);
            $this->userId = $value;
        }
    }
}
