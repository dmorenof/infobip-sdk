<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * AppleMfbOutboundTypingIndicatorContent
 */
final class AppleMfbOutboundTypingIndicatorContent extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundEventContentType $type;
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\TypingIndicatorType $typingIndicatorType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundEventContentType::from($value) : parent::assignMember($name, $value),
            'typingIndicatorType' => is_string($value) ? $this->typingIndicatorType = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\TypingIndicatorType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
