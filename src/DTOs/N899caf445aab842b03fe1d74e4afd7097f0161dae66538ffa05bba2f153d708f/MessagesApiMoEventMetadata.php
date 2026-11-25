<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMoEventMetadata
 *
 * Additional information associated with the message
 */
final class MessagesApiMoEventMetadata extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Correlation data included in the outbound message. Auto-generated if not set explicitly.
     */
    public string $correlationData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'correlationData' => is_string($value) ? $this->correlationData = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
