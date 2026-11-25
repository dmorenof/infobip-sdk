<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * WhatsAppInboundContactProfile
 */
final class WhatsAppInboundContactProfile extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Display name of the end user.
     */
    public string $name;
    /**
     * Business-scoped user ID valid across all phone numbers in a linked business portfolio. Present only for managed businesses with portfolio linking enabled.
     */
    public string $parentUserId;
    /**
     * Sender's phone number. May be absent if the user has enabled the Meta username feature and you have not exchanged messages with them in the last 30 days.
     */
    public string $phoneNumber;
    /**
     * Business-scoped user ID (BSUID) assigned by Meta. Stable identifier for the end user, scoped to the receiving business.
     */
    public string $userId;
    /**
     * Meta username of the end user. Present only if the user has a Meta username.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'parentUserId' => is_string($value) ? $this->parentUserId = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'userId' => is_string($value) ? $this->userId = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
