<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * ApiReport
 */
final class ApiReport extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'attemptCount' => [
        'format' => 'int32',
    ],
    'messageCount' => [
        'format' => 'int32',
    ],
];

    /**
     * The Application ID sent in the email request.
     */
    public string $applicationId;
    /**
     * Number of times delivery was attempted for the email.
     * Format: int32
     */
    public int $attemptCount {
        set {
            $this->assigning('attemptCount', $value);
            $this->attemptCount = $value;
        }
    }
    /**
     * The ID that uniquely identifies bulks of request.
     */
    public string $bulkId;
    /**
     * Tells when the email request was processed by Infobip.
     * Example: "2021-01-02T01:00:00.123Z"
     * Format: date-time
     */
    public string $doneAt;
    /**
     * The Entity ID sent in the email request.
     */
    public string $entityId;
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\Error $error;
    /**
     * Email request count.
     * Format: int32
     */
    public int $messageCount {
        set {
            $this->assigning('messageCount', $value);
            $this->messageCount = $value;
        }
    }
    /**
     * The ID that uniquely identifies the sent email request.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\Price $price;
    /**
     * Tells when the email was initiated. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Example: "2021-01-02T01:00:00.123Z"
     * Format: date-time
     */
    public string $sentAt;
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\Status $status;
    /**
     * This is the time in milliseconds between accepting the request and making the first delivery attempt to the destination.
     * Format: int64
     */
    public int $timeToFirstAttempt;
    /**
     * The recipient email address.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'attemptCount' => is_int($value) ? $this->attemptCount = $value : parent::assignMember($name, $value),
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\Error($value) : parent::assignMember($name, $value),
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\Price($value) : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\Status($value) : parent::assignMember($name, $value),
            'timeToFirstAttempt' => is_int($value) ? $this->timeToFirstAttempt = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
