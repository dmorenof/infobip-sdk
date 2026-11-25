<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Email\Messages\Post;

final class EmailMessagesResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'pinLength' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The ID of the application that represents your service (e.g. 2FA for login, 2FA for changing the password, etc.) for which the requested message has been created.
     */
    public string $applicationId;
    /**
     * Email template ID that should reference a previously created Email template.
     * Format: int64
     */
    public int $emailTemplateId;
    /**
     * The sender of the 2FA message, an email address with an optional sender name (e.g. `company&#64;example.com` or `Jane Smith <jane.smith&#64;somecompany.com>`).
     */
    public string $from;
    /**
     * Opt out landing page ID that should reference a previously created landing page template.
     */
    public string $landingPageId;
    /**
     * The ID of the message template (message body with the PIN placeholder) that is sent to the recipient.
     */
    public string $messageId;
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
     * The type of PIN code that will be generated and sent as part of 2FA message. You can set PIN type to numeric, alpha, alphanumeric or hex.
     */
    public \InfobipSDK\Enums\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\PinType $pinType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'emailTemplateId' => is_int($value) ? $this->emailTemplateId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'landingPageId' => is_string($value) ? $this->landingPageId = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'pinLength' => is_int($value) ? $this->pinLength = $value : parent::assignMember($name, $value),
            'pinType' => is_string($value) ? $this->pinType = \InfobipSDK\Enums\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\PinType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
