<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33;

/**
 * InboundMessageReference
 *
 * Inbound message reference, if matched by the Infobip platform.
 */
final class InboundMessageReference extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the message that triggered the event if matched by the Infobip platform. For example, MO message ID.
     */
    public string $inboundMessageId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'inboundMessageId' => is_string($value) ? $this->inboundMessageId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
