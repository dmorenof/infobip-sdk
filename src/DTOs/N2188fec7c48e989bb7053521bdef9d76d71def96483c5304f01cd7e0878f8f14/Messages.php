<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * Messages
 *
 * Call link messaging settings.
 */
final class Messages extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Message shown when a call link is expired.
     */
    public string $expirationText;
    /**
     * Message shown when a call link is not active.
     */
    public string $inactiveText;
    /**
     * Message shown when a call link is opened.
     */
    public string $welcomeText;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expirationText' => is_string($value) ? $this->expirationText = $value : parent::assignMember($name, $value),
            'inactiveText' => is_string($value) ? $this->inactiveText = $value : parent::assignMember($name, $value),
            'welcomeText' => is_string($value) ? $this->welcomeText = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
