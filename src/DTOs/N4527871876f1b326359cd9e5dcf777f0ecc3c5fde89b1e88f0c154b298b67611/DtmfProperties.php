<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * DtmfProperties
 *
 * Properties of the events that provide DTMF capturing result.
 */
final class DtmfProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Custom data.
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DtmfProperties\CustomDataMap $customData;
    /**
     * Collected DTMF input.
     */
    public string $dtmf;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PlayedContentProperties $playedContentProperties;
    /**
     * Whether collection was terminated by the timeout.
     */
    public bool $timeout;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dtmf' => is_string($value) ? $this->dtmf = $value : parent::assignMember($name, $value),
            'playedContentProperties' => $value instanceof \stdClass ? $this->playedContentProperties = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PlayedContentProperties($value) : parent::assignMember($name, $value),
            'timeout' => is_bool($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
