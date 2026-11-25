<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff;

/**
 * GetValidation
 *
 * Validation get response.
 */
final class GetValidation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bulkValidationDate',
        'catchAll',
        'destination',
        'disposable',
        'risk',
        'roleBased',
        'validMailbox',
        'validSyntax',
    ];

    protected const array VALIDATION = [
        'validMailbox' => [
            'pattern' => '^(true|false|unknown)$',
        ],
    ];

    /**
     * Date and time when email address was validated.
     * Format: date-time
     */
    public string $bulkValidationDate;
    /**
     * Indicates catch all status of email address.
     */
    public bool $catchAll;
    /**
     * The validated email address.
     */
    public string $destination;
    /**
     * This field is provided when the validMailbox status is 'unknown' or 'false',
     * offering specific explanations for why the email address has been assigned that status.
     *
     */
    public string $detailedReasons;
    /**
     * Suggests similar alternate address that may be valid.
     */
    public string $didYouMean;
    /**
     * Indicates whether email address is disposable.
     * A disposable email address is a temporary address that is often used for short-term purposes and can be discarded after use.
     *
     */
    public bool $disposable;
    public \InfobipSDK\Enums\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ValidationReason $reason;
    public \InfobipSDK\Enums\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ApiRisk $risk;
    /**
     * Indicates whether email address is role-based.
     * A role-based email address is one that is associated with a specific function or group within an organization,
     * such as marketing&#64;example.org, rather than an individual person.
     *
     */
    public bool $roleBased;
    /**
     * Indicates whether email address is valid.
     * Example: "true|false|unknown"
     */
    public string $validMailbox {
        set {
            $this->assigning('validMailbox', $value);
            $this->validMailbox = $value;
        }
    }
    /**
     * Indicates whether email address syntax is valid.
     */
    public bool $validSyntax;
    /**
     * Unique identifier for the bulk email validation request. Provide your own or leave it blank to have one generated automatically.
     *
     */
    public string $validationRequestId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkValidationDate' => is_string($value) ? $this->bulkValidationDate = $value : parent::assignMember($name, $value),
            'catchAll' => is_bool($value) ? $this->catchAll = $value : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'detailedReasons' => is_string($value) ? $this->detailedReasons = $value : parent::assignMember($name, $value),
            'didYouMean' => is_string($value) ? $this->didYouMean = $value : parent::assignMember($name, $value),
            'disposable' => is_bool($value) ? $this->disposable = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = \InfobipSDK\Enums\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ValidationReason::from($value) : parent::assignMember($name, $value),
            'risk' => is_string($value) ? $this->risk = \InfobipSDK\Enums\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ApiRisk::from($value) : parent::assignMember($name, $value),
            'roleBased' => is_bool($value) ? $this->roleBased = $value : parent::assignMember($name, $value),
            'validMailbox' => is_string($value) ? $this->validMailbox = $value : parent::assignMember($name, $value),
            'validSyntax' => is_bool($value) ? $this->validSyntax = $value : parent::assignMember($name, $value),
            'validationRequestId' => is_string($value) ? $this->validationRequestId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
