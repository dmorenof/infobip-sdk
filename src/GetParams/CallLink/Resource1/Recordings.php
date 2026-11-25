<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\CallLink\Resource1;

final class Recordings extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'callLinkConfigId' => 'callLinkConfigId',
            'callLinkId' => 'callLinkId',
            'destinationData' => 'destinationData',
            'destinationType' => 'destinationType',
            'location' => 'location',
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
        ],
        'size' => [
            'minimum' => 1,
            'maximum' => 100,
        ],
    ];

    public ?string $callLinkConfigId;
    public ?string $callLinkId;
    public ?string $destinationData;
    public ?\InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallLinkDestination $destinationType;
    public ?\InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\RecordingLocation $location;
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
    public ?\InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\RecordingSortColumn $sortBy;
    public ?\InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\SortDirection $sortDirection;
    public ?string $startTimeAfter;
    public ?string $startTimeBefore;
}
