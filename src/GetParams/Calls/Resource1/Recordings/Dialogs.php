<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Calls\Resource1\Recordings;

final class Dialogs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationId' => 'applicationId',
        'callEndpointIdentifier' => 'callEndpointIdentifier',
        'callEndpointType' => 'callEndpointType',
        'callId' => 'callId',
        'callsConfigurationId' => 'callsConfigurationId',
        'composition' => 'composition',
        'dialogId' => 'dialogId',
        'endTimeBefore' => 'endTimeBefore',
        'entityId' => 'entityId',
        'location' => 'location',
        'page' => 'page',
        'size' => 'size',
        'startTimeAfter' => 'startTimeAfter',
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
    public ?string $callEndpointIdentifier;
    public ?\InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpointType $callEndpointType;
    public ?string $callId;
    public ?string $callsConfigurationId;
    public ?bool $composition;
    public ?string $dialogId;
    public ?string $endTimeBefore;
    public ?string $entityId;
    public ?\InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingLocation $location;
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
    public ?string $startTimeAfter;
}
