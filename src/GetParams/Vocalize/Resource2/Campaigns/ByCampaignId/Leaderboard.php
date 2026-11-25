<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Vocalize\Resource2\Campaigns\ByCampaignId;

final class Leaderboard extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'day' => 'day',
            'fromTime' => 'fromTime',
            'page' => 'page',
            'size' => 'size',
            'toTime' => 'toTime',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page' => [
            'minimum' => 0,
        ],
        'size' => [
            'maximum' => 100,
            'exclusiveMinimum' => 0,
        ],
    ];

    public ?int $day;
    public ?string $fromTime;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?string $toTime;
}
