<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Calls\Resource1;

final class Dialogs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationId' => 'applicationId',
        'callsConfigurationId' => 'callsConfigurationId',
        'childCallId' => 'childCallId',
        'page' => 'page',
        'parentCallId' => 'parentCallId',
        'size' => 'size',
        'startTimeAfter' => 'startTimeAfter',
        'state' => 'state',
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

    public ?string $applicationId;
    public ?string $callsConfigurationId;
    public ?string $childCallId;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $parentCallId;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?string $startTimeAfter;
    public ?\InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicDialogState $state;
}
