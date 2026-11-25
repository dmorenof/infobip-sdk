<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Voice\Resource2\Recording;

final class Metadata extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'callId' => 'callId',
        'conferenceId' => 'conferenceId',
        'conversationId' => 'conversationId',
        'deletedAtFrom' => 'deletedAtFrom',
        'deletedAtTo' => 'deletedAtTo',
        'deletedBy' => 'deletedBy',
        'direction' => 'direction',
        'durationFrom' => 'durationFrom',
        'durationTo' => 'durationTo',
        'filename' => 'filename',
        'mediaType' => 'mediaType',
        'page' => 'page',
        'participantId' => 'participantId',
        'participantIdentity' => 'participantIdentity',
        'participantName' => 'participantName',
        'participantType' => 'participantType',
        'recordingId' => 'recordingId',
        'size' => 'size',
        'sortBy' => 'sortBy',
        'sortDirection' => 'sortDirection',
        'startedAtFrom' => 'startedAtFrom',
        'startedAtTo' => 'startedAtTo',
        'transferredFrom' => 'transferredFrom',
        'transferredFromQueue' => 'transferredFromQueue',
        'transferredTo' => 'transferredTo',
        'transferredToQueue' => 'transferredToQueue',
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
        'maximum' => 999,
        'format' => 'int32',
    ],
];

    public ?string $callId;
    public ?string $conferenceId;
    public ?string $conversationId;
    public ?int $deletedAtFrom;
    public ?int $deletedAtTo;
    public ?string $deletedBy;
    public ?string $direction;
    public ?int $durationFrom;
    public ?int $durationTo;
    public ?string $filename;
    public ?string $mediaType;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $participantId;
    public ?string $participantIdentity;
    public ?string $participantName;
    public ?string $participantType;
    public ?string $recordingId;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?string $sortBy;
    public ?\InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\Direction $sortDirection;
    public ?int $startedAtFrom;
    public ?int $startedAtTo;
    public ?string $transferredFrom;
    public ?string $transferredFromQueue;
    public ?string $transferredTo;
    public ?string $transferredToQueue;
}
