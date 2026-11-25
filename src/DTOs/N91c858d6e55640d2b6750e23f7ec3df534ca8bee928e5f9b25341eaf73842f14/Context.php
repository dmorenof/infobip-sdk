<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * Context
 *
 * Message Context.
 */
final class Context extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Identifies Apple Messages for Business features supported by the customer’s device.
     */
    public \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Context\CapabilityListCollection $capabilityList;
    /**
     * Group designates to handle the customer’s question or problem.
     */
    public string $group;
    /**
     * Purpose of the chat.
     */
    public string $intent;
    /**
     * Locale.
     */
    public string $locale;
    /**
     * Reference identifier sent in the original outbound Business Update message. Available only in conversations with Business Update messages.
     */
    public string $referenceId;
    /**
     * Phone number of the user who sent the message. Available only in conversations with Business Update messages.
     */
    public string $userPhoneNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'group' => is_string($value) ? $this->group = $value : parent::assignMember($name, $value),
            'intent' => is_string($value) ? $this->intent = $value : parent::assignMember($name, $value),
            'locale' => is_string($value) ? $this->locale = $value : parent::assignMember($name, $value),
            'referenceId' => is_string($value) ? $this->referenceId = $value : parent::assignMember($name, $value),
            'userPhoneNumber' => is_string($value) ? $this->userPhoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
