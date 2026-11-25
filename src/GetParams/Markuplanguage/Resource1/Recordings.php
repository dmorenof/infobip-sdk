<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Markuplanguage\Resource1;

final class Recordings extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'callId' => 'callId',
            'dialogId' => 'dialogId',
            'location' => 'location',
            'markupRecordingId' => 'markupRecordingId',
            'markupUrl' => 'markupUrl',
            'page' => 'page',
            'size' => 'size',
            'sortBy' => 'sortBy',
            'sortDirection' => 'sortDirection',
            'startTimeAfter' => 'startTimeAfter',
            'startTimeBefore' => 'startTimeBefore',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
        'size' => [
            'minimum' => 1,
            'maximum' => 100,
            'format' => 'int32',
        ],
    ];

    public ?string $callId;
    public ?string $dialogId;
    public ?\InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingLocation $location;
    public ?string $markupRecordingId;
    public ?string $markupUrl;
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
    public ?\InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallsMarkupLanguageRecordingSortColumn $sortBy;
    public ?\InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SortDirection $sortDirection;
    public ?string $startTimeAfter;
    public ?string $startTimeBefore;
}
