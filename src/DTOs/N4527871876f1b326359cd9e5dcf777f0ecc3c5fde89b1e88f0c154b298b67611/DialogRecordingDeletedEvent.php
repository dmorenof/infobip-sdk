<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * DialogRecordingDeletedEvent
 */
final class DialogRecordingDeletedEvent extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Event
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'callId' => [
            'maxLength' => 128,
        ],
        'conferenceId' => [
            'maxLength' => 128,
        ],
        'dialogId' => [
            'maxLength' => 128,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;
}
