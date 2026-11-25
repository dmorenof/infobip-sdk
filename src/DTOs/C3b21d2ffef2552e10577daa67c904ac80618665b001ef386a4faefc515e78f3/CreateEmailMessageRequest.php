<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3;

/**
 * CreateEmailMessageRequest
 */
final class CreateEmailMessageRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'emailTemplateId',
    ];

    protected const array VALIDATION = [
        'pinLength' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Email template ID that should reference a previously created [Broadcast template](https://www.infobip.com/docs/email/templates).
     * Format: int64
     */
    public int $emailTemplateId;
    /**
     * The sender of the 2FA message, an email address with an optional sender name (e.g. `company&#64;example.com` or `Jane Smith <jane.smith&#64;somecompany.com>`).
     */
    public string $from;
    /**
     * The ID of an opt out landing page to be used and displayed once an end user clicks the unsubscribe link. If not present, default opt out landing page will be displayed. Create a landing page in your Infobip account and use its ID, e.g., `1_23456`.
     */
    public string $landingPageId;
    /**
     * PIN code length.
     * Format: int32
     */
    public int $pinLength {
        set {
            $this->assigning('pinLength', $value);
            $this->pinLength = $value;
        }
    }
    /**
     * Type of PIN code that will be generated and sent as part of 2FA message.
     */
    public \InfobipSDK\Enums\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\PinType $pinType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'emailTemplateId' => is_int($value) ? $this->emailTemplateId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'landingPageId' => is_string($value) ? $this->landingPageId = $value : parent::assignMember($name, $value),
            'pinLength' => is_int($value) ? $this->pinLength = $value : parent::assignMember($name, $value),
            'pinType' => is_string($value) ? $this->pinType = \InfobipSDK\Enums\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\PinType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
