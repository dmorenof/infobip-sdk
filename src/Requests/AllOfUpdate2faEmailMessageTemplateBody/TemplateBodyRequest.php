<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\AllOfUpdate2faEmailMessageTemplateBody;

final class TemplateBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'pinLength' => [
            'format' => 'int32',
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'pinLength',
        'pinType',
    ];

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
     * The type of PIN code that will be generated and sent as part of a 2FA message.
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
