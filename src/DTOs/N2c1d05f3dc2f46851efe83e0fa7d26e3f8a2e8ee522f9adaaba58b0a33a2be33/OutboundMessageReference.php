<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33;

/**
 * OutboundMessageReference
 *
 * Outbound message reference, if matched by the Infobip platform.
 */
final class OutboundMessageReference extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the bulk of outgoing messages.
     */
    public string $bulkId;
    /**
     * ID of the paired outgoing message.
     */
    public string $outboundMessageId;
    /**
     * Date and time when the bulk or message was scheduled to be sent.
     * Format: date-time
     */
    public string $sendAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'outboundMessageId' => is_string($value) ? $this->outboundMessageId = $value : parent::assignMember($name, $value),
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
