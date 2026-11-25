<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * Result
 */
final class Result extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'attemptCount' => [
        'format' => 'int32',
    ],
    'smsCount' => [
        'format' => 'int32',
    ],
];

    /**
     * Used when specifying an application in outbound send requests. It is also returned in notification events. For detailed usage, refer to the [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
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
     * Contains the link to the HTML sent to recipient. This will be present only if the _view in browser_ feature is used in the email.
     *  (Please note that this feature is not activated automatically for Email traffic sent over API. If you would like to utilize it please reach out to your Infobip person of contact.)
     */
    public string $browserLink;
    /**
     * The ID that uniquely identifies a list of email messages. This is either defined by user in the request or auto generated.
     */
    public string $bulkId;
    /**
     * Callback data sent through `callbackData` field in fully featured email.
     */
    public string $callbackData;
    /**
     * ID of a campaign that was sent in the message.
     */
    public string $campaignReferenceId;
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\Content $content;
    /**
     * Delivery date and time.
     * Format: date-time
     */
    public string $doneAt;
    /**
     * Used when specifying an entity in outbound send requests. It is also returned in notification events. For detailed usage, refer to the [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $entityId;
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\ErrorInfo $error;
    /**
     * The ID that uniquely identifies the email sent to the recipient.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\PriceInfo $price;
    /**
     * The IP address that was used to send out the email.
     */
    public string $sendingIp;
    /**
     * Send date and time. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $sentAt;
    /**
     * The number of emails sent.
     * Format: int32
     */
    public int $smsCount {
        set {
            $this->assigning('smsCount', $value);
            $this->smsCount = $value;
        }
    }
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\SmtpInfo $smtp;
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailStatus $status;
    /**
     * This is the time in milliseconds between accepting the request and making the first delivery attempt to the destination.
     * Format: int64
     */
    public int $timeToFirstAttempt;
    /**
     * Destination email address.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'attemptCount' => is_int($value) ? $this->attemptCount = $value : parent::assignMember($name, $value),
            'browserLink' => is_string($value) ? $this->browserLink = $value : parent::assignMember($name, $value),
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'content' => $value instanceof \stdClass ? $this->content = new \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\Content($value) : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\ErrorInfo($value) : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\PriceInfo($value) : parent::assignMember($name, $value),
            'sendingIp' => is_string($value) ? $this->sendingIp = $value : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'smsCount' => is_int($value) ? $this->smsCount = $value : parent::assignMember($name, $value),
            'smtp' => $value instanceof \stdClass ? $this->smtp = new \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\SmtpInfo($value) : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailStatus($value) : parent::assignMember($name, $value),
            'timeToFirstAttempt' => is_int($value) ? $this->timeToFirstAttempt = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
