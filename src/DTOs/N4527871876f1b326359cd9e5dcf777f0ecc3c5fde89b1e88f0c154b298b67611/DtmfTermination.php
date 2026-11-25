<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * DtmfTermination
 */
final class DtmfTermination extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicTermination
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Digits used to end the audio playback. If no digits are set, any DTMF digit will end the audio playback. After first DTMF digit is pressed, playback will stop and pressed digit will be present in `PLAY_FINISHED` or `SAY_FINISHED` event.
     * If terminator is set to `123`, pressing either `1`, `2` or `3` will terminate the playback.
     */
    public string $terminator;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'terminator' => is_string($value) ? $this->terminator = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
