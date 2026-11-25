<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * Destination as Cc
 */
final class MoDestinationCc extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Message destination address, carbon copy.
     * Example: "41793026999"
     */
    public string $cc;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cc' => is_string($value) ? $this->cc = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
