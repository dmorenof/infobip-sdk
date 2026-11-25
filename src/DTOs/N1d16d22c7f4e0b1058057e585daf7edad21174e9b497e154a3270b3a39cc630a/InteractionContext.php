<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * InteractionContext
 *
 * Interaction Data.
 */
final class InteractionContext extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'interactionId',
];

    /**
     * Interaction Id.
     * Example: "12fa053a-a13b-43e0-afff-96f081aa6c38"
     */
    public string $interactionId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interactionId' => is_string($value) ? $this->interactionId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
