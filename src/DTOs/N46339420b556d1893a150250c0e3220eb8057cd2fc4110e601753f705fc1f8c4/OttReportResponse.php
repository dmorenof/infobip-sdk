<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4;

/**
 * OTTReportResponse
 */
final class OttReportResponse extends \InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8\MessageCount
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'messageCount' => [
            'format' => 'int32',
        ],
        'pendingMessageCount' => [
            'format' => 'int32',
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'messageCount',
        'pendingMessageCount',
    ];

    /**
     * Collection of reports, one per every received message.
     */
    public \InfobipSDK\Collections\N46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4\OttReportResponse\ResultsCollection $results;
}
